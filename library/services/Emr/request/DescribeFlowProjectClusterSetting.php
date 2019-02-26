<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 */
final class DescribeFlowProjectClusterSetting extends EmrCommon
{
    public $action = 'DescribeFlowProjectClusterSetting';
}
