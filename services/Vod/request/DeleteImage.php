<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDeleteImageType($DeleteImageType)
 * @method string getDeleteImageType()
 * @method $this setImageURLs($ImageURLs)
 * @method string getImageURLs()
 * @method $this setImageIds($ImageIds)
 * @method string getImageIds()
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setImageType($ImageType)
 * @method string getImageType()
 */
final class DeleteImage extends VodCommon
{
    public $action = 'DeleteImage';
}
