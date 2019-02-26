<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setAccessGroupName($AccessGroupName)
 * @method string getAccessGroupName()
 * @method $this setAccessRuleId($AccessRuleId)
 * @method string getAccessRuleId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeAccessRules extends NASCommon
{
    public $action = 'DescribeAccessRules';
}
