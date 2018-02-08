<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 13:46
 */

namespace aliyun\sdk\core\http;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\Product;
use aliyun\sdk\core\sign\HmacSHA1;

class Request extends Parameter
{

    protected $product = "";

    protected $domain = "";

    protected $region = "";

    protected $locationServiceCode = "";

    protected $locationEndpointType = "";

    public function __construct()
    {
        parent::__construct();
        $this->region = Aliyun::$region_id;
        $this->domain = Product::domain($this->product,$this->region);
    }

    public function setActionName($action_name){
        $this->setParam("ActionName",$action_name);
    }

    public function request(){
        $signature = HmacSHA1::create($this->param());
        $this->setSignature($signature);
        dump($this);
    }
}