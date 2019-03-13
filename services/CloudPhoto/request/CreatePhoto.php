<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setFileId($FileId)
 * @method string getFileId()
 * @method $this setSessionId($SessionId)
 * @method string getSessionId()
 * @method $this setUploadType($UploadType)
 * @method string getUploadType()
 * @method $this setPhotoTitle($PhotoTitle)
 * @method string getPhotoTitle()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 * @method $this setStaging($Staging)
 * @method string getStaging()
 * @method $this setShareExpireTime($ShareExpireTime)
 * @method integer getShareExpireTime()
 * @method $this setTakenAt($TakenAt)
 * @method integer getTakenAt()
 */
final class CreatePhoto extends CloudPhotoCommon
{
    public $action = 'CreatePhoto';
}
