<?php
namespace aliyun\sdk\services\BatchCompute\request;

use aliyun\sdk\services\BatchCompute\BatchComputeCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setWorkerId($WorkerId)
 * @method string getWorkerId()
 */
final class ReportWorkerStatus extends BatchComputeCommon
{
    public $action = 'ReportWorkerStatus';
}
