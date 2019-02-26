<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setMainDomainName($MainDomainName)
 * @method string getMainDomainName()
 * @method $this setMainAppName($MainAppName)
 * @method string getMainAppName()
 * @method $this setMainStreamName($MainStreamName)
 * @method string getMainStreamName()
 * @method $this setMixDomainName($MixDomainName)
 * @method string getMixDomainName()
 * @method $this setMixAppName($MixAppName)
 * @method string getMixAppName()
 * @method $this setMixStreamName($MixStreamName)
 * @method string getMixStreamName()
 * @method $this setMixTemplate($MixTemplate)
 * @method string getMixTemplate()
 * @method $this setMixType($MixType)
 * @method string getMixType()
 */
final class StartMixStreamsService extends CdnCommon
{
    public $action = 'StartMixStreamsService';
}
