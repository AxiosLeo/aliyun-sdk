<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectName($ProjectName)
 * @method string getProjectName()
 */
final class MigrateJobs extends EmrCommon
{
    public $action = 'MigrateJobs';
}
