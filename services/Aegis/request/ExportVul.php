<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
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
 * @method $this setAliasName($AliasName)
 * @method string getAliasName()
 * @method $this setBatchName($BatchName)
 * @method string getBatchName()
 * @method $this setResource($Resource)
 * @method string getResource()
 * @method $this setNecessity($Necessity)
 * @method string getNecessity()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 */
final class ExportVul extends AegisCommon
{
    public $action = 'ExportVul';
}
