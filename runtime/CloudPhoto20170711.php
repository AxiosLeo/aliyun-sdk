<?php

namespace aliyun\sdk\services\CloudPhoto20170711;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170711
 *
 * @package aliyun\sdk\services\CloudPhoto20170711
 * @method DeleteAlbums DeleteAlbums()
 * @method RenameFace RenameFace()
 * @method SetFaceCover SetFaceCover()
 * @method GetThumbnail GetThumbnail()
 * @method MergeFaces MergeFaces()
 * @method GetPhotoStore GetPhotoStore()
 * @method ListTagPhotos ListTagPhotos()
 * @method CreateEvent CreateEvent()
 * @method GetDownloadUrls GetDownloadUrls()
 * @method EditPhotos EditPhotos()
 * @method FetchAlbumTagPhotos FetchAlbumTagPhotos()
 * @method GetPublicAccessUrls GetPublicAccessUrls()
 * @method ActivatePhotos ActivatePhotos()
 * @method DeleteEvent DeleteEvent()
 * @method ListEvents ListEvents()
 * @method SetAlbumCover SetAlbumCover()
 * @method ListTimeLinePhotos ListTimeLinePhotos()
 * @method EditEvent EditEvent()
 * @method DeletePhotos DeletePhotos()
 * @method ReactivatePhotos ReactivatePhotos()
 * @method GetFramedPhotoUrls GetFramedPhotoUrls()
 * @method ListMomentPhotos ListMomentPhotos()
 * @method TagPhoto TagPhoto()
 * @method ToggleFeatures ToggleFeatures()
 * @method ListFaces ListFaces()
 * @method FetchMomentPhotos FetchMomentPhotos()
 * @method ListPhotoFaces ListPhotoFaces()
 * @method ListAlbumPhotos ListAlbumPhotos()
 * @method GetPhotosByMd5s GetPhotosByMd5s()
 * @method GetSimilarPhotos GetSimilarPhotos()
 * @method GetEvent GetEvent()
 * @method GetDownloadUrl GetDownloadUrl()
 * @method ListPhotoTags ListPhotoTags()
 * @method EditPhotoStore EditPhotoStore()
 * @method InactivatePhotos InactivatePhotos()
 * @method ListMoments ListMoments()
 * @method CreateTransaction CreateTransaction()
 * @method ListRegisteredTags ListRegisteredTags()
 * @method GetVideoCover GetVideoCover()
 * @method SetMe SetMe()
 * @method CreatePhoto CreatePhoto()
 * @method SetQuota SetQuota()
 * @method RemoveAlbumPhotos RemoveAlbumPhotos()
 * @method ListAlbums ListAlbums()
 * @method GetThumbnails GetThumbnails()
 * @method RegisterTag RegisterTag()
 * @method RemoveFacePhotos RemoveFacePhotos()
 * @method CreateAlbum CreateAlbum()
 * @method ListPhotos ListPhotos()
 * @method DeleteFaces DeleteFaces()
 * @method MoveAlbumPhotos MoveAlbumPhotos()
 * @method DeletePhotoStore DeletePhotoStore()
 * @method MoveFacePhotos MoveFacePhotos()
 * @method RenameAlbum RenameAlbum()
 * @method FetchPhotos FetchPhotos()
 * @method AddAlbumPhotos AddAlbumPhotos()
 * @method LikePhoto LikePhoto()
 * @method GetAlbumsByNames GetAlbumsByNames()
 * @method SearchPhotos SearchPhotos()
 * @method CreatePhotoStore CreatePhotoStore()
 * @method GetPrivateAccessUrls GetPrivateAccessUrls()
 * @method ListFacePhotos ListFacePhotos()
 * @method RegisterPhoto RegisterPhoto()
 * @method ListTimeLines ListTimeLines()
 * @method ListPhotoStores ListPhotoStores()
 * @method GetPhotos GetPhotos()
 * @method GetQuota GetQuota()
 * @method GetLibrary GetLibrary()
 * @method FetchLibraries FetchLibraries()
 * @method ListTags ListTags()
 */
class V20170711
{
}

/**
 * @method $this setAlbumId($albumId)
 * @method array getAlbumId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class DeleteAlbums extends Request
{
}/**
 * @method $this setFaceId($faceId)
 * @method int getFaceId()
 * @method $this setFaceName($faceName)
 * @method string getFaceName()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class RenameFace extends Request
{
}/**
 * @method $this setFaceId($faceId)
 * @method int getFaceId()
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class SetFaceCover extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setZoomType($zoomType)
 * @method string getZoomType()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetThumbnail extends Request
{
}/**
 * @method $this setFaceId($faceId)
 * @method array getFaceId()
 * @method $this setTargetFaceId($targetFaceId)
 * @method int getTargetFaceId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class MergeFaces extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 */
class GetPhotoStore extends Request
{
}/**
 * @method $this setTagId($tagId)
 * @method int getTagId()
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListTagPhotos extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setStartAt($startAt)
 * @method int getStartAt()
 * @method $this setEndAt($endAt)
 * @method int getEndAt()
 * @method $this setIdentity($identity)
 * @method string getIdentity()
 * @method $this setWeixinTitle($weixinTitle)
 * @method string getWeixinTitle()
 * @method $this setSplashPhotoId($splashPhotoId)
 * @method string getSplashPhotoId()
 * @method $this setBannerPhotoId($bannerPhotoId)
 * @method string getBannerPhotoId()
 * @method $this setWatermarkPhotoId($watermarkPhotoId)
 * @method string getWatermarkPhotoId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class CreateEvent extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetDownloadUrls extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setShareExpireTime($shareExpireTime)
 * @method int getShareExpireTime()
 * @method $this setTakenAt($takenAt)
 * @method int getTakenAt()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class EditPhotos extends Request
{
}/**
 * @method $this setAlbumId($albumId)
 * @method int getAlbumId()
 * @method $this setTagId($tagId)
 * @method int getTagId()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class FetchAlbumTagPhotos extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setZoomType($zoomType)
 * @method string getZoomType()
 * @method $this setDomainType($domainType)
 * @method string getDomainType()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetPublicAccessUrls extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ActivatePhotos extends Request
{
}/**
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class DeleteEvent extends Request
{
}/**
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 */
class ListEvents extends Request
{
}/**
 * @method $this setAlbumId($albumId)
 * @method int getAlbumId()
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class SetAlbumCover extends Request
{
}/**
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setFilterBy($filterBy)
 * @method string getFilterBy()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListTimeLinePhotos extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setEventId($eventId)
 * @method string getEventId()
 * @method $this setIdentity($identity)
 * @method string getIdentity()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setStartAt($startAt)
 * @method int getStartAt()
 * @method $this setEndAt($endAt)
 * @method int getEndAt()
 * @method $this setWeixinTitle($weixinTitle)
 * @method string getWeixinTitle()
 * @method $this setSplashPhotoId($splashPhotoId)
 * @method string getSplashPhotoId()
 * @method $this setBannerPhotoId($bannerPhotoId)
 * @method string getBannerPhotoId()
 * @method $this setWatermarkPhotoId($watermarkPhotoId)
 * @method string getWatermarkPhotoId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class EditEvent extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 */
class DeletePhotos extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ReactivatePhotos extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setFrameId($frameId)
 * @method string getFrameId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetFramedPhotoUrls extends Request
{
}/**
 * @method $this setMomentId($momentId)
 * @method int getMomentId()
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListMomentPhotos extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setTagKey($tagKey)
 * @method array getTagKey()
 * @method $this setConfidence($confidence)
 * @method array getConfidence()
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 */
class TagPhoto extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setEnabledFeatures($enabledFeatures)
 * @method array getEnabledFeatures()
 * @method $this setDisabledFeatures($disabledFeatures)
 * @method array getDisabledFeatures()
 */
class ToggleFeatures extends Request
{
}/**
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setHasFaceName($hasFaceName)
 * @method string getHasFaceName()
 */
class ListFaces extends Request
{
}/**
 * @method $this setMomentId($momentId)
 * @method int getMomentId()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class FetchMomentPhotos extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListPhotoFaces extends Request
{
}/**
 * @method $this setAlbumId($albumId)
 * @method int getAlbumId()
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListAlbumPhotos extends Request
{
}/**
 * @method $this setMd5($md5)
 * @method array getMd5()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetPhotosByMd5s extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetSimilarPhotos extends Request
{
}/**
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetEvent extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetDownloadUrl extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class ListPhotoTags extends Request
{
}/**
 * @method $this setAutoCleanEnabled($autoCleanEnabled)
 * @method string getAutoCleanEnabled()
 * @method $this setAutoCleanDays($autoCleanDays)
 * @method int getAutoCleanDays()
 * @method $this setDefaultQuota($defaultQuota)
 * @method int getDefaultQuota()
 * @method $this setDefaultTrashQuota($defaultTrashQuota)
 * @method int getDefaultTrashQuota()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 */
class EditPhotoStore extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setInactiveTime($inactiveTime)
 * @method int getInactiveTime()
 */
class InactivatePhotos extends Request
{
}/**
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListMoments extends Request
{
}/**
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setExt($ext)
 * @method string getExt()
 * @method $this setForce($force)
 * @method string getForce()
 * @method $this setMd5($md5)
 * @method string getMd5()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class CreateTransaction extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLang($lang)
 * @method array getLang()
 */
class ListRegisteredTags extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setZoomType($zoomType)
 * @method string getZoomType()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetVideoCover extends Request
{
}/**
 * @method $this setFaceId($faceId)
 * @method int getFaceId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class SetMe extends Request
{
}/**
 * @method $this setFileId($fileId)
 * @method string getFileId()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 * @method $this setUploadType($uploadType)
 * @method string getUploadType()
 * @method $this setPhotoTitle($photoTitle)
 * @method string getPhotoTitle()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setStaging($staging)
 * @method string getStaging()
 * @method $this setShareExpireTime($shareExpireTime)
 * @method int getShareExpireTime()
 * @method $this setTakenAt($takenAt)
 * @method int getTakenAt()
 */
class CreatePhoto extends Request
{
}/**
 * @method $this setTotalQuota($totalQuota)
 * @method int getTotalQuota()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class SetQuota extends Request
{
}/**
 * @method $this setAlbumId($albumId)
 * @method int getAlbumId()
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class RemoveAlbumPhotos extends Request
{
}/**
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListAlbums extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setZoomType($zoomType)
 * @method string getZoomType()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetThumbnails extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setTagKey($tagKey)
 * @method string getTagKey()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setText($text)
 * @method string getText()
 */
class RegisterTag extends Request
{
}/**
 * @method $this setFaceId($faceId)
 * @method int getFaceId()
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class RemoveFacePhotos extends Request
{
}/**
 * @method $this setAlbumName($albumName)
 * @method string getAlbumName()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class CreateAlbum extends Request
{
}/**
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListPhotos extends Request
{
}/**
 * @method $this setFaceId($faceId)
 * @method array getFaceId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class DeleteFaces extends Request
{
}/**
 * @method $this setSourceAlbumId($sourceAlbumId)
 * @method int getSourceAlbumId()
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setTargetAlbumId($targetAlbumId)
 * @method int getTargetAlbumId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class MoveAlbumPhotos extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 */
class DeletePhotoStore extends Request
{
}/**
 * @method $this setSourceFaceId($sourceFaceId)
 * @method int getSourceFaceId()
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setTargetFaceId($targetFaceId)
 * @method int getTargetFaceId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class MoveFacePhotos extends Request
{
}/**
 * @method $this setAlbumId($albumId)
 * @method int getAlbumId()
 * @method $this setAlbumName($albumName)
 * @method string getAlbumName()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class RenameAlbum extends Request
{
}/**
 * @method $this setState($state)
 * @method string getState()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class FetchPhotos extends Request
{
}/**
 * @method $this setAlbumId($albumId)
 * @method int getAlbumId()
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class AddAlbumPhotos extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method int getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class LikePhoto extends Request
{
}/**
 * @method $this setName($name)
 * @method array getName()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetAlbumsByNames extends Request
{
}/**
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class SearchPhotos extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setDefaultQuota($defaultQuota)
 * @method int getDefaultQuota()
 * @method $this setBucketName($bucketName)
 * @method string getBucketName()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class CreatePhotoStore extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setZoomType($zoomType)
 * @method string getZoomType()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetPrivateAccessUrls extends Request
{
}/**
 * @method $this setFaceId($faceId)
 * @method int getFaceId()
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListFacePhotos extends Request
{
}/**
 * @method $this setTakenAt($takenAt)
 * @method int getTakenAt()
 * @method $this setLocation($location)
 * @method string getLocation()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 * @method $this setLatitude($latitude)
 * @method Float getLatitude()
 * @method $this setLongitude($longitude)
 * @method Float getLongitude()
 * @method $this setWidth($width)
 * @method int getWidth()
 * @method $this setHeight($height)
 * @method int getHeight()
 * @method $this setIsVideo($isVideo)
 * @method string getIsVideo()
 * @method $this setMd5($md5)
 * @method string getMd5()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setPhotoTitle($photoTitle)
 * @method string getPhotoTitle()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class RegisterPhoto extends Request
{
}/**
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setPhotoSize($photoSize)
 * @method int getPhotoSize()
 * @method $this setCursor($cursor)
 * @method int getCursor()
 * @method $this setTimeLineCount($timeLineCount)
 * @method int getTimeLineCount()
 * @method $this setTimeLineUnit($timeLineUnit)
 * @method string getTimeLineUnit()
 * @method $this setFilterBy($filterBy)
 * @method string getFilterBy()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListTimeLines extends Request
{
}/**
 */
class ListPhotoStores extends Request
{
}/**
 * @method $this setPhotoId($photoId)
 * @method array getPhotoId()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetPhotos extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetQuota extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class GetLibrary extends Request
{
}/**
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setSize($size)
 * @method int getSize()
 */
class FetchLibraries extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStoreName($storeName)
 * @method string getStoreName()
 * @method $this setLibraryId($libraryId)
 * @method string getLibraryId()
 */
class ListTags extends Request
{
}
