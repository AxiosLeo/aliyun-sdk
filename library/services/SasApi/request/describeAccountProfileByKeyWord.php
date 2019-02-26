<?php
namespace aliyun\sdk\services\SasApi\request;

use aliyun\sdk\services\SasApi\SasApiCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setKeyword($Keyword)
 * @method string getKeyword()
 */
final class describeAccountProfileByKeyWord extends SasApiCommon
{
    public $action = 'describeAccountProfileByKeyWord';
}
