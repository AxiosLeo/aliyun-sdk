<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setRuleId($RuleId)
 * @method string getRuleId()
 * @method $this setVServerGroupId($VServerGroupId)
 * @method string getVServerGroupId()
 * @method $this setRuleName($RuleName)
 * @method string getRuleName()
 * @method $this setListenerSync($ListenerSync)
 * @method string getListenerSync()
 * @method $this setScheduler($Scheduler)
 * @method string getScheduler()
 * @method $this setStickySession($StickySession)
 * @method string getStickySession()
 * @method $this setStickySessionType($StickySessionType)
 * @method string getStickySessionType()
 * @method $this setCookieTimeout($CookieTimeout)
 * @method integer getCookieTimeout()
 * @method $this setCookie($Cookie)
 * @method string getCookie()
 * @method $this setHealthCheck($HealthCheck)
 * @method string getHealthCheck()
 * @method $this setHealthCheckDomain($HealthCheckDomain)
 * @method string getHealthCheckDomain()
 * @method $this setHealthCheckURI($HealthCheckURI)
 * @method string getHealthCheckURI()
 * @method $this setHealthyThreshold($HealthyThreshold)
 * @method integer getHealthyThreshold()
 * @method $this setUnhealthyThreshold($UnhealthyThreshold)
 * @method integer getUnhealthyThreshold()
 * @method $this setHealthCheckTimeout($HealthCheckTimeout)
 * @method integer getHealthCheckTimeout()
 * @method $this setHealthCheckInterval($HealthCheckInterval)
 * @method integer getHealthCheckInterval()
 * @method $this setHealthCheckConnectPort($HealthCheckConnectPort)
 * @method integer getHealthCheckConnectPort()
 * @method $this setHealthCheckHttpCode($HealthCheckHttpCode)
 * @method string getHealthCheckHttpCode()
 */
final class SetRule extends SlbCommon
{
    public $action = 'SetRule';
}
