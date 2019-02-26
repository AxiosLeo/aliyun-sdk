<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 * @method $this setShareExpireTime($ShareExpireTime)
 * @method integer getShareExpireTime()
 * @method $this setTakenAt($TakenAt)
 * @method integer getTakenAt()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class EditPhotos extends CloudPhotoCommon
{
    public $action = 'EditPhotos';
}
