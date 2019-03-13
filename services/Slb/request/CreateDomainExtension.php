<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setListenerPort($ListenerPort)
 * @method integer getListenerPort()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 * @method $this setServerCertificateId($ServerCertificateId)
 * @method string getServerCertificateId()
 */
final class CreateDomainExtension extends SlbCommon
{
    public $action = 'CreateDomainExtension';
}
