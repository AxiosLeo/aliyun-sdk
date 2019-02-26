<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setOnUnableToRedeployFailedInstance($OnUnableToRedeployFailedInstance)
 * @method string getOnUnableToRedeployFailedInstance()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDeploymentSetName($DeploymentSetName)
 * @method string getDeploymentSetName()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 * @method $this setGranularity($Granularity)
 * @method string getGranularity()
 * @method $this setStrategy($Strategy)
 * @method string getStrategy()
 */
final class CreateDeploymentSet extends EcsCommon
{
    public $action = 'CreateDeploymentSet';
}
