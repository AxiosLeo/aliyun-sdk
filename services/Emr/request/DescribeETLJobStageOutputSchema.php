<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($EtlJobId)
 * @method string getEtlJobId()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 */
final class DescribeETLJobStageOutputSchema extends EmrCommon
{
    public $action = 'DescribeETLJobStageOutputSchema';
}
