<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setAddAccount($AddAccount)
 * @method array getAddAccount()
 * @method $this setRemoveAccount($RemoveAccount)
 * @method array getRemoveAccount()
 */
final class ModifyImageSharePermission extends EcsCommon
{
    public $action = 'ModifyImageSharePermission';
}
