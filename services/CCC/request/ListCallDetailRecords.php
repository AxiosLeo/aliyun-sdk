<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumber($PhoneNumber)
 * @method string getPhoneNumber()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setStopTime($StopTime)
 * @method integer getStopTime()
 * @method $this setCriteria($Criteria)
 * @method string getCriteria()
 * @method $this setContactType($ContactType)
 * @method string getContactType()
 * @method $this setContactDisposition($ContactDisposition)
 * @method string getContactDisposition()
 * @method $this setWithRecording($WithRecording)
 * @method boolean getWithRecording()
 * @method $this setContactId($ContactId)
 * @method string getContactId()
 * @method $this setOrderBy($OrderBy)
 * @method string getOrderBy()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListCallDetailRecords extends CCCCommon
{
    public $action = 'ListCallDetailRecords';
}
