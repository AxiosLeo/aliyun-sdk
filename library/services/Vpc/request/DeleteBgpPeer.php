<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBgpPeerId($BgpPeerId)
 * @method string getBgpPeerId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DeleteBgpPeer extends VpcCommon
{
    public $action = 'DeleteBgpPeer';
}
