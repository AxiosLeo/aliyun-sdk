<?php

namespace aliyun\sdk\services\Market20151101;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20151101
 *
 * @package aliyun\sdk\services\Market20151101
 * @method DescribeInstances DescribeInstances()
 * @method CreateOrder CreateOrder()
 * @method DescribeProducts DescribeProducts()
 * @method QueryMarketCategories QueryMarketCategories()
 * @method DescribePrice DescribePrice()
 * @method DescribeProduct DescribeProduct()
 * @method NotifyContractEvent NotifyContractEvent()
 * @method BindImagePackage BindImagePackage()
 * @method DescribeInstance DescribeInstance()
 * @method SubscribeImage SubscribeImage()
 * @method ActivateLicense ActivateLicense()
 * @method QueryMarketImages QueryMarketImages()
 * @method DescribeLicense DescribeLicense()
 * @method DescribeOrder DescribeOrder()
 * @method PushMeteringData PushMeteringData()
 */
class V20151101
{
}

/**
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeInstances extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setCommodity($commodity)
 * @method string getCommodity()
 * @method $this setOrderSouce($orderSouce)
 * @method string getOrderSouce()
 * @method $this setPaymentType($paymentType)
 * @method string getPaymentType()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CreateOrder extends Request
{

}/**
 * @method $this setSearchTerm($searchTerm)
 * @method string getSearchTerm()
 * @method $this setFilter($filter)
 * @method array getFilter()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeProducts extends Request
{

}/**
 */
class QueryMarketCategories extends Request
{

}/**
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setCommodity($commodity)
 * @method string getCommodity()
 */
class DescribePrice extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method string getAliUid()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setQueryDraft($queryDraft)
 * @method bool getQueryDraft()
 */
class DescribeProduct extends Request
{

}/**
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setEventMessage($eventMessage)
 * @method string getEventMessage()
 */
class NotifyContractEvent extends Request
{

}/**
 * @method $this setEcsInstanceId($ecsInstanceId)
 * @method string getEcsInstanceId()
 * @method $this setImagePackageInstanceId($imagePackageInstanceId)
 * @method string getImagePackageInstanceId()
 */
class BindImagePackage extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class DescribeInstance extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 */
class SubscribeImage extends Request
{

}/**
 * @method $this setLicenseCode($licenseCode)
 * @method string getLicenseCode()
 * @method $this setIdentification($identification)
 * @method string getIdentification()
 */
class ActivateLicense extends Request
{

}/**
 * @method $this setParam($param)
 * @method string getParam()
 */
class QueryMarketImages extends Request
{

}/**
 * @method $this setLicenseCode($licenseCode)
 * @method string getLicenseCode()
 */
class DescribeLicense extends Request
{

}/**
 * @method $this setOrderId($orderId)
 * @method string getOrderId()
 */
class DescribeOrder extends Request
{

}/**
 * @method $this setMetering($metering)
 * @method string getMetering()
 */
class PushMeteringData extends Request
{

}