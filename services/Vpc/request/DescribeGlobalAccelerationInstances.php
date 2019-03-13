<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIncludeReservationData($IncludeReservationData)
 * @method boolean getIncludeReservationData()
 * @method $this setGlobalAccelerationInstanceId($GlobalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setIpAddress($IpAddress)
 * @method string getIpAddress()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setBandwidthType($BandwidthType)
 * @method string getBandwidthType()
 * @method $this setServiceLocation($ServiceLocation)
 * @method string getServiceLocation()
 * @method $this setServerId($ServerId)
 * @method string getServerId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeGlobalAccelerationInstances extends VpcCommon
{
    public $action = 'DescribeGlobalAccelerationInstances';
}
