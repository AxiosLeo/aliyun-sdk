<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setMaxRecordsPerPage($MaxRecordsPerPage)
 * @method integer getMaxRecordsPerPage()
 * @method $this setPageNumbers($PageNumbers)
 * @method integer getPageNumbers()
 * @method $this setMinAvgConsume($MinAvgConsume)
 * @method integer getMinAvgConsume()
 * @method $this setMaxAvgConsume($MaxAvgConsume)
 * @method integer getMaxAvgConsume()
 * @method $this setMinAvgScanRows($MinAvgScanRows)
 * @method integer getMinAvgScanRows()
 * @method $this setMaxAvgScanRows($MaxAvgScanRows)
 * @method integer getMaxAvgScanRows()
 * @method $this setPagingId($PagingId)
 * @method string getPagingId()
 * @method $this setSortKey($SortKey)
 * @method string getSortKey()
 * @method $this setSortMethod($SortMethod)
 * @method string getSortMethod()
 * @method $this setSqType($SqType)
 * @method string getSqType()
 */
final class DescribeTemplatesList extends RdsCommon
{
    public $action = 'DescribeTemplatesList';
}
