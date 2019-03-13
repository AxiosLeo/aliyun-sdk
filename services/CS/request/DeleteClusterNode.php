<?php
namespace aliyun\sdk\services\CS\request;

use aliyun\sdk\services\CS\CSCommon;

/**
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setIp($Ip)
 * @method string getIp()
 * @method $this setforce($force)
 * @method string getforce()
 * @method $this setreleaseInstance($releaseInstance)
 * @method string getreleaseInstance()
 */
final class DeleteClusterNode extends CSCommon
{
    public $action = 'DeleteClusterNode';
}
