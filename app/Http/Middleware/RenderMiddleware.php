<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class RenderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $responseClass = 'App\Http\Responses\Response';
        $code  = 200;
        $headers = [];
        $content = $response->getOriginalContent();
        if ($request->input('Sign', $request->input('sign'))) {
            $responseClass = 'App\Http\Responses\MobileResponse';
            $code = 0;
            $headers['X-Api-Proxy'] = $request->header('x_api_proxy', '');
            if ($content && $request->header('x_forwarded_proto')) {
                $content = str_replace('http:\\/\\/', 'https:\\/\\/', $content);
                $content = str_replace('http%3A%2F%2F', 'https%3A%2F%2F', $content);
                $content = str_replace('http://', 'https://', $content);
                $content = collect(json_decode($content, true));
            }
        }
        $statusText = $responseClass :: $statusTexts[$response->status()];
        if ($response->status() == 200) {
            return new $responseClass($content, $response->status(), $headers, $code, $statusText);
        } elseif ($response->exception) {
            $exception = $response->exception;
            $message = sprintf(
                '%s:%d err:%s err_no:%s',
                substr($exception->getFile(), strpos($exception->getFile(), '/app/') + 5),
                $exception->getLine(),
                $exception->getMessage(),
                $exception->getCode()
            );
            return new $responseClass('', 200, $headers, $exception->getCode()?:$response->status(), $exception->getMessage());
        } elseif ($response->status() == 401) {
            return new $responseClass('', 200, $headers, $response->status(), $response->getOriginalContent());
        } else {
            $data = $response->getData(true);
            return new $responseClass($data, $response->status(), $headers, $response->status(), $statusText);
        }
    }

    /**
     * terminate
     *
     * @param  mixed $request
     * @param  mixed $response
     * @access public
     * @return mixed
     */
    public function terminate($request, $response)
    {
        if (config('log.default.level') == 'debug') {
            log :: debug($request . ' '. $response);
        } else {
            $message =  sprintf(
                '{"app-id":"%s","unique_id":"%s"} %s',
                $request->header('app_id'),
                $request->header('unique_id'),
                $response->getContent()
            );
            $code = 200;
            if ($request->input('Sign', $request->input('sign'))) {
                $code = 0;
            }
            if ($response->getCode() == $code) {
                $message = mb_strlen($message, 'utf-8') >256 ?
                (mb_substr($message, 0, 240, 'utf-8').'...') : $message;
                Log :: notice($message);
            } elseif (in_array($response->getCode(), [401, 422])) {
                Log :: warning($message);
            } else {
                Log :: error($message);
            }
        }
    }
}
