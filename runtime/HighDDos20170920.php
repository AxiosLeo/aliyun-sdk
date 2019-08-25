<?php

namespace aliyun\sdk\services\HighDDos20170920;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170920
 *
 * @package aliyun\sdk\services\HighDDos20170920
 * @method DescribeDdosFlow DescribeDdosFlow()
 * @method DescribeDdosEvents DescribeDdosEvents()
 * @method DescribeCcFlow DescribeCcFlow()
 * @method DescribeCcEvents DescribeCcEvents()
 * @method DescribeDomainList DescribeDomainList()
 * @method DescribeSimpleInstanceList DescribeSimpleInstanceList()
 */
class V20170920
{
}

/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setEndDateMillis($endDateMillis)
 * @method string getEndDateMillis()
 * @method $this setStartDateMillis($startDateMillis)
 * @method string getStartDateMillis()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeDdosFlow extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setEndDateMillis($endDateMillis)
 * @method int getEndDateMillis()
 * @method $this setStartDateMillis($startDateMillis)
 * @method int getStartDateMillis()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeDdosEvents extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setEndDateMillis($endDateMillis)
 * @method int getEndDateMillis()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartDateMillis($startDateMillis)
 * @method int getStartDateMillis()
 */
class DescribeCcFlow extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setEndDateMillis($endDateMillis)
 * @method int getEndDateMillis()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartDateMillis($startDateMillis)
 * @method int getStartDateMillis()
 * @method $this setPage($page)
 * @method int getPage()
 */
class DescribeCcEvents extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeDomainList extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DescribeSimpleInstanceList extends Request
{
}
