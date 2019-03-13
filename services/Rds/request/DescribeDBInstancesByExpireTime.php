<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setproxyId($proxyId)
 * @method string getproxyId()
 * @method $this setExpirePeriod($ExpirePeriod)
 * @method integer getExpirePeriod()
 * @method $this setExpired($Expired)
 * @method boolean getExpired()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setTags($Tags)
 * @method string getTags()
 */
final class DescribeDBInstancesByExpireTime extends RdsCommon
{
    public $action = 'DescribeDBInstancesByExpireTime';
}
