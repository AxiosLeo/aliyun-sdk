<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setStartDay($StartDay)
 * @method string getStartDay()
 * @method $this setEndDay($EndDay)
 * @method string getEndDay()
 * @method $this setUserId($UserId)
 * @method string getUserId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetAgentData extends CCCCommon
{
    public $action = 'GetAgentData';
}
