<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setDataIdPattern($DataIdPattern)
 * @method string getDataIdPattern()
 * @method $this setGroup($Group)
 * @method string getGroup()
 * @method $this setLogicalRegionId($LogicalRegionId)
 * @method string getLogicalRegionId()
 */
final class ListConfigCenters extends EdasCommon
{
    public $action = 'ListConfigCenters';
}
