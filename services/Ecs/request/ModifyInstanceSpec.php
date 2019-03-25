<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setInternetMaxBandwidthOut($InternetMaxBandwidthOut)
 * @method integer getInternetMaxBandwidthOut()
 * @method $this setInternetMaxBandwidthIn($InternetMaxBandwidthIn)
 * @method integer getInternetMaxBandwidthIn()
 * @method $this setTemporary_StartTime($Temporary_StartTime)
 * @method string getTemporary_StartTime()
 * @method $this setTemporary_EndTime($Temporary_EndTime)
 * @method string getTemporary_EndTime()
 * @method $this setTemporary_InternetMaxBandwidthOut($Temporary_InternetMaxBandwidthOut)
 * @method integer getTemporary_InternetMaxBandwidthOut()
 * @method $this setAsync($Async)
 * @method boolean getAsync()
 * @method $this setAllowMigrateAcrossZone($AllowMigrateAcrossZone)
 * @method boolean getAllowMigrateAcrossZone()
 * @method $this setSystemDisk_Category($SystemDisk_Category)
 * @method string getSystemDisk_Category()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyInstanceSpec extends EcsCommon
{
    public $action = 'ModifyInstanceSpec';
}
