<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setLogicalRegionId($LogicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setAct($Act)
 * @method string getAct()
 */
final class ListEcuByRegion extends EdasCommon
{
    public $action = 'ListEcuByRegion';
}
