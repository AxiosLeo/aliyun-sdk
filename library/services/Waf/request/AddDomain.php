<?php
namespace aliyun\sdk\services\Waf\request;

use aliyun\sdk\services\Waf\WafCommon;

/**
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 * @method $this setSourceIps($SourceIps)
 * @method string getSourceIps()
 * @method $this setProtocols($Protocols)
 * @method string getProtocols()
 * @method $this setIsProxy($IsProxy)
 * @method integer getIsProxy()
 */
final class AddDomain extends WafCommon
{
    public $action = 'AddDomain';
}
