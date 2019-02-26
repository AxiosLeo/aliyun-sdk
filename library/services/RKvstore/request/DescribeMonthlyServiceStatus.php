<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setMonth($Month)
 * @method string getMonth()
 */
final class DescribeMonthlyServiceStatus extends RKvstoreCommon
{
    public $action = 'DescribeMonthlyServiceStatus';
}
