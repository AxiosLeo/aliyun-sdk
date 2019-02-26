<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBgpGroupId($BgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setPeerAsn($PeerAsn)
 * @method integer getPeerAsn()
 * @method $this setAuthKey($AuthKey)
 * @method string getAuthKey()
 * @method $this setIsFakeAsn($IsFakeAsn)
 * @method boolean getIsFakeAsn()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyBgpGroupAttribute extends VpcCommon
{
    public $action = 'ModifyBgpGroupAttribute';
}
