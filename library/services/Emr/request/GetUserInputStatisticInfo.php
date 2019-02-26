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
 */
final class GetUserInputStatisticInfo extends EmrCommon
{
    public $action = 'GetUserInputStatisticInfo';
}
