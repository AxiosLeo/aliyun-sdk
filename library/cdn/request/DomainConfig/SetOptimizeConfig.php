<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 09:26
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetOptimizeConfig
 * @package aliyun\sdk\cdn\request\DomainConfig
 * @method $this setDomainName($domain_name)
 */
class SetOptimizeConfig extends CdnCommon
{
    use Request;

    public function setEnable($enable){
        //On、Off
        $enable = in_array($enable,["1",1,"On","on","ON"]) ? "On":"Off";
        $this->setParam("Enable",$enable);
        return $this;
    }
}