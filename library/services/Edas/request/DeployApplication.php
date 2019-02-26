<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setPackageVersion($PackageVersion)
 * @method string getPackageVersion()
 * @method $this setDesc($Desc)
 * @method string getDesc()
 * @method $this setDeployType($DeployType)
 * @method string getDeployType()
 * @method $this setWarUrl($WarUrl)
 * @method string getWarUrl()
 * @method $this setImageUrl($ImageUrl)
 * @method string getImageUrl()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setBatch($Batch)
 * @method integer getBatch()
 * @method $this setBatchWaitTime($BatchWaitTime)
 * @method integer getBatchWaitTime()
 * @method $this setAppEnv($AppEnv)
 * @method string getAppEnv()
 * @method $this setBuildPackId($BuildPackId)
 * @method integer getBuildPackId()
 * @method $this setComponentIds($ComponentIds)
 * @method string getComponentIds()
 */
final class DeployApplication extends EdasCommon
{
    public $action = 'DeployApplication';
}
