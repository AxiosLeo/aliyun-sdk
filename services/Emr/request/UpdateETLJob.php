<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setCheck($Check)
 * @method boolean getCheck()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClusterConfig($ClusterConfig)
 * @method string getClusterConfig()
 * @method $this setTriggerRule($TriggerRule)
 * @method array getTriggerRule()
 * @method $this setAlertConfig($AlertConfig)
 * @method string getAlertConfig()
 * @method $this setStage($Stage)
 * @method array getStage()
 * @method $this setStageConnection($StageConnection)
 * @method array getStageConnection()
 */
final class UpdateETLJob extends EmrCommon
{
    public $action = 'UpdateETLJob';
}
