<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setDefaultQuota($DefaultQuota)
 * @method integer getDefaultQuota()
 * @method $this setBucketName($BucketName)
 * @method string getBucketName()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 */
final class CreatePhotoStore extends CloudPhotoCommon
{
    public $action = 'CreatePhotoStore';
}
