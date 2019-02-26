<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setAddGroup_1($AddGroup_1)
 * @method string getAddGroup_1()
 * @method $this setRemoveGroup_1($RemoveGroup_1)
 * @method string getRemoveGroup_1()
 */
final class ModifyImageShareGroupPermission extends EcsCommon
{
    public $action = 'ModifyImageShareGroupPermission';
}
