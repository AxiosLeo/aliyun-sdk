<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setStatusList($StatusList)
 * @method string getStatusList()
 * @method $this setDealed($Dealed)
 * @method string getDealed()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setLevel($Level)
 * @method string getLevel()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setAliasName($AliasName)
 * @method string getAliasName()
 * @method $this setNecessity($Necessity)
 * @method string getNecessity()
 * @method $this setBatchName($BatchName)
 * @method string getBatchName()
 * @method $this setResource($Resource)
 * @method string getResource()
 */
final class ModifySaveVulBatch extends AegisCommon
{
    public $action = 'ModifySaveVulBatch';
}
