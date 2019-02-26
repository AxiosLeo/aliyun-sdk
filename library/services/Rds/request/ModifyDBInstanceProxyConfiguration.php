<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setProxyConfigurationKey($ProxyConfigurationKey)
 * @method string getProxyConfigurationKey()
 * @method $this setProxyConfigurationValue($ProxyConfigurationValue)
 * @method string getProxyConfigurationValue()
 */
final class ModifyDBInstanceProxyConfiguration extends RdsCommon
{
    public $action = 'ModifyDBInstanceProxyConfiguration';
}
