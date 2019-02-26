<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setStartAt($StartAt)
 * @method integer getStartAt()
 * @method $this setEndAt($EndAt)
 * @method integer getEndAt()
 * @method $this setIdentity($Identity)
 * @method string getIdentity()
 * @method $this setWeixinTitle($WeixinTitle)
 * @method string getWeixinTitle()
 * @method $this setSplashPhotoId($SplashPhotoId)
 * @method string getSplashPhotoId()
 * @method $this setBannerPhotoId($BannerPhotoId)
 * @method string getBannerPhotoId()
 * @method $this setWatermarkPhotoId($WatermarkPhotoId)
 * @method string getWatermarkPhotoId()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 */
final class CreateEvent extends CloudPhotoCommon
{
    public $action = 'CreateEvent';
}
