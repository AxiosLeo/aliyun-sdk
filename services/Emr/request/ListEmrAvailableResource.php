<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDestinationResource($DestinationResource)
 * @method string getDestinationResource()
 * @method $this setClusterType($ClusterType)
 * @method string getClusterType()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setSpotStrategy($SpotStrategy)
 * @method string getSpotStrategy()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setNetType($NetType)
 * @method string getNetType()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setSystemDiskType($SystemDiskType)
 * @method string getSystemDiskType()
 * @method $this setDataDiskType($DataDiskType)
 * @method string getDataDiskType()
 * @method $this setDepositType($DepositType)
 * @method string getDepositType()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 */
final class ListEmrAvailableResource extends EmrCommon
{
    public $action = 'ListEmrAvailableResource';
}
