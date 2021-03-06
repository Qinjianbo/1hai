<?php

namespace App\Http\Responses;

use Illuminate\Http\Response as BaseResponse;

class Response extends BaseResponse
{
    /**
     * code
     *
     * public @int
     *
     * @access public
     */
    public $code = 200;
    /**
     * info
     *
     * @public string
     * @access public
     */
    public $info = 'OK';
    /**
     * __construct
     *
     * @param  string $content
     * @param  int    $status
     * @param  array  $headers
     * @access public
     * @return mixed
     */
    public function __construct($content = '', $status = 200, $headers = array(), $code = 200, $info = 'OK')
    {
        $this->code = $code;
        $this->info = $info;
        parent :: __construct($content, $status, $headers);
    }
    /**
     * setContent
     *
     * @param  mixed $content
     * @access public
     * @return mixed
     */
    public function setContent($content)
    {
        parent :: setContent(['code'=>$this->code, 'info'=>$this->info, 'data'=>$content]);
    }
    /**
     * Morph the given content into JSON.
     *
     * @param  mixed   $content
     * @return string
     */
    protected function morphToJson($content)
    {
        if ($content instanceof Jsonable) {
            return $content->toJson();
        }

        return json_encode($content, JSON_UNESCAPED_UNICODE);
    }
    public function getCode()
    {
        return $this->code;
    }
}
