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
 * @method $this setSecurityIps($SecurityIps)
 * @method string getSecurityIps()
 * @method $this setDBInstanceIPArrayName($DBInstanceIPArrayName)
 * @method string getDBInstanceIPArrayName()
 * @method $this setDBInstanceIPArrayAttribute($DBInstanceIPArrayAttribute)
 * @method string getDBInstanceIPArrayAttribute()
 * @method $this setSecurityIPType($SecurityIPType)
 * @method string getSecurityIPType()
 * @method $this setWhitelistNetworkType($WhitelistNetworkType)
 * @method string getWhitelistNetworkType()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setModifyMode($ModifyMode)
 * @method string getModifyMode()
 */
final class ModifySecurityIps extends RdsCommon
{
    public $action = 'ModifySecurityIps';
}
