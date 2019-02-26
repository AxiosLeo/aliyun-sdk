<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setSubDbName($SubDbName)
 * @method string getSubDbName()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class DescribeShardDbConnectionInfo extends DrdsCommon
{
    public $action = 'DescribeShardDbConnectionInfo';
}
