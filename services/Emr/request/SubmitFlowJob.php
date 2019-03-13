<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setJobId($JobId)
 * @method string getJobId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setConf($Conf)
 * @method string getConf()
 */
final class SubmitFlowJob extends EmrCommon
{
    public $action = 'SubmitFlowJob';
}
