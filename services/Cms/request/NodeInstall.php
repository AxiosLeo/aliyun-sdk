<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setUserId($UserId)
 * @method string getUserId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setForce($Force)
 * @method boolean getForce()
 */
final class NodeInstall extends CmsCommon
{
    public $action = 'NodeInstall';
}
