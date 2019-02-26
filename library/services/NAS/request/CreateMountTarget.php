<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFileSystemId($FileSystemId)
 * @method string getFileSystemId()
 * @method $this setAccessGroupName($AccessGroupName)
 * @method string getAccessGroupName()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 */
final class CreateMountTarget extends NASCommon
{
    public $action = 'CreateMountTarget';
}
