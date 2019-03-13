<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setAccessGroupName($AccessGroupName)
 * @method string getAccessGroupName()
 * @method $this setAccessRuleId($AccessRuleId)
 * @method string getAccessRuleId()
 */
final class DeleteAccessRule extends NASCommon
{
    public $action = 'DeleteAccessRule';
}
