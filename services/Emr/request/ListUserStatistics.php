<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCurrentSize($CurrentSize)
 * @method integer getCurrentSize()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setOrderMode($OrderMode)
 * @method string getOrderMode()
 * @method $this setOrderFieldName($OrderFieldName)
 * @method string getOrderFieldName()
 */
final class ListUserStatistics extends EmrCommon
{
    public $action = 'ListUserStatistics';
}
