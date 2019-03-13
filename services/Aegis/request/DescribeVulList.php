<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setLevel($Level)
 * @method string getLevel()
 * @method $this setStatusList($StatusList)
 * @method string getStatusList()
 * @method $this setNecessity($Necessity)
 * @method string getNecessity()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeVulList extends AegisCommon
{
    public $action = 'DescribeVulList';
}
