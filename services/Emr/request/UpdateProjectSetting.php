<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setDefaultOssPath($DefaultOssPath)
 * @method string getDefaultOssPath()
 * @method $this setOssConfig($OssConfig)
 * @method string getOssConfig()
 */
final class UpdateProjectSetting extends EmrCommon
{
    public $action = 'UpdateProjectSetting';
}
