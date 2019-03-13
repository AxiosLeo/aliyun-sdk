<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setMigrateTaskId($MigrateTaskId)
 * @method string getMigrateTaskId()
 */
final class DescribeOssDownloads extends RdsCommon
{
    public $action = 'DescribeOssDownloads';
}
