<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/27 11:08
 */
namespace aliyun\sdk\oss\lib;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\help\Parse;
use aliyun\sdk\core\http\Response;
use aliyun\sdk\core\Product;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class OssRequest
{

    protected $product = "oss";

    protected $domain = "";

    protected $region = "";

    protected $param = [];

    protected $header = [];

    protected $path = "/";

    protected $request_method = "GET";

    public $bucket = "";

    public $encoding_type = "UTF-8";

    protected $x_oss_header = [];

    protected $content_type = "application/x-www-form-urlencoded";

    protected $content_body = null;

    public function __construct()
    {
        $this->region = Aliyun::$region_id;
        $this->domain = Product::domain($this->product,$this->region);
        $this->setRequestHeader("Host","oss.aliyuncs.com");
    }

    public function setParam($key, $value){
        if(is_array($key)){
            foreach ($key as $k=>$v){
                $this->param[$k] = mb_convert_encoding($v,$this->encoding_type);
            }
        }else{
            $this->param[$key] = mb_convert_encoding($value,$this->encoding_type);
        }
    }

    protected function setRequestHeader($key,$value,$prefix = ""){
        $this->header[$prefix . $key] = $value;
    }

    protected function setXOSSHeader($key,$value){
        $this->setRequestHeader($key,$value,"x-oss-");
        $this->x_oss_header["x-oss-".$key] = $value;
    }

    public function param($key = '')
    {
        if(is_string($key) && isset($this->param[$key])){
            return $this->param[$key];
        }
        return $this->param;
    }

    protected function setContentType($content_type){
        $this->content_type = $content_type;
        $this->setRequestHeader("content-type", $content_type);
    }

    public function request(){
        $date = gmdate('D, d M Y H:i:s \G\M\T');
        $this->setRequestHeader("Date",$date);

        $authorization = OssAuth::init("OSS")
            ->setVERB($this->request_method)
            ->setContentType($this->content_type)
            ->setCanonicalOssHeader($this->x_oss_header)
            ->setCanonicalResource($this->bucket , $this->path)
            ->auth($date);

        if($this->request_method == "GET"){
            $temp = http_build_query($this->param);
            if(strpos($this->path,'?') === false){
                $this->path = $this->path . "?";
            }
            $lastString = substr($this->path, -1);
            $this->path = $lastString=="&" || $lastString=="?" ? $this->path . $temp : $this->path . "&" . $temp;
        }
        $this->setRequestHeader("Authorization",$authorization);

        $domain = "http://". $this->domain;

        $request = new Request($this->request_method, $this->path, $this->header);
        $options = [
            'base_uri'    => $domain,
            'http_errors' => false,
            'form_params' => $this->param,
            'headers'     => $this->header,
            'decode_content'=>true
        ];

        $client = new Client();
        $result = $client->send($request, $options);

        $body = $result->getBody();
        $response = new Response();
        $response->setHeader($result->getHeaders());
        $body = (string) $body;

        if('application/xml' === $result->getHeaderLine('content-type')){
            $body = Parse::xmlToArray($body);
        }
        $response->setBody($body);
        $response->setStatus($result->getStatusCode());

        return Aliyun::response($response);
    }
}