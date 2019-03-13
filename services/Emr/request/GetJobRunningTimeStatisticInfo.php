<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($FromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($ToDatetime)
 * @method string getToDatetime()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class GetJobRunningTimeStatisticInfo extends EmrCommon
{
    public $action = 'GetJobRunningTimeStatisticInfo';
}
