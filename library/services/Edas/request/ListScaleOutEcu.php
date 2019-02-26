<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setLogicalRegionId($LogicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setCpu($Cpu)
 * @method integer getCpu()
 * @method $this setMem($Mem)
 * @method integer getMem()
 * @method $this setInstanceNum($InstanceNum)
 * @method integer getInstanceNum()
 */
final class ListScaleOutEcu extends EdasCommon
{
    public $action = 'ListScaleOutEcu';
}
