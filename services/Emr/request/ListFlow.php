<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setJobId($JobId)
 * @method string getJobId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setPeriodic($Periodic)
 * @method boolean getPeriodic()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListFlow extends EmrCommon
{
    public $action = 'ListFlow';
}
