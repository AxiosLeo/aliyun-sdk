<?php

namespace aliyun\sdk\services\Market20151101;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20151101
 *
 * @package aliyun\sdk\services\Market20151101
 * @method UpdateProduct UpdateProduct()
 * @method QueryAvaiableImages QueryAvaiableImages()
 * @method CreateProduct CreateProduct()
 * @method CreateOrder CreateOrder()
 * @method DescribeProducts DescribeProducts()
 * @method QueryMarketCategories QueryMarketCategories()
 * @method DescribePrice DescribePrice()
 * @method GetImageInstance GetImageInstance()
 * @method DescribeProduct DescribeProduct()
 * @method BindImagePackage BindImagePackage()
 * @method DescribeInstance DescribeInstance()
 * @method PrevProduceImageInstance PrevProduceImageInstance()
 * @method GetImageResourceByNo GetImageResourceByNo()
 * @method GetImageResource GetImageResource()
 * @method SubscribeImage SubscribeImage()
 * @method ActivateLicense ActivateLicense()
 * @method UpdateProductSku UpdateProductSku()
 * @method QueryMarketImages QueryMarketImages()
 * @method DescribeLicense DescribeLicense()
 * @method SubscriptionCheck SubscriptionCheck()
 * @method DescribeOrder DescribeOrder()
 * @method PushMeteringData PushMeteringData()
 */
class V20151101
{
}

/**
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPicUrl($picUrl)
 * @method string getPicUrl()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setShortDescription($shortDescription)
 * @method string getShortDescription()
 * @method $this setHidden($hidden)
 * @method bool getHidden()
 * @method $this setProductExtra($productExtra)
 * @method array getProductExtra()
 */
class UpdateProduct extends Request
{

}/**
 * @method $this setRegionNo($regionNo)
 * @method string getRegionNo()
 * @method $this setImageName($imageName)
 * @method string getImageName()
 * @method $this setSnapshotId($snapshotId)
 * @method string getSnapshotId()
 * @method $this setUserPK($userPK)
 * @method string getUserPK()
 * @method $this setPageIndex($pageIndex)
 * @method int getPageIndex()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setImageIds($imageIds)
 * @method array getImageIds()
 * @method $this setOsTypes($osTypes)
 * @method array getOsTypes()
 * @method $this setEcsUnitModels($ecsUnitModels)
 * @method array getEcsUnitModels()
 */
class QueryAvaiableImages extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPicUrl($picUrl)
 * @method string getPicUrl()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setShortDescription($shortDescription)
 * @method string getShortDescription()
 * @method $this setHidden($hidden)
 * @method bool getHidden()
 * @method $this setProductSku($productSku)
 * @method array getProductSku()
 * @method $this setProductExtra($productExtra)
 * @method array getProductExtra()
 */
class CreateProduct extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetImageInstance extends Request
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
 * @method $this setImageIdList($imageIdList)
 * @method array getImageIdList()
 * @method $this setRegionNo($regionNo)
 * @method string getRegionNo()
 * @method $this setUserPK($userPK)
 * @method int getUserPK()
 * @method $this setBid($bid)
 * @method string getBid()
 */
class PrevProduceImageInstance extends Request
{

}/**
 * @method $this setImageNo($imageNo)
 * @method string getImageNo()
 */
class GetImageResourceByNo extends Request
{

}/**
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setAliUid($aliUid)
 * @method string getAliUid()
 * @method $this setImageNo($imageNo)
 * @method string getImageNo()
 * @method $this setRegionNo($regionNo)
 * @method string getRegionNo()
 * @method $this setChannel($channel)
 * @method string getChannel()
 */
class GetImageResource extends Request
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
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setSortId($sortId)
 * @method int getSortId()
 * @method $this setHidden($hidden)
 * @method bool getHidden()
 * @method $this setSalePrice($salePrice)
 * @method array getSalePrice()
 * @method $this setProperty($property)
 * @method array getProperty()
 */
class UpdateProductSku extends Request
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
 * @method $this setImageIdList($imageIdList)
 * @method array getImageIdList()
 * @method $this setAliyunPK($aliyunPK)
 * @method string getAliyunPK()
 * @method $this setRequestSource($requestSource)
 * @method string getRequestSource()
 */
class SubscriptionCheck extends Request
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