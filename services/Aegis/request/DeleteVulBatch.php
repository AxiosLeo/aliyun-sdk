<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setBatchName($BatchName)
 * @method string getBatchName()
 * @method $this setResource($Resource)
 * @method string getResource()
 */
final class DeleteVulBatch extends AegisCommon
{
    public $action = 'DeleteVulBatch';
}
