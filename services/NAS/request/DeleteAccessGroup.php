<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setAccessGroupName($AccessGroupName)
 * @method string getAccessGroupName()
 */
final class DeleteAccessGroup extends NASCommon
{
    public $action = 'DeleteAccessGroup';
}
