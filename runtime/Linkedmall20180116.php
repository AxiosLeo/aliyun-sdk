<?php

namespace aliyun\sdk\services\Linkedmall20180116;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180116
 *
 * @package aliyun\sdk\services\Linkedmall20180116
 * @method QueryAllCities QueryAllCities()
 * @method QueryMovieSeats QueryMovieSeats()
 * @method QueryItemDetail QueryItemDetail()
 * @method ReleaseMovieSeat ReleaseMovieSeat()
 * @method QueryOrderList QueryOrderList()
 * @method ReserveMovieSeat ReserveMovieSeat()
 * @method CreateOrder CreateOrder()
 * @method QueryItemInventory QueryItemInventory()
 * @method RepayOrder RepayOrder()
 * @method QueryUpcomingMovies QueryUpcomingMovies()
 * @method ModifyBizItems ModifyBizItems()
 * @method RefundPoint RefundPoint()
 * @method QueryMovieSchedules QueryMovieSchedules()
 * @method QueryAllCinemas QueryAllCinemas()
 * @method DeleteBizItems DeleteBizItems()
 * @method CreateMovieTicketOrder CreateMovieTicketOrder()
 * @method QueryMovieComments QueryMovieComments()
 * @method NotifyWithholdFund NotifyWithholdFund()
 * @method RemoveMessages RemoveMessages()
 * @method QueryLogistics QueryLogistics()
 * @method QueryOrderLogistics QueryOrderLogistics()
 * @method QueryGuideItemGroup QueryGuideItemGroup()
 * @method QueryHotMovies QueryHotMovies()
 * @method AddSupplierNewItems AddSupplierNewItems()
 * @method QueryBizItemList QueryBizItemList()
 * @method NotifyPayOrderStatus NotifyPayOrderStatus()
 * @method QueryMessages QueryMessages()
 * @method QueryMovieTickets QueryMovieTickets()
 * @method QueryAddress QueryAddress()
 * @method QueryBizItems QueryBizItems()
 */
class V20180116
{
}

/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryAllCities extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setScheduleId($scheduleId)
 * @method int getScheduleId()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryMovieSeats extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setItemId($itemId)
 * @method int getItemId()
 */
class QueryItemDetail extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setLockSeatApplyKey($lockSeatApplyKey)
 * @method string getLockSeatApplyKey()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class ReleaseMovieSeat extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setFilterOption($filterOption)
 * @method string getFilterOption()
 */
class QueryOrderList extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setScheduleId($scheduleId)
 * @method int getScheduleId()
 * @method $this setSeatIds($seatIds)
 * @method string getSeatIds()
 * @method $this setSeatNames($seatNames)
 * @method string getSeatNames()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setMobile($mobile)
 * @method string getMobile()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class ReserveMovieSeat extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setOutTradeId($outTradeId)
 * @method string getOutTradeId()
 * @method $this setItemId($itemId)
 * @method int getItemId()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setTotalAmount($totalAmount)
 * @method int getTotalAmount()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 * @method $this setItemList($itemList)
 * @method array getItemList()
 * @method $this setDeliveryAddress($deliveryAddress)
 * @method string getDeliveryAddress()
 * @method $this setOrderExpireTime($orderExpireTime)
 * @method int getOrderExpireTime()
 */
class CreateOrder extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setDivisionCode($divisionCode)
 * @method string getDivisionCode()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setItemList($itemList)
 * @method array getItemList()
 */
class QueryItemInventory extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setLmOrderId($lmOrderId)
 * @method int getLmOrderId()
 */
class RepayOrder extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setCityCode($cityCode)
 * @method int getCityCode()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryUpcomingMovies extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setSubBizId($subBizId)
 * @method string getSubBizId()
 * @method $this setItemList($itemList)
 * @method array getItemList()
 */
class ModifyBizItems extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setSellerId($sellerId)
 * @method string getSellerId()
 * @method $this setLmOrderId($lmOrderId)
 * @method string getLmOrderId()
 * @method $this setReason($reason)
 * @method string getReason()
 */
class RefundPoint extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setCinemaId($cinemaId)
 * @method int getCinemaId()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryMovieSchedules extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setCityCode($cityCode)
 * @method int getCityCode()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryAllCinemas extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setSubBizId($subBizId)
 * @method string getSubBizId()
 * @method $this setItemIdList($itemIdList)
 * @method array getItemIdList()
 */
class DeleteBizItems extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setOutTradeId($outTradeId)
 * @method string getOutTradeId()
 * @method $this setLockSeatAppKey($lockSeatAppKey)
 * @method string getLockSeatAppKey()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class CreateMovieTicketOrder extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setMovieId($movieId)
 * @method int getMovieId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryMovieComments extends Request
{
}/**
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setRequestId($requestId)
 * @method string getRequestId()
 * @method $this setOperationDate($operationDate)
 * @method string getOperationDate()
 * @method $this setPayTypes($payTypes)
 * @method string getPayTypes()
 * @method $this setAmount($amount)
 * @method int getAmount()
 * @method $this setTenantOrderId($tenantOrderId)
 * @method string getTenantOrderId()
 */
class NotifyWithholdFund extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setMessageIds($messageIds)
 * @method string getMessageIds()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class RemoveMessages extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setLmOrderId($lmOrderId)
 * @method int getLmOrderId()
 */
class QueryLogistics extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setLmOrderId($lmOrderId)
 * @method int getLmOrderId()
 */
class QueryOrderLogistics extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryGuideItemGroup extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setCityCode($cityCode)
 * @method int getCityCode()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryHotMovies extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setItemList($itemList)
 * @method array getItemList()
 */
class AddSupplierNewItems extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setSubBizId($subBizId)
 * @method string getSubBizId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class QueryBizItemList extends Request
{
}/**
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setRequestId($requestId)
 * @method string getRequestId()
 * @method $this setOperationDate($operationDate)
 * @method string getOperationDate()
 * @method $this setPayTypes($payTypes)
 * @method string getPayTypes()
 * @method $this setAmount($amount)
 * @method int getAmount()
 */
class NotifyPayOrderStatus extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setTopic($topic)
 * @method string getTopic()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryMessages extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setBizUid($bizUid)
 * @method string getBizUid()
 * @method $this setOrderId($orderId)
 * @method string getOrderId()
 * @method $this setExtJson($extJson)
 * @method string getExtJson()
 */
class QueryMovieTickets extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setDivisionCode($divisionCode)
 * @method string getDivisionCode()
 */
class QueryAddress extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setSubBizId($subBizId)
 * @method string getSubBizId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class QueryBizItems extends Request
{
}
