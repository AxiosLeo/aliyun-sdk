<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setKernelVersion($KernelVersion)
 * @method string getKernelVersion()
 */
final class DescribeKernelReleaseNotes extends DdsCommon
{
    public $action = 'DescribeKernelReleaseNotes';
}
