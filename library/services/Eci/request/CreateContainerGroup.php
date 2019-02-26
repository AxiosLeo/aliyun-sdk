<?php
namespace aliyun\sdk\services\Eci\request;

use aliyun\sdk\services\Eci\EciCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setContainerGroupName($ContainerGroupName)
 * @method string getContainerGroupName()
 * @method $this setRestartPolicy($RestartPolicy)
 * @method string getRestartPolicy()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setImageRegistryCredential($ImageRegistryCredential)
 * @method array getImageRegistryCredential()
 * @method $this setContainer($Container)
 * @method array getContainer()
 * @method $this setVolume($Volume)
 * @method array getVolume()
 * @method $this setEipInstanceId($EipInstanceId)
 * @method string getEipInstanceId()
 * @method $this setInitContainer($InitContainer)
 * @method array getInitContainer()
 * @method $this setDnsConfig_NameServer($DnsConfig_NameServer)
 * @method array getDnsConfig_NameServer()
 * @method $this setDnsConfig_Search($DnsConfig_Search)
 * @method array getDnsConfig_Search()
 * @method $this setDnsConfig_Option($DnsConfig_Option)
 * @method array getDnsConfig_Option()
 * @method $this setCpu($Cpu)
 * @method float getCpu()
 * @method $this setMemory($Memory)
 * @method float getMemory()
 */
final class CreateContainerGroup extends EciCommon
{
    public $action = 'CreateContainerGroup';
}
