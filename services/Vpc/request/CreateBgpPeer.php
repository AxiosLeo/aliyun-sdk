<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBgpGroupId($BgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setPeerIpAddress($PeerIpAddress)
 * @method string getPeerIpAddress()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateBgpPeer extends VpcCommon
{
    public $action = 'CreateBgpPeer';
}
