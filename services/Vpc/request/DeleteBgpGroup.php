<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBgpGroupId($BgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DeleteBgpGroup extends VpcCommon
{
    public $action = 'DeleteBgpGroup';
}
