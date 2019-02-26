<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setSlbId($SlbId)
 * @method string getSlbId()
 * @method $this setSlbIp($SlbIp)
 * @method string getSlbIp()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setListenerPort($ListenerPort)
 * @method integer getListenerPort()
 * @method $this setVServerGroupId($VServerGroupId)
 * @method string getVServerGroupId()
 */
final class BindSlb extends EdasCommon
{
    public $action = 'BindSlb';
}
