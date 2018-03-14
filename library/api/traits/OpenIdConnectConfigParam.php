<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:24
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait OpenIdConnectConfigParam
 * @package aliyun\sdk\api\traits
 */
trait OpenIdConnectConfigParam
{
    /**
     * @param $open_id_api_type
     * @param array $config
     * @return $this
     */
    public function setOpenIdConnectConfig($open_id_api_type,array $config){
        $open_id_api_type = strtoupper($open_id_api_type);

        $config["OpenIdApiType"] = $open_id_api_type;

        $this->setParam("OpenIdConnectConfig",json_encode($config));
        return $this;
    }

    public function getOpenIdConnectConfig(){
        return json_decode($this->params("OpenIdConnectConfig"));
    }
}