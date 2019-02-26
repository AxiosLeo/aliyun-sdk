<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setAccessGroupName($AccessGroupName)
 * @method string getAccessGroupName()
 * @method $this setAccessGroupType($AccessGroupType)
 * @method string getAccessGroupType()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateAccessGroup extends NASCommon
{
    public $action = 'CreateAccessGroup';
}
