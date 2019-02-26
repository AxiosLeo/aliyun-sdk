<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeFlowJob extends EmrCommon
{
    public $action = 'DescribeFlowJob';
}
