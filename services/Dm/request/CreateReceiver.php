<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setReceiversName($ReceiversName)
 * @method string getReceiversName()
 * @method $this setReceiversAlias($ReceiversAlias)
 * @method string getReceiversAlias()
 * @method $this setDesc($Desc)
 * @method string getDesc()
 */
final class CreateReceiver extends DmCommon
{
    public $action = 'CreateReceiver';
}
