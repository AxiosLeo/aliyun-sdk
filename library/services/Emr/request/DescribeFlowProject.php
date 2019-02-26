<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeFlowProject extends EmrCommon
{
    public $action = 'DescribeFlowProject';
}
