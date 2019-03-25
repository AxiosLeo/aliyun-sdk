<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setAliasName($AliasName)
 * @method string getAliasName()
 * @method $this setLevel($Level)
 * @method string getLevel()
 * @method $this setStatusList($StatusList)
 * @method string getStatusList()
 * @method $this setNecessity($Necessity)
 * @method string getNecessity()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setBatchName($BatchName)
 * @method string getBatchName()
 * @method $this setResource($Resource)
 * @method string getResource()
 * @method $this setCreateTsStart($CreateTsStart)
 * @method integer getCreateTsStart()
 * @method $this setCreateTsEnd($CreateTsEnd)
 * @method integer getCreateTsEnd()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeVulList extends AegisCommon
{
    public $action = 'DescribeVulList';
}
