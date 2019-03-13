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
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setnewConnectionString($newConnectionString)
 * @method string getnewConnectionString()
 * @method $this setcurrentConnectionString($currentConnectionString)
 * @method string getcurrentConnectionString()
 */
final class ModifyDBInstanceConnectionString extends RKvstoreCommon
{
    public $action = 'ModifyDBInstanceConnectionString';
}
