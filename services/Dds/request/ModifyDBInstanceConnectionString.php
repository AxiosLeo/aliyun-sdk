<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 * @method $this setCurrentConnectionString($CurrentConnectionString)
 * @method string getCurrentConnectionString()
 * @method $this setNewConnectionString($NewConnectionString)
 * @method string getNewConnectionString()
 */
final class ModifyDBInstanceConnectionString extends DdsCommon
{
    public $action = 'ModifyDBInstanceConnectionString';
}
