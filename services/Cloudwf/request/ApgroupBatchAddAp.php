<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setApgroupId($ApgroupId)
 * @method integer getApgroupId()
 * @method $this setApAssetIds($ApAssetIds)
 * @method string getApAssetIds()
 */
final class ApgroupBatchAddAp extends CloudwfCommon
{
    public $action = 'ApgroupBatchAddAp';
}
