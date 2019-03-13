<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setSlbId($SlbId)
 * @method string getSlbId()
 * @method $this setSlbProtocol($SlbProtocol)
 * @method string getSlbProtocol()
 * @method $this setTargetPort($TargetPort)
 * @method string getTargetPort()
 * @method $this setPort($Port)
 * @method string getPort()
 */
final class BindK8sSlb extends EdasCommon
{
    public $action = 'BindK8sSlb';
}
