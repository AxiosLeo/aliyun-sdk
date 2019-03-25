<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setIoOptimized($IoOptimized)
 * @method string getIoOptimized()
 * @method $this setInstanceNetworkType($InstanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setInternetMaxBandwidthOut($InternetMaxBandwidthOut)
 * @method integer getInternetMaxBandwidthOut()
 * @method $this setSystemDisk_Category($SystemDisk_Category)
 * @method string getSystemDisk_Category()
 * @method $this setSystemDisk_Size($SystemDisk_Size)
 * @method integer getSystemDisk_Size()
 * @method $this setDataDisk_1_Size($DataDisk_1_Size)
 * @method integer getDataDisk_1_Size()
 * @method $this setDataDisk_1_Category($DataDisk_1_Category)
 * @method string getDataDisk_1_Category()
 * @method $this setDataDisk_2_Size($DataDisk_2_Size)
 * @method integer getDataDisk_2_Size()
 * @method $this setDataDisk_2_Category($DataDisk_2_Category)
 * @method string getDataDisk_2_Category()
 * @method $this setDataDisk_3_Size($DataDisk_3_Size)
 * @method integer getDataDisk_3_Size()
 * @method $this setDataDisk_3_Category($DataDisk_3_Category)
 * @method string getDataDisk_3_Category()
 * @method $this setDataDisk_4_Size($DataDisk_4_Size)
 * @method integer getDataDisk_4_Size()
 * @method $this setDataDisk_4_Category($DataDisk_4_Category)
 * @method string getDataDisk_4_Category()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setPriceUnit($PriceUnit)
 * @method string getPriceUnit()
 * @method $this setAmount($Amount)
 * @method integer getAmount()
 */
final class DescribePrice extends EcsCommon
{
    public $action = 'DescribePrice';
}
