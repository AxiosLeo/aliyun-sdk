<?php

namespace aliyun\sdk\services\Cbn20170912;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170912
 *
 * @package aliyun\sdk\services\Cbn20170912
 * @method CreateCenRouteMap CreateCenRouteMap()
 * @method DisableCenVbrHealthCheck DisableCenVbrHealthCheck()
 * @method UntagResources UntagResources()
 * @method DescribeCenRouteMaps DescribeCenRouteMaps()
 * @method DescribeCenBandwidthPackages DescribeCenBandwidthPackages()
 * @method DescribeCenGeographicSpanRemainingBandwidth DescribeCenGeographicSpanRemainingBandwidth()
 * @method ModifyCenBandwidthPackageSpec ModifyCenBandwidthPackageSpec()
 * @method DetachCenChildInstance DetachCenChildInstance()
 * @method DescribeRouteConflict DescribeRouteConflict()
 * @method AttachCenChildInstance AttachCenChildInstance()
 * @method DeleteRouteServiceInCen DeleteRouteServiceInCen()
 * @method UnroutePrivateZoneInCenToVpc UnroutePrivateZoneInCenToVpc()
 * @method DescribeCenGeographicSpans DescribeCenGeographicSpans()
 * @method ModifyCenBandwidthPackageAttribute ModifyCenBandwidthPackageAttribute()
 * @method DescribeChildInstanceRegions DescribeChildInstanceRegions()
 * @method DescribeGeographicRegionMembership DescribeGeographicRegionMembership()
 * @method DescribeCenAttachedChildInstances DescribeCenAttachedChildInstances()
 * @method DescribeCenRegionDomainRouteEntries DescribeCenRegionDomainRouteEntries()
 * @method DeleteCen DeleteCen()
 * @method DescribeCenInterRegionBandwidthLimits DescribeCenInterRegionBandwidthLimits()
 * @method DescribeCens DescribeCens()
 * @method CreateCen CreateCen()
 * @method UnassociateCenBandwidthPackage UnassociateCenBandwidthPackage()
 * @method DescribeCenVbrHealthCheck DescribeCenVbrHealthCheck()
 * @method DescribePublishedRouteEntries DescribePublishedRouteEntries()
 * @method DescribeCenAttachedChildInstanceAttribute DescribeCenAttachedChildInstanceAttribute()
 * @method EnableCenVbrHealthCheck EnableCenVbrHealthCheck()
 * @method DeleteCenBandwidthPackage DeleteCenBandwidthPackage()
 * @method ModifyCenAttribute ModifyCenAttribute()
 * @method AssociateCenBandwidthPackage AssociateCenBandwidthPackage()
 * @method RoutePrivateZoneInCenToVpc RoutePrivateZoneInCenToVpc()
 * @method DescribeCenPrivateZoneRoutes DescribeCenPrivateZoneRoutes()
 * @method DescribeCenChildInstanceRouteEntries DescribeCenChildInstanceRouteEntries()
 * @method DescribeGrantRulesToCen DescribeGrantRulesToCen()
 * @method PublishRouteEntries PublishRouteEntries()
 * @method DescribeRouteServicesInCen DescribeRouteServicesInCen()
 * @method ModifyCenRouteMap ModifyCenRouteMap()
 * @method CreateCenBandwidthPackage CreateCenBandwidthPackage()
 * @method ResolveAndRouteServiceInCen ResolveAndRouteServiceInCen()
 * @method SetCenInterRegionBandwidthLimit SetCenInterRegionBandwidthLimit()
 * @method DeleteCenRouteMap DeleteCenRouteMap()
 * @method WithdrawPublishedRouteEntries WithdrawPublishedRouteEntries()
 */
class V20170912
{
}

/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setCenRegionId($cenRegionId)
 * @method string getCenRegionId()
 * @method $this setTransmitDirection($transmitDirection)
 * @method string getTransmitDirection()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setMapResult($mapResult)
 * @method string getMapResult()
 * @method $this setNextPriority($nextPriority)
 * @method int getNextPriority()
 * @method $this setSourceInstanceIds($sourceInstanceIds)
 * @method array getSourceInstanceIds()
 * @method $this setDestinationInstanceIds($destinationInstanceIds)
 * @method array getDestinationInstanceIds()
 * @method $this setSourceRouteTableIds($sourceRouteTableIds)
 * @method array getSourceRouteTableIds()
 * @method $this setDestinationRouteTableIds($destinationRouteTableIds)
 * @method array getDestinationRouteTableIds()
 * @method $this setSourceRegionIds($sourceRegionIds)
 * @method array getSourceRegionIds()
 * @method $this setSourceChildInstanceTypes($sourceChildInstanceTypes)
 * @method array getSourceChildInstanceTypes()
 * @method $this setDestinationChildInstanceTypes($destinationChildInstanceTypes)
 * @method array getDestinationChildInstanceTypes()
 * @method $this setDestinationCidrBlocks($destinationCidrBlocks)
 * @method array getDestinationCidrBlocks()
 * @method $this setCidrMatchMode($cidrMatchMode)
 * @method string getCidrMatchMode()
 * @method $this setRouteTypes($routeTypes)
 * @method array getRouteTypes()
 * @method $this setMatchAsns($matchAsns)
 * @method array getMatchAsns()
 * @method $this setAsPathMatchMode($asPathMatchMode)
 * @method string getAsPathMatchMode()
 * @method $this setAsPathLength($asPathLength)
 * @method int getAsPathLength()
 * @method $this setMatchCommunitySet($matchCommunitySet)
 * @method array getMatchCommunitySet()
 * @method $this setCommunityMatchMode($communityMatchMode)
 * @method string getCommunityMatchMode()
 * @method $this setOperateCommunitySet($operateCommunitySet)
 * @method array getOperateCommunitySet()
 * @method $this setCommunityOperateMode($communityOperateMode)
 * @method string getCommunityOperateMode()
 * @method $this setPreference($preference)
 * @method int getPreference()
 */
class CreateCenRouteMap extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setVbrInstanceRegionId($vbrInstanceRegionId)
 * @method string getVbrInstanceRegionId()
 * @method $this setVbrInstanceId($vbrInstanceId)
 * @method string getVbrInstanceId()
 * @method $this setVbrInstanceOwnerId($vbrInstanceOwnerId)
 * @method int getVbrInstanceOwnerId()
 */
class DisableCenVbrHealthCheck extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTagOwnerBid($tagOwnerBid)
 * @method string getTagOwnerBid()
 * @method $this setTagOwnerUid($tagOwnerUid)
 * @method int getTagOwnerUid()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTagKey($tagKey)
 * @method array getTagKey()
 */
class UntagResources extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setRouteMapId($routeMapId)
 * @method string getRouteMapId()
 * @method $this setCenRegionId($cenRegionId)
 * @method string getCenRegionId()
 * @method $this setTransmitDirection($transmitDirection)
 * @method string getTransmitDirection()
 */
class DescribeCenRouteMaps extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFilter($filter)
 * @method array getFilter()
 * @method $this setIsOrKey($isOrKey)
 * @method bool getIsOrKey()
 */
class DescribeCenBandwidthPackages extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setGeographicRegionAId($geographicRegionAId)
 * @method string getGeographicRegionAId()
 * @method $this setGeographicRegionBId($geographicRegionBId)
 * @method string getGeographicRegionBId()
 */
class DescribeCenGeographicSpanRemainingBandwidth extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenBandwidthPackageId($cenBandwidthPackageId)
 * @method string getCenBandwidthPackageId()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 */
class ModifyCenBandwidthPackageSpec extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setChildInstanceId($childInstanceId)
 * @method string getChildInstanceId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 * @method $this setChildInstanceOwnerId($childInstanceOwnerId)
 * @method int getChildInstanceOwnerId()
 * @method $this setCenOwnerId($cenOwnerId)
 * @method int getCenOwnerId()
 */
class DetachCenChildInstance extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setChildInstanceId($childInstanceId)
 * @method string getChildInstanceId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 * @method $this setChildInstanceRouteTableId($childInstanceRouteTableId)
 * @method string getChildInstanceRouteTableId()
 * @method $this setDestinationCidrBlock($destinationCidrBlock)
 * @method string getDestinationCidrBlock()
 */
class DescribeRouteConflict extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setChildInstanceId($childInstanceId)
 * @method string getChildInstanceId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 * @method $this setChildInstanceOwnerId($childInstanceOwnerId)
 * @method int getChildInstanceOwnerId()
 */
class AttachCenChildInstance extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setHostRegionId($hostRegionId)
 * @method string getHostRegionId()
 * @method $this setAccessRegionId($accessRegionId)
 * @method string getAccessRegionId()
 */
class DeleteRouteServiceInCen extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setAccessRegionId($accessRegionId)
 * @method string getAccessRegionId()
 */
class UnroutePrivateZoneInCenToVpc extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGeographicSpanId($geographicSpanId)
 * @method string getGeographicSpanId()
 */
class DescribeCenGeographicSpans extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCenBandwidthPackageId($cenBandwidthPackageId)
 * @method string getCenBandwidthPackageId()
 */
class ModifyCenBandwidthPackageAttribute extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setProductType($productType)
 * @method string getProductType()
 */
class DescribeChildInstanceRegions extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGeographicRegionId($geographicRegionId)
 * @method string getGeographicRegionId()
 */
class DescribeGeographicRegionMembership extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 */
class DescribeCenAttachedChildInstances extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setCenRegionId($cenRegionId)
 * @method string getCenRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class DescribeCenRegionDomainRouteEntries extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 */
class DeleteCen extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 */
class DescribeCenInterRegionBandwidthLimits extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFilter($filter)
 * @method array getFilter()
 * @method $this setTag($tag)
 * @method array getTag()
 */
class DescribeCens extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setProtectionLevel($protectionLevel)
 * @method string getProtectionLevel()
 */
class CreateCen extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setCenBandwidthPackageId($cenBandwidthPackageId)
 * @method string getCenBandwidthPackageId()
 */
class UnassociateCenBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setVbrInstanceRegionId($vbrInstanceRegionId)
 * @method string getVbrInstanceRegionId()
 * @method $this setVbrInstanceId($vbrInstanceId)
 * @method string getVbrInstanceId()
 * @method $this setVbrInstanceOwnerId($vbrInstanceOwnerId)
 * @method int getVbrInstanceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeCenVbrHealthCheck extends Request
{

}/**
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setChildInstanceId($childInstanceId)
 * @method string getChildInstanceId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 * @method $this setChildInstanceRouteTableId($childInstanceRouteTableId)
 * @method string getChildInstanceRouteTableId()
 * @method $this setDestinationCidrBlock($destinationCidrBlock)
 * @method string getDestinationCidrBlock()
 */
class DescribePublishedRouteEntries extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setChildInstanceId($childInstanceId)
 * @method string getChildInstanceId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 */
class DescribeCenAttachedChildInstanceAttribute extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setVbrInstanceRegionId($vbrInstanceRegionId)
 * @method string getVbrInstanceRegionId()
 * @method $this setVbrInstanceId($vbrInstanceId)
 * @method string getVbrInstanceId()
 * @method $this setHealthCheckSourceIp($healthCheckSourceIp)
 * @method string getHealthCheckSourceIp()
 * @method $this setHealthCheckTargetIp($healthCheckTargetIp)
 * @method string getHealthCheckTargetIp()
 * @method $this setVbrInstanceOwnerId($vbrInstanceOwnerId)
 * @method int getVbrInstanceOwnerId()
 */
class EnableCenVbrHealthCheck extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenBandwidthPackageId($cenBandwidthPackageId)
 * @method string getCenBandwidthPackageId()
 */
class DeleteCenBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setProtectionLevel($protectionLevel)
 * @method string getProtectionLevel()
 */
class ModifyCenAttribute extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setCenBandwidthPackageId($cenBandwidthPackageId)
 * @method string getCenBandwidthPackageId()
 */
class AssociateCenBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setAccessRegionId($accessRegionId)
 * @method string getAccessRegionId()
 * @method $this setHostRegionId($hostRegionId)
 * @method string getHostRegionId()
 * @method $this setHostVpcId($hostVpcId)
 * @method string getHostVpcId()
 */
class RoutePrivateZoneInCenToVpc extends Request
{

}/**
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setAccessRegionId($accessRegionId)
 * @method string getAccessRegionId()
 * @method $this setHostRegionId($hostRegionId)
 * @method string getHostRegionId()
 */
class DescribeCenPrivateZoneRoutes extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setChildInstanceId($childInstanceId)
 * @method string getChildInstanceId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 */
class DescribeCenChildInstanceRouteEntries extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setProductType($productType)
 * @method string getProductType()
 */
class DescribeGrantRulesToCen extends Request
{

}/**
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setChildInstanceId($childInstanceId)
 * @method string getChildInstanceId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 * @method $this setChildInstanceRouteTableId($childInstanceRouteTableId)
 * @method string getChildInstanceRouteTableId()
 * @method $this setDestinationCidrBlock($destinationCidrBlock)
 * @method string getDestinationCidrBlock()
 */
class PublishRouteEntries extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setHostRegionId($hostRegionId)
 * @method string getHostRegionId()
 * @method $this setAccessRegionId($accessRegionId)
 * @method string getAccessRegionId()
 */
class DescribeRouteServicesInCen extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setCenRegionId($cenRegionId)
 * @method string getCenRegionId()
 * @method $this setRouteMapId($routeMapId)
 * @method string getRouteMapId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setMapResult($mapResult)
 * @method string getMapResult()
 * @method $this setNextPriority($nextPriority)
 * @method int getNextPriority()
 * @method $this setSourceInstanceIds($sourceInstanceIds)
 * @method array getSourceInstanceIds()
 * @method $this setDestinationInstanceIds($destinationInstanceIds)
 * @method array getDestinationInstanceIds()
 * @method $this setSourceRouteTableIds($sourceRouteTableIds)
 * @method array getSourceRouteTableIds()
 * @method $this setDestinationRouteTableIds($destinationRouteTableIds)
 * @method array getDestinationRouteTableIds()
 * @method $this setSourceRegionIds($sourceRegionIds)
 * @method array getSourceRegionIds()
 * @method $this setSourceChildInstanceTypes($sourceChildInstanceTypes)
 * @method array getSourceChildInstanceTypes()
 * @method $this setDestinationChildInstanceTypes($destinationChildInstanceTypes)
 * @method array getDestinationChildInstanceTypes()
 * @method $this setDestinationCidrBlocks($destinationCidrBlocks)
 * @method array getDestinationCidrBlocks()
 * @method $this setCidrMatchMode($cidrMatchMode)
 * @method string getCidrMatchMode()
 * @method $this setRouteTypes($routeTypes)
 * @method array getRouteTypes()
 * @method $this setMatchAsns($matchAsns)
 * @method array getMatchAsns()
 * @method $this setAsPathMatchMode($asPathMatchMode)
 * @method string getAsPathMatchMode()
 * @method $this setAsPathLength($asPathLength)
 * @method int getAsPathLength()
 * @method $this setMatchCommunitySet($matchCommunitySet)
 * @method array getMatchCommunitySet()
 * @method $this setCommunityMatchMode($communityMatchMode)
 * @method string getCommunityMatchMode()
 * @method $this setOperateCommunitySet($operateCommunitySet)
 * @method array getOperateCommunitySet()
 * @method $this setCommunityOperateMode($communityOperateMode)
 * @method string getCommunityOperateMode()
 * @method $this setPreference($preference)
 * @method int getPreference()
 * @method $this setPriority($priority)
 * @method int getPriority()
 */
class ModifyCenRouteMap extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setGeographicRegionAId($geographicRegionAId)
 * @method string getGeographicRegionAId()
 * @method $this setGeographicRegionBId($geographicRegionBId)
 * @method string getGeographicRegionBId()
 * @method $this setBandwidthPackageChargeType($bandwidthPackageChargeType)
 * @method string getBandwidthPackageChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 */
class CreateCenBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setHostRegionId($hostRegionId)
 * @method string getHostRegionId()
 * @method $this setAccessRegionId($accessRegionId)
 * @method string getAccessRegionId()
 * @method $this setUpdateInterval($updateInterval)
 * @method int getUpdateInterval()
 */
class ResolveAndRouteServiceInCen extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setLocalRegionId($localRegionId)
 * @method string getLocalRegionId()
 * @method $this setOppositeRegionId($oppositeRegionId)
 * @method string getOppositeRegionId()
 * @method $this setBandwidthLimit($bandwidthLimit)
 * @method int getBandwidthLimit()
 */
class SetCenInterRegionBandwidthLimit extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setCenRegionId($cenRegionId)
 * @method string getCenRegionId()
 * @method $this setRouteMapId($routeMapId)
 * @method string getRouteMapId()
 */
class DeleteCenRouteMap extends Request
{

}/**
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setChildInstanceId($childInstanceId)
 * @method string getChildInstanceId()
 * @method $this setChildInstanceType($childInstanceType)
 * @method string getChildInstanceType()
 * @method $this setChildInstanceRegionId($childInstanceRegionId)
 * @method string getChildInstanceRegionId()
 * @method $this setChildInstanceRouteTableId($childInstanceRouteTableId)
 * @method string getChildInstanceRouteTableId()
 * @method $this setDestinationCidrBlock($destinationCidrBlock)
 * @method string getDestinationCidrBlock()
 */
class WithdrawPublishedRouteEntries extends Request
{

}