<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBizId($BizId)
 * @method string getBizId()
 */
final class DeleteClusterTemplate extends EmrCommon
{
    public $action = 'DeleteClusterTemplate';
}
