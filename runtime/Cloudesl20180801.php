<?php

namespace aliyun\sdk\services\Cloudesl20180801;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180801
 *
 * @package aliyun\sdk\services\Cloudesl20180801
 * @method DeleteStore DeleteStore()
 * @method DescribeUserOperationLog DescribeUserOperationLog()
 * @method BatchInsertItems BatchInsertItems()
 * @method UnbindEslDeviceShelf UnbindEslDeviceShelf()
 * @method CreateStore CreateStore()
 * @method DeleteItemBySkuId DeleteItemBySkuId()
 * @method UpdateStore UpdateStore()
 * @method BindEslDeviceShelf BindEslDeviceShelf()
 * @method BindEslDevice BindEslDevice()
 * @method DeleteEslDevice DeleteEslDevice()
 * @method UnbindEslDevice UnbindEslDevice()
 * @method DescribeUserRamPolicy DescribeUserRamPolicy()
 * @method DescribeEslDevices DescribeEslDevices()
 * @method DescribeAlarms DescribeAlarms()
 * @method DeleteItem DeleteItem()
 * @method DescribeItems DescribeItems()
 * @method DescribeCompany DescribeCompany()
 * @method DescribeStores DescribeStores()
 */
class V20180801
{
}

/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 */
class DeleteStore extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setEslBarCode($eslBarCode)
 * @method string getEslBarCode()
 * @method $this setItemBarCode($itemBarCode)
 * @method string getItemBarCode()
 * @method $this setItemId($itemId)
 * @method int getItemId()
 * @method $this setItemTitle($itemTitle)
 * @method string getItemTitle()
 * @method $this setOperateType($operateType)
 * @method string getOperateType()
 * @method $this setOperateStatus($operateStatus)
 * @method string getOperateStatus()
 * @method $this setOperateUserId($operateUserId)
 * @method int getOperateUserId()
 * @method $this setFromDate($fromDate)
 * @method string getFromDate()
 * @method $this setToDate($toDate)
 * @method string getToDate()
 * @method $this setReverse($reverse)
 * @method bool getReverse()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeUserOperationLog extends Request
{
}/**
 * @method $this setItemInfo($itemInfo)
 * @method array getItemInfo()
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 */
class BatchInsertItems extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setEslBarCode($eslBarCode)
 * @method string getEslBarCode()
 */
class UnbindEslDeviceShelf extends Request
{
}/**
 * @method $this setCompanyId($companyId)
 * @method string getCompanyId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setBrand($brand)
 * @method string getBrand()
 * @method $this setOutId($outId)
 * @method string getOutId()
 * @method $this setGroups($groups)
 * @method string getGroups()
 * @method $this setComments($comments)
 * @method string getComments()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 * @method $this setPhone($phone)
 * @method string getPhone()
 */
class CreateStore extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setSkuId($skuId)
 * @method string getSkuId()
 */
class DeleteItemBySkuId extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setBrand($brand)
 * @method string getBrand()
 * @method $this setOutId($outId)
 * @method string getOutId()
 * @method $this setGroups($groups)
 * @method string getGroups()
 * @method $this setComments($comments)
 * @method string getComments()
 * @method $this setPhone($phone)
 * @method string getPhone()
 */
class UpdateStore extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setEslBarCode($eslBarCode)
 * @method string getEslBarCode()
 * @method $this setShelfCode($shelfCode)
 * @method string getShelfCode()
 */
class BindEslDeviceShelf extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setEslBarCode($eslBarCode)
 * @method string getEslBarCode()
 * @method $this setItemBarCode($itemBarCode)
 * @method string getItemBarCode()
 */
class BindEslDevice extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setEslBarCode($eslBarCode)
 * @method string getEslBarCode()
 */
class DeleteEslDevice extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setEslBarCode($eslBarCode)
 * @method string getEslBarCode()
 * @method $this setItemBarCode($itemBarCode)
 * @method string getItemBarCode()
 */
class UnbindEslDevice extends Request
{
}/**
 * @method $this setUserType($userType)
 * @method string getUserType()
 * @method $this setCompanyId($companyId)
 * @method string getCompanyId()
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 */
class DescribeUserRamPolicy extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setEslBarCode($eslBarCode)
 * @method string getEslBarCode()
 * @method $this setMac($mac)
 * @method string getMac()
 * @method $this setVendor($vendor)
 * @method string getVendor()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setShelfCode($shelfCode)
 * @method string getShelfCode()
 * @method $this setEslStatus($eslStatus)
 * @method string getEslStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFromBatteryLevel($fromBatteryLevel)
 * @method int getFromBatteryLevel()
 * @method $this setToBatteryLevel($toBatteryLevel)
 * @method int getToBatteryLevel()
 * @method $this setBeBind($beBind)
 * @method bool getBeBind()
 * @method $this setItemBarCode($itemBarCode)
 * @method string getItemBarCode()
 */
class DescribeEslDevices extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setAlarmId($alarmId)
 * @method string getAlarmId()
 * @method $this setAlarmType($alarmType)
 * @method string getAlarmType()
 * @method $this setErrorType($errorType)
 * @method string getErrorType()
 * @method $this setAlarmStatus($alarmStatus)
 * @method string getAlarmStatus()
 * @method $this setFromAlarmTime($fromAlarmTime)
 * @method string getFromAlarmTime()
 * @method $this setToAlarmTime($toAlarmTime)
 * @method string getToAlarmTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeAlarms extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setItemBarCode($itemBarCode)
 * @method string getItemBarCode()
 */
class DeleteItem extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setItemBarCode($itemBarCode)
 * @method string getItemBarCode()
 * @method $this setItemId($itemId)
 * @method int getItemId()
 * @method $this setItemTitle($itemTitle)
 * @method string getItemTitle()
 * @method $this setSkuId($skuId)
 * @method string getSkuId()
 * @method $this setBePromotion($bePromotion)
 * @method bool getBePromotion()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setShelfCode($shelfCode)
 * @method string getShelfCode()
 */
class DescribeItems extends Request
{
}/**
 */
class DescribeCompany extends Request
{
}/**
 * @method $this setStoreId($storeId)
 * @method string getStoreId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setBrand($brand)
 * @method string getBrand()
 * @method $this setGroups($groups)
 * @method string getGroups()
 * @method $this setFromDate($fromDate)
 * @method string getFromDate()
 * @method $this setToDate($toDate)
 * @method string getToDate()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeStores extends Request
{
}
