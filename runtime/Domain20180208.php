<?php

namespace aliyun\sdk\services\Domain20180208;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180208
 *
 * @package aliyun\sdk\services\Domain20180208
 * @method QueryAuctions QueryAuctions()
 * @method QueryBrokerDemandRecord QueryBrokerDemandRecord()
 * @method AcceptDemand AcceptDemand()
 * @method QueryAuctionDetail QueryAuctionDetail()
 * @method FinishDemand FinishDemand()
 * @method BidDomain BidDomain()
 * @method QueryBidRecords QueryBidRecords()
 * @method GetReserveDomainUrl GetReserveDomainUrl()
 * @method QueryBookingDomainInfo QueryBookingDomainInfo()
 * @method RecordDemand RecordDemand()
 * @method ReserveDomain ReserveDomain()
 * @method QueryBrokerDemand QueryBrokerDemand()
 * @method RequestPayDemand RequestPayDemand()
 * @method FailDemand FailDemand()
 * @method RefuseDemand RefuseDemand()
 */
class V20180208
{
}

/**
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryAuctions extends Request
{
}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 */
class QueryBrokerDemandRecord extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class AcceptDemand extends Request
{
}/**
 * @method $this setAuctionId($auctionId)
 * @method string getAuctionId()
 */
class QueryAuctionDetail extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class FinishDemand extends Request
{
}/**
 * @method $this setAuctionId($auctionId)
 * @method string getAuctionId()
 * @method $this setMaxBid($maxBid)
 * @method Float getMaxBid()
 * @method $this setCurrency($currency)
 * @method string getCurrency()
 */
class BidDomain extends Request
{
}/**
 * @method $this setAuctionId($auctionId)
 * @method string getAuctionId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryBidRecords extends Request
{
}/**
 */
class GetReserveDomainUrl extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class QueryBookingDomainInfo extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class RecordDemand extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setChannels($channels)
 * @method array getChannels()
 */
class ReserveDomain extends Request
{
}/**
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 */
class QueryBrokerDemand extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setMessage($message)
 * @method string getMessage()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPrice($price)
 * @method Float getPrice()
 * @method $this setProduceType($produceType)
 * @method int getProduceType()
 */
class RequestPayDemand extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class FailDemand extends Request
{
}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class RefuseDemand extends Request
{
}
