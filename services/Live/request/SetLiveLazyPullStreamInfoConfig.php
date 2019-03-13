<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setPullDomainName($PullDomainName)
 * @method string getPullDomainName()
 * @method $this setPullAppName($PullAppName)
 * @method string getPullAppName()
 * @method $this setPullProtocol($PullProtocol)
 * @method string getPullProtocol()
 * @method $this setPullAuthType($PullAuthType)
 * @method string getPullAuthType()
 * @method $this setPullAuthKey($PullAuthKey)
 * @method string getPullAuthKey()
 */
final class SetLiveLazyPullStreamInfoConfig extends LiveCommon
{
    public $action = 'SetLiveLazyPullStreamInfoConfig';
}
