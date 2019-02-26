<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 */
final class ModifyAssetGroup extends AegisCommon
{
    public $action = 'ModifyAssetGroup';
}
