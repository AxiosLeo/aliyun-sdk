<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSignId($SignId)
 * @method integer getSignId()
 * @method $this setFromType($FromType)
 * @method integer getFromType()
 */
final class DeleteSign extends DmCommon
{
    public $action = 'DeleteSign';
}
