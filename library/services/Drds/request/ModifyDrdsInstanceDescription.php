<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class ModifyDrdsInstanceDescription extends DrdsCommon
{
    public $action = 'ModifyDrdsInstanceDescription';
}
