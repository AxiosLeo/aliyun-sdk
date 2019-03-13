<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setMarker($Marker)
 * @method string getMarker()
 * @method $this setMaxItems($MaxItems)
 * @method integer getMaxItems()
 */
final class ListUsersForGroup extends RamCommon
{
    public $action = 'ListUsersForGroup';
}
