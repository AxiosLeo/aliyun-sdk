<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpnConnectionId($VpnConnectionId)
 * @method string getVpnConnectionId()
 */
final class DownloadVpnConnectionConfig extends VpcCommon
{
    public $action = 'DownloadVpnConnectionConfig';
}
