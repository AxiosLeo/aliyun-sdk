<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setTakenAt($TakenAt)
 * @method integer getTakenAt()
 * @method $this setLocation($Location)
 * @method string getLocation()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 * @method $this setLatitude($Latitude)
 * @method float getLatitude()
 * @method $this setLongitude($Longitude)
 * @method float getLongitude()
 * @method $this setWidth($Width)
 * @method integer getWidth()
 * @method $this setHeight($Height)
 * @method integer getHeight()
 * @method $this setIsVideo($IsVideo)
 * @method string getIsVideo()
 * @method $this setMd5($Md5)
 * @method string getMd5()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setPhotoTitle($PhotoTitle)
 * @method string getPhotoTitle()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 */
final class RegisterPhoto extends CloudPhotoCommon
{
    public $action = 'RegisterPhoto';
}
