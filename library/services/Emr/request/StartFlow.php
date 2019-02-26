<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setFlowInstanceId($FlowInstanceId)
 * @method string getFlowInstanceId()
 */
final class StartFlow extends EmrCommon
{
    public $action = 'StartFlow';
}
