<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setNamespaceId($NamespaceId)
 * @method string getNamespaceId()
 * @method $this setAppDescription($AppDescription)
 * @method string getAppDescription()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setPackageType($PackageType)
 * @method string getPackageType()
 * @method $this setPackageVersion($PackageVersion)
 * @method string getPackageVersion()
 * @method $this setPackageUrl($PackageUrl)
 * @method string getPackageUrl()
 * @method $this setImageUrl($ImageUrl)
 * @method string getImageUrl()
 * @method $this setJdk($Jdk)
 * @method string getJdk()
 * @method $this setWebContainer($WebContainer)
 * @method string getWebContainer()
 * @method $this setCpu($Cpu)
 * @method integer getCpu()
 * @method $this setMemory($Memory)
 * @method integer getMemory()
 * @method $this setReplicas($Replicas)
 * @method integer getReplicas()
 * @method $this setCommand($Command)
 * @method string getCommand()
 * @method $this setCommandArgs($CommandArgs)
 * @method string getCommandArgs()
 * @method $this setEnvs($Envs)
 * @method string getEnvs()
 * @method $this setCustomHostAlias($CustomHostAlias)
 * @method string getCustomHostAlias()
 * @method $this setJarStartOptions($JarStartOptions)
 * @method string getJarStartOptions()
 * @method $this setJarStartArgs($JarStartArgs)
 * @method string getJarStartArgs()
 * @method $this setLiveness($Liveness)
 * @method string getLiveness()
 * @method $this setReadiness($Readiness)
 * @method string getReadiness()
 * @method $this setDeploy($Deploy)
 * @method boolean getDeploy()
 */
final class InsertServerlessApplication extends EdasCommon
{
    public $action = 'InsertServerlessApplication';
}
