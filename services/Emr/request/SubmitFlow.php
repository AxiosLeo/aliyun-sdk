<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setFlowId($FlowId)
 * @method string getFlowId()
 * @method $this setConf($Conf)
 * @method string getConf()
 */
final class SubmitFlow extends EmrCommon
{
    public $action = 'SubmitFlow';
}
