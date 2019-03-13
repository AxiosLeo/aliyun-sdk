<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setFlowLogName($FlowLogName)
 * @method string getFlowLogName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setResourceId($ResourceId)
 * @method string getResourceId()
 * @method $this setTrafficType($TrafficType)
 * @method string getTrafficType()
 * @method $this setProjectName($ProjectName)
 * @method string getProjectName()
 * @method $this setLogStoreName($LogStoreName)
 * @method string getLogStoreName()
 */
final class CreateFlowLog extends VpcCommon
{
    public $action = 'CreateFlowLog';
}
