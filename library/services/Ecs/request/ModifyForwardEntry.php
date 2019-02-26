<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setForwardTableId($ForwardTableId)
 * @method string getForwardTableId()
 * @method $this setForwardEntryId($ForwardEntryId)
 * @method string getForwardEntryId()
 * @method $this setExternalIp($ExternalIp)
 * @method string getExternalIp()
 * @method $this setExternalPort($ExternalPort)
 * @method string getExternalPort()
 * @method $this setInternalIp($InternalIp)
 * @method string getInternalIp()
 * @method $this setInternalPort($InternalPort)
 * @method string getInternalPort()
 * @method $this setIpProtocol($IpProtocol)
 * @method string getIpProtocol()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ModifyForwardEntry extends EcsCommon
{
    public $action = 'ModifyForwardEntry';
}
