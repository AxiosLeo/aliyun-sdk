<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 * @method $this setZoomType($ZoomType)
 * @method string getZoomType()
 * @method $this setDomainType($DomainType)
 * @method string getDomainType()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class GetPublicAccessUrls extends CloudPhotoCommon
{
    public $action = 'GetPublicAccessUrls';
}
