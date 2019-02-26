<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setAccessGroupName($AccessGroupName)
 * @method string getAccessGroupName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyAccessGroup extends NASCommon
{
    public $action = 'ModifyAccessGroup';
}
