<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 */
final class DeleteDeployGroup extends EdasCommon
{
    public $action = 'DeleteDeployGroup';
}
