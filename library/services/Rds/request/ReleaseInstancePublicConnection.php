<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setCurrentConnectionString($CurrentConnectionString)
 * @method string getCurrentConnectionString()
 */
final class ReleaseInstancePublicConnection extends RdsCommon
{
    public $action = 'ReleaseInstancePublicConnection';
}
