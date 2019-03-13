<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFsDesc($FsDesc)
 * @method string getFsDesc()
 * @method $this setFsSpec($FsSpec)
 * @method string getFsSpec()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setCapacity($Capacity)
 * @method integer getCapacity()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 */
final class CPFSCreateFileSystem extends NASCommon
{
    public $action = 'CPFSCreateFileSystem';
}
