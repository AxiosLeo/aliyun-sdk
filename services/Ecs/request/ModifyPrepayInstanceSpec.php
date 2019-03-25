<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setOperatorType($OperatorType)
 * @method string getOperatorType()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setMigrateAcrossZone($MigrateAcrossZone)
 * @method boolean getMigrateAcrossZone()
 * @method $this setSystemDisk_Category($SystemDisk_Category)
 * @method string getSystemDisk_Category()
 */
final class ModifyPrepayInstanceSpec extends EcsCommon
{
    public $action = 'ModifyPrepayInstanceSpec';
}
