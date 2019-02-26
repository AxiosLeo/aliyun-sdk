<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyType($PolicyType)
 * @method string getPolicyType()
 * @method $this setMarker($Marker)
 * @method string getMarker()
 * @method $this setMaxItems($MaxItems)
 * @method integer getMaxItems()
 */
final class ListPolicies extends RamCommon
{
    public $action = 'ListPolicies';
}
