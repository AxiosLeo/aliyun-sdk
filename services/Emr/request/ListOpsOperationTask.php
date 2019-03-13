<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setOperationId($OperationId)
 * @method integer getOperationId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class ListOpsOperationTask extends EmrCommon
{
    public $action = 'ListOpsOperationTask';
}
