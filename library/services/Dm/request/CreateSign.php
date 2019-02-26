<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSignName($SignName)
 * @method string getSignName()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setSignType($SignType)
 * @method integer getSignType()
 * @method $this setFileNames($FileNames)
 * @method string getFileNames()
 * @method $this setFromType($FromType)
 * @method integer getFromType()
 */
final class CreateSign extends DmCommon
{
    public $action = 'CreateSign';
}
