<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setDoAsync($DoAsync)
 * @method boolean getDoAsync()
 */
final class InstallAgent extends EdasCommon
{
    public $action = 'InstallAgent';
}
