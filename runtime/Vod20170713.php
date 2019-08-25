<?php

namespace aliyun\sdk\services\Vod20170713;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170713
 *
 * @package aliyun\sdk\services\Vod20170713
 * @method UpdateMaterial UpdateMaterial()
 * @method CreateUploadMaterial CreateUploadMaterial()
 * @method CreateUploadMediaFile CreateUploadMediaFile()
 * @method SearchMaterial SearchMaterial()
 * @method SyncMaterial SyncMaterial()
 * @method AddCompanionresourceInfo AddCompanionresourceInfo()
 * @method DeleteMaterial DeleteMaterial()
 * @method DescribeUserTopVideoByDay DescribeUserTopVideoByDay()
 * @method GetMaterial GetMaterial()
 * @method RefreshUploadMaterialToken RefreshUploadMaterialToken()
 */
class V20170713
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 */
class UpdateMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCoverURL($coverURL)
 * @method string getCoverURL()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setFileSize($fileSize)
 * @method int getFileSize()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class CreateUploadMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBusinessType($businessType)
 * @method string getBusinessType()
 * @method $this setFileExtension($fileExtension)
 * @method string getFileExtension()
 * @method $this setMediaId($mediaId)
 * @method string getMediaId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class CreateUploadMediaFile extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCateId($cateId)
 * @method int getCateId()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setTitle($title)
 * @method string getTitle()
 */
class SearchMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVideoIds($videoIds)
 * @method string getVideoIds()
 */
class SyncMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMediaFileId($mediaFileId)
 * @method string getMediaFileId()
 * @method $this setCompanionResourceType($companionResourceType)
 * @method string getCompanionResourceType()
 * @method $this setCompanionResourceConfig($companionResourceConfig)
 * @method string getCompanionResourceConfig()
 * @method $this setResourceName($resourceName)
 * @method string getResourceName()
 * @method $this setResourceTags($resourceTags)
 * @method string getResourceTags()
 */
class AddCompanionresourceInfo extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setMaterialIds($materialIds)
 * @method string getMaterialIds()
 */
class DeleteMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setVideoType($videoType)
 * @method string getVideoType()
 * @method $this setBizDate($bizDate)
 * @method string getBizDate()
 */
class DescribeUserTopVideoByDay extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 */
class GetMaterial extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 */
class RefreshUploadMaterialToken extends Request
{
}
