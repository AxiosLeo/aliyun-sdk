<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setTag($Tag)
 * @method integer getTag()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 */
final class DescribeWebshell extends AegisCommon
{
    public $action = 'DescribeWebshell';
}
