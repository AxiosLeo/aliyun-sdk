<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setFromApp($FromApp)
 * @method string getFromApp()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeFlowJobStatistic extends EmrCommon
{
    public $action = 'DescribeFlowJobStatistic';
}
