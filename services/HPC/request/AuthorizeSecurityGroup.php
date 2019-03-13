<?php
namespace aliyun\sdk\services\HPC\request;

use aliyun\sdk\services\HPC\HPCCommon;

/**
 * @method $this setTOKEN($TOKEN)
 * @method string getTOKEN()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setPolicy($Policy)
 * @method string getPolicy()
 * @method $this setPriority($Priority)
 * @method string getPriority()
 * @method $this setNicType($NicType)
 * @method string getNicType()
 */
final class AuthorizeSecurityGroup extends HPCCommon
{
    public $action = 'AuthorizeSecurityGroup';
}
