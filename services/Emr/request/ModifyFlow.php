<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setPeriodic($Periodic)
 * @method boolean getPeriodic()
 * @method $this setStartSchedule($StartSchedule)
 * @method integer getStartSchedule()
 * @method $this setEndSchedule($EndSchedule)
 * @method integer getEndSchedule()
 * @method $this setCronExpr($CronExpr)
 * @method string getCronExpr()
 * @method $this setCreateCluster($CreateCluster)
 * @method boolean getCreateCluster()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setApplication($Application)
 * @method string getApplication()
 * @method $this setAlertConf($AlertConf)
 * @method string getAlertConf()
 * @method $this setAlertUserGroupBizId($AlertUserGroupBizId)
 * @method string getAlertUserGroupBizId()
 * @method $this setAlertDingDingGroupBizId($AlertDingDingGroupBizId)
 * @method string getAlertDingDingGroupBizId()
 * @method $this setParentFlowList($ParentFlowList)
 * @method string getParentFlowList()
 * @method $this setParentCategory($ParentCategory)
 * @method string getParentCategory()
 */
final class ModifyFlow extends EmrCommon
{
    public $action = 'ModifyFlow';
}
