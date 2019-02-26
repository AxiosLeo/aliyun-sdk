<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAccountNickname($AccountNickname)
 * @method string getAccountNickname()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setUid($Uid)
 * @method integer getUid()
 */
final class SetAccountInfo extends AgencyCommon
{
    public $action = 'SetAccountInfo';
}
