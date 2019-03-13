<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setPreStop($PreStop)
 * @method string getPreStop()
 * @method $this setEnvs($Envs)
 * @method string getEnvs()
 * @method $this setImageTag($ImageTag)
 * @method string getImageTag()
 * @method $this setBatchWaitTime($BatchWaitTime)
 * @method integer getBatchWaitTime()
 * @method $this setCommand($Command)
 * @method string getCommand()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setPostStart($PostStart)
 * @method string getPostStart()
 * @method $this setReadiness($Readiness)
 * @method string getReadiness()
 * @method $this setLiveness($Liveness)
 * @method string getLiveness()
 * @method $this setArgs($Args)
 * @method string getArgs()
 * @method $this setReplicas($Replicas)
 * @method integer getReplicas()
 * @method $this setImage($Image)
 * @method string getImage()
 * @method $this setCpuLimit($CpuLimit)
 * @method integer getCpuLimit()
 * @method $this setMemoryLimit($MemoryLimit)
 * @method integer getMemoryLimit()
 * @method $this setCpuRequest($CpuRequest)
 * @method integer getCpuRequest()
 * @method $this setMemoryRequest($MemoryRequest)
 * @method integer getMemoryRequest()
 * @method $this setNasId($NasId)
 * @method string getNasId()
 * @method $this setMountDescs($MountDescs)
 * @method string getMountDescs()
 * @method $this setStorageType($StorageType)
 * @method string getStorageType()
 * @method $this setLocalVolume($LocalVolume)
 * @method string getLocalVolume()
 */
final class DeployK8sApplication extends EdasCommon
{
    public $action = 'DeployK8sApplication';
}
