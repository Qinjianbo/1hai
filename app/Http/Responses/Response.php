<?php
namespace App\Http\Response;

use Illuminate\Http\Response as BaseResponse;
class Response extends BaseResponse;
{
    /**
     * responseStatus
     *
     * public @int
     *
     * @access public
     */
    public $responseStatus = 200;
    /**
     * responseMsg
     *
     * @public string
     * @access public
     */
    public $responseMsg = 'OK';
    /**
     * __construct
     *
     * @param  string $content
     * @param  int    $status
     * @param  array  $headers
     * @access public
     * @return mixed
     */
    public function __construct($content = '', $status = 200, $headers = array(), $responseSt
atus = 200, $responseMsg = 'OK')
    {
        $this->responseStatus = $responseStatus;
        $this->responseMsg = $responseMsg;
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
        parent :: setContent(['ResponseStatus'=>$this->responseStatus, 'ResponseMsg'=>$this->
responseMsg, 'ResponseData'=>$content]);
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
    /**
     * getCode
     *
     *
     * @access public
     *
     * @return mixed
     */
     public function getCode()
    {
        return $this->responseStatus;
    }
}
