<?php
namespace aliyun\sdk\services\Eci\request;

use aliyun\sdk\services\Eci\EciCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setContainerGroupId($ContainerGroupId)
 * @method string getContainerGroupId()
 * @method $this setRestartPolicy($RestartPolicy)
 * @method string getRestartPolicy()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setVolume($Volume)
 * @method array getVolume()
 * @method $this setDnsConfig_NameServer($DnsConfig_NameServer)
 * @method array getDnsConfig_NameServer()
 * @method $this setDnsConfig_Search($DnsConfig_Search)
 * @method array getDnsConfig_Search()
 * @method $this setDnsConfig_Option($DnsConfig_Option)
 * @method array getDnsConfig_Option()
 * @method $this setContainer($Container)
 * @method array getContainer()
 * @method $this setInitContainer($InitContainer)
 * @method array getInitContainer()
 * @method $this setImageRegistryCredential($ImageRegistryCredential)
 * @method array getImageRegistryCredential()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class UpdateContainerGroup extends EciCommon
{
    public $action = 'UpdateContainerGroup';
}
