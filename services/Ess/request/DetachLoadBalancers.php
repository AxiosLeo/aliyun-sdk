<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setLoadBalancer($LoadBalancer)
 * @method array getLoadBalancer()
 * @method $this setForceDetach($ForceDetach)
 * @method boolean getForceDetach()
 */
final class DetachLoadBalancers extends EssCommon
{
    public $action = 'DetachLoadBalancers';
}
