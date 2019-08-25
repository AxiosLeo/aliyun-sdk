<?php

namespace aliyun\sdk\services\Green20170824;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170824
 *
 * @package aliyun\sdk\services\Green20170824
 * @method DescribeCdnImagePornStatData DescribeCdnImagePornStatData()
 * @method DescribeCdnImagePornScanData DescribeCdnImagePornScanData()
 * @method MarkCdnImagePornData MarkCdnImagePornData()
 * @method ExportCdnImagePornScanViolationData ExportCdnImagePornScanViolationData()
 */
class V20170824
{
}

/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class DescribeCdnImagePornStatData extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setScanLabel($scanLabel)
 * @method string getScanLabel()
 * @method $this setMarkLabel($markLabel)
 * @method string getMarkLabel()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeCdnImagePornScanData extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIds($ids)
 * @method string getIds()
 * @method $this setMarkLabel($markLabel)
 * @method string getMarkLabel()
 */
class MarkCdnImagePornData extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class ExportCdnImagePornScanViolationData extends Request
{
}
