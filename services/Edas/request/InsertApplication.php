<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setBuildPackId($BuildPackId)
 * @method integer getBuildPackId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setApplicationName($ApplicationName)
 * @method string getApplicationName()
 * @method $this setReservedPortStr($ReservedPortStr)
 * @method string getReservedPortStr()
 * @method $this setEcuInfo($EcuInfo)
 * @method string getEcuInfo()
 * @method $this setCpu($Cpu)
 * @method integer getCpu()
 * @method $this setMem($Mem)
 * @method integer getMem()
 * @method $this setHealthCheckURL($HealthCheckURL)
 * @method string getHealthCheckURL()
 * @method $this setLogicalRegionId($LogicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setJdk($Jdk)
 * @method string getJdk()
 * @method $this setWebContainer($WebContainer)
 * @method string getWebContainer()
 * @method $this setPackageType($PackageType)
 * @method string getPackageType()
 */
final class InsertApplication extends EdasCommon
{
    public $action = 'InsertApplication';
}
