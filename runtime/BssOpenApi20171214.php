<?php

namespace aliyun\sdk\services\BssOpenApi20171214;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20171214
 *
 * @package aliyun\sdk\services\BssOpenApi20171214
 * @method QueryInstanceGaapCost QueryInstanceGaapCost()
 * @method QuerySettlementBill QuerySettlementBill()
 * @method QueryBillOverview QueryBillOverview()
 * @method GetOrderDetail GetOrderDetail()
 * @method DescribeResourcePackageProduct DescribeResourcePackageProduct()
 * @method QueryAccountBalance QueryAccountBalance()
 * @method UnsubscribeBillToOSS UnsubscribeBillToOSS()
 * @method QueryUserOmsData QueryUserOmsData()
 * @method QueryInstanceBill QueryInstanceBill()
 * @method GetSubscriptionPrice GetSubscriptionPrice()
 * @method SetRenewal SetRenewal()
 * @method DescribePricingModule DescribePricingModule()
 * @method QueryEvaluateList QueryEvaluateList()
 * @method SubscribeBillToOSS SubscribeBillToOSS()
 * @method QueryBill QueryBill()
 * @method QueryRedeem QueryRedeem()
 * @method CreateInstance CreateInstance()
 * @method EnableBillGeneration EnableBillGeneration()
 * @method GetResourcePackagePrice GetResourcePackagePrice()
 * @method QueryOrders QueryOrders()
 * @method QueryCashCoupons QueryCashCoupons()
 * @method QueryPrepaidCards QueryPrepaidCards()
 * @method QueryResourcePackageInstances QueryResourcePackageInstances()
 * @method QueryProductList QueryProductList()
 * @method QueryAvailableInstances QueryAvailableInstances()
 * @method ApplyInvoice ApplyInvoice()
 * @method ModifyInstance ModifyInstance()
 * @method QueryInvoicingCustomerList QueryInvoicingCustomerList()
 * @method GetPayAsYouGoPrice GetPayAsYouGoPrice()
 * @method QueryMonthlyInstanceConsumption QueryMonthlyInstanceConsumption()
 * @method ConvertChargeType ConvertChargeType()
 * @method QueryMonthlyBill QueryMonthlyBill()
 * @method CancelOrder CancelOrder()
 * @method RenewInstance RenewInstance()
 * @method CreateResourcePackage CreateResourcePackage()
 * @method QueryCustomerAddressList QueryCustomerAddressList()
 */
class V20171214
{
}

/**
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBillingCycle($billingCycle)
 * @method string getBillingCycle()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 */
class QueryInstanceGaapCost extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setBillingCycle($billingCycle)
 * @method string getBillingCycle()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setIsHideZeroCharge($isHideZeroCharge)
 * @method bool getIsHideZeroCharge()
 */
class QuerySettlementBill extends Request
{

}/**
 * @method $this setBillingCycle($billingCycle)
 * @method string getBillingCycle()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 */
class QueryBillOverview extends Request
{

}/**
 * @method $this setOrderId($orderId)
 * @method string getOrderId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class GetOrderDetail extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 */
class DescribeResourcePackageProduct extends Request
{

}/**
 */
class QueryAccountBalance extends Request
{

}/**
 * @method $this setSubscribeType($subscribeType)
 * @method string getSubscribeType()
 */
class UnsubscribeBillToOSS extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTable($table)
 * @method string getTable()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryUserOmsData extends Request
{

}/**
 * @method $this setBillingCycle($billingCycle)
 * @method string getBillingCycle()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setIsBillingItem($isBillingItem)
 * @method bool getIsBillingItem()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setIsHideZeroCharge($isHideZeroCharge)
 * @method bool getIsHideZeroCharge()
 */
class QueryInstanceBill extends Request
{

}/**
 * @method $this setServicePeriodUnit($servicePeriodUnit)
 * @method string getServicePeriodUnit()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setServicePeriodQuantity($servicePeriodQuantity)
 * @method int getServicePeriodQuantity()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setModuleList($moduleList)
 * @method array getModuleList()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 */
class GetSubscriptionPrice extends Request
{

}/**
 * @method $this setRenewalPeriod($renewalPeriod)
 * @method int getRenewalPeriod()
 * @method $this setInstanceIDs($instanceIDs)
 * @method string getInstanceIDs()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setRenewalPeriodUnit($renewalPeriodUnit)
 * @method string getRenewalPeriodUnit()
 * @method $this setRenewalStatus($renewalStatus)
 * @method string getRenewalStatus()
 */
class SetRenewal extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 */
class DescribePricingModule extends Request
{

}/**
 * @method $this setType($type)
 * @method int getType()
 * @method $this setOutBizId($outBizId)
 * @method string getOutBizId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartAmount($startAmount)
 * @method int getStartAmount()
 * @method $this setEndAmount($endAmount)
 * @method int getEndAmount()
 * @method $this setStartBizTime($startBizTime)
 * @method string getStartBizTime()
 * @method $this setEndBizTime($endBizTime)
 * @method string getEndBizTime()
 * @method $this setBizTypeList($bizTypeList)
 * @method array getBizTypeList()
 * @method $this setSortType($sortType)
 * @method int getSortType()
 * @method $this setStartSearchTime($startSearchTime)
 * @method string getStartSearchTime()
 * @method $this setEndSearchTime($endSearchTime)
 * @method string getEndSearchTime()
 * @method $this setBillCycle($billCycle)
 * @method string getBillCycle()
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setcallerBid($callerBid)
 * @method int getcallerBid()
 */
class QueryEvaluateList extends Request
{

}/**
 * @method $this setSubscribeBucket($subscribeBucket)
 * @method string getSubscribeBucket()
 * @method $this setSubscribeType($subscribeType)
 * @method string getSubscribeType()
 */
class SubscribeBillToOSS extends Request
{

}/**
 * @method $this setBillingCycle($billingCycle)
 * @method string getBillingCycle()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setIsHideZeroCharge($isHideZeroCharge)
 * @method bool getIsHideZeroCharge()
 * @method $this setIsDisplayLocalCurrency($isDisplayLocalCurrency)
 * @method bool getIsDisplayLocalCurrency()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryBill extends Request
{

}/**
 * @method $this setExpiryTimeStart($expiryTimeStart)
 * @method string getExpiryTimeStart()
 * @method $this setExpiryTimeEnd($expiryTimeEnd)
 * @method string getExpiryTimeEnd()
 * @method $this setEffectiveOrNot($effectiveOrNot)
 * @method bool getEffectiveOrNot()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryRedeem extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setParameter($parameter)
 * @method array getParameter()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setRenewalStatus($renewalStatus)
 * @method string getRenewalStatus()
 * @method $this setRenewPeriod($renewPeriod)
 * @method int getRenewPeriod()
 */
class CreateInstance extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class EnableBillGeneration extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setPackageType($packageType)
 * @method string getPackageType()
 * @method $this setEffectiveDate($effectiveDate)
 * @method string getEffectiveDate()
 * @method $this setSpecification($specification)
 * @method string getSpecification()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 */
class GetResourcePackagePrice extends Request
{

}/**
 * @method $this setCreateTimeEnd($createTimeEnd)
 * @method string getCreateTimeEnd()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setPaymentStatus($paymentStatus)
 * @method string getPaymentStatus()
 * @method $this setCreateTimeStart($createTimeStart)
 * @method string getCreateTimeStart()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class QueryOrders extends Request
{

}/**
 * @method $this setExpiryTimeEnd($expiryTimeEnd)
 * @method string getExpiryTimeEnd()
 * @method $this setExpiryTimeStart($expiryTimeStart)
 * @method string getExpiryTimeStart()
 * @method $this setEffectiveOrNot($effectiveOrNot)
 * @method bool getEffectiveOrNot()
 */
class QueryCashCoupons extends Request
{

}/**
 * @method $this setExpiryTimeEnd($expiryTimeEnd)
 * @method string getExpiryTimeEnd()
 * @method $this setExpiryTimeStart($expiryTimeStart)
 * @method string getExpiryTimeStart()
 * @method $this setEffectiveOrNot($effectiveOrNot)
 * @method bool getEffectiveOrNot()
 */
class QueryPrepaidCards extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setExpiryTimeStart($expiryTimeStart)
 * @method string getExpiryTimeStart()
 * @method $this setExpiryTimeEnd($expiryTimeEnd)
 * @method string getExpiryTimeEnd()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryResourcePackageInstances extends Request
{

}/**
 * @method $this setQueryTotalCount($queryTotalCount)
 * @method bool getQueryTotalCount()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryProductList extends Request
{

}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setInstanceIDs($instanceIDs)
 * @method string getInstanceIDs()
 * @method $this setEndTimeStart($endTimeStart)
 * @method string getEndTimeStart()
 * @method $this setEndTimeEnd($endTimeEnd)
 * @method string getEndTimeEnd()
 * @method $this setCreateTimeStart($createTimeStart)
 * @method string getCreateTimeStart()
 * @method $this setCreateTimeEnd($createTimeEnd)
 * @method string getCreateTimeEnd()
 * @method $this setRenewStatus($renewStatus)
 * @method string getRenewStatus()
 */
class QueryAvailableInstances extends Request
{

}/**
 * @method $this setInvoiceAmount($invoiceAmount)
 * @method int getInvoiceAmount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCustomerId($customerId)
 * @method int getCustomerId()
 * @method $this setAddressId($addressId)
 * @method int getAddressId()
 * @method $this setInvoicingType($invoicingType)
 * @method int getInvoicingType()
 * @method $this setProcessWay($processWay)
 * @method int getProcessWay()
 * @method $this setApplyUserNick($applyUserNick)
 * @method string getApplyUserNick()
 * @method $this setSelectedIds($selectedIds)
 * @method array getSelectedIds()
 * @method $this setInvoiceByAmount($invoiceByAmount)
 * @method bool getInvoiceByAmount()
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setcallerBid($callerBid)
 * @method int getcallerBid()
 */
class ApplyInvoice extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setModifyType($modifyType)
 * @method string getModifyType()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setParameter($parameter)
 * @method array getParameter()
 */
class ModifyInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class QueryInvoicingCustomerList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setModuleList($moduleList)
 * @method array getModuleList()
 */
class GetPayAsYouGoPrice extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBillingCycle($billingCycle)
 * @method string getBillingCycle()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 */
class QueryMonthlyInstanceConsumption extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ConvertChargeType extends Request
{

}/**
 * @method $this setBillingCycle($billingCycle)
 * @method string getBillingCycle()
 */
class QueryMonthlyBill extends Request
{

}/**
 * @method $this setOrderId($orderId)
 * @method string getOrderId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class CancelOrder extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRenewPeriod($renewPeriod)
 * @method int getRenewPeriod()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class RenewInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setPackageType($packageType)
 * @method string getPackageType()
 * @method $this setEffectiveDate($effectiveDate)
 * @method string getEffectiveDate()
 * @method $this setSpecification($specification)
 * @method string getSpecification()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 */
class CreateResourcePackage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setcallerUid($callerUid)
 * @method int getcallerUid()
 * @method $this setcallerBid($callerBid)
 * @method int getcallerBid()
 */
class QueryCustomerAddressList extends Request
{

}