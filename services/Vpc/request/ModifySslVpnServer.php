<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSslVpnServerId($SslVpnServerId)
 * @method string getSslVpnServerId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setClientIpPool($ClientIpPool)
 * @method string getClientIpPool()
 * @method $this setLocalSubnet($LocalSubnet)
 * @method string getLocalSubnet()
 * @method $this setProto($Proto)
 * @method string getProto()
 * @method $this setCipher($Cipher)
 * @method string getCipher()
 * @method $this setPort($Port)
 * @method integer getPort()
 * @method $this setCompress($Compress)
 * @method boolean getCompress()
 */
final class ModifySslVpnServer extends VpcCommon
{
    public $action = 'ModifySslVpnServer';
}
