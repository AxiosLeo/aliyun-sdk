<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setremark($remark)
 * @method string getremark()
 * @method $this settagIdList($tagIdList)
 * @method string gettagIdList()
 */
final class DescribeGroupStruct extends AegisCommon
{
    public $action = 'DescribeGroupStruct';
}
