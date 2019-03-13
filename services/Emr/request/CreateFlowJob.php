<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setFailAct($FailAct)
 * @method string getFailAct()
 * @method $this setMaxRetry($MaxRetry)
 * @method integer getMaxRetry()
 * @method $this setRetryInterval($RetryInterval)
 * @method integer getRetryInterval()
 * @method $this setParams($Params)
 * @method string getParams()
 * @method $this setParamConf($ParamConf)
 * @method string getParamConf()
 * @method $this setEnvConf($EnvConf)
 * @method string getEnvConf()
 * @method $this setRunConf($RunConf)
 * @method string getRunConf()
 * @method $this setMonitorConf($MonitorConf)
 * @method string getMonitorConf()
 * @method $this setMode($Mode)
 * @method string getMode()
 * @method $this setParentCategory($ParentCategory)
 * @method string getParentCategory()
 * @method $this setResourceList($ResourceList)
 * @method array getResourceList()
 * @method $this setAdhoc($Adhoc)
 * @method boolean getAdhoc()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setAlertConf($AlertConf)
 * @method string getAlertConf()
 */
final class CreateFlowJob extends EmrCommon
{
    public $action = 'CreateFlowJob';
}
