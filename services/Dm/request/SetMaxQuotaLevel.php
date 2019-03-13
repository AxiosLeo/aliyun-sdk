<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMaxQuotaLevel($MaxQuotaLevel)
 * @method string getMaxQuotaLevel()
 */
final class SetMaxQuotaLevel extends DmCommon
{
    public $action = 'SetMaxQuotaLevel';
}
