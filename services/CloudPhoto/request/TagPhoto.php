<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 * @method $this setTagKey($TagKey)
 * @method array getTagKey()
 * @method $this setConfidence($Confidence)
 * @method array getConfidence()
 * @method $this setPhotoId($PhotoId)
 * @method integer getPhotoId()
 */
final class TagPhoto extends CloudPhotoCommon
{
    public $action = 'TagPhoto';
}
