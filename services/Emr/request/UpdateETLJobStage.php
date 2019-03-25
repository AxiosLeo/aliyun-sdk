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
 * @method $this setStageType($StageType)
 * @method string getStageType()
 * @method $this setStagePlugin($StagePlugin)
 * @method string getStagePlugin()
 * @method $this setStageConf($StageConf)
 * @method string getStageConf()
 */
final class UpdateETLJobStage extends EmrCommon
{
    public $action = 'UpdateETLJobStage';
}
