<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setFromApp($FromApp)
 * @method string getFromApp()
 * @method $this setUserId($UserId)
 * @method string getUserId()
 * @method $this setIds($Ids)
 * @method string getIds()
 */
final class ListAlertContacts extends EmrCommon
{
    public $action = 'ListAlertContacts';
}
