<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setExpirePeriod($ExpirePeriod)
 * @method integer getExpirePeriod()
 * @method $this setHasExpiredRes($HasExpiredRes)
 * @method boolean getHasExpiredRes()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 */
final class DescribeInstancesByExpireTime extends RKvstoreCommon
{
    public $action = 'DescribeInstancesByExpireTime';
}
