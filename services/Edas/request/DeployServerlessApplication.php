<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setJdk($Jdk)
 * @method string getJdk()
 * @method $this setWebContainer($WebContainer)
 * @method string getWebContainer()
 * @method $this setPackageVersion($PackageVersion)
 * @method string getPackageVersion()
 * @method $this setPackageUrl($PackageUrl)
 * @method string getPackageUrl()
 * @method $this setImageUrl($ImageUrl)
 * @method string getImageUrl()
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
 * @method $this setMinReadyInstances($MinReadyInstances)
 * @method integer getMinReadyInstances()
 * @method $this setBatchWaitTime($BatchWaitTime)
 * @method integer getBatchWaitTime()
 */
final class DeployServerlessApplication extends EdasCommon
{
    public $action = 'DeployServerlessApplication';
}
