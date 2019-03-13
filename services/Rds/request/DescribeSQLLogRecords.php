<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLId($SQLId)
 * @method integer getSQLId()
 * @method $this setQueryKeywords($QueryKeywords)
 * @method string getQueryKeywords()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setDatabase($Database)
 * @method string getDatabase()
 * @method $this setUser($User)
 * @method string getUser()
 * @method $this setForm($Form)
 * @method string getForm()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeSQLLogRecords extends RdsCommon
{
    public $action = 'DescribeSQLLogRecords';
}
