<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setVertexId($VertexId)
 * @method string getVertexId()
 * @method $this setUuid($Uuid)
 * @method string getUuid()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setStartType($StartType)
 * @method string getStartType()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setFrom($From)
 * @method string getFrom()
 */
final class DescribeTraceInfoNodeList extends AegisCommon
{
    public $action = 'DescribeTraceInfoNodeList';
}
