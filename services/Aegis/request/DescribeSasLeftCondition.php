<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setFilterConditions($FilterConditions)
 * @method string getFilterConditions()
 * @method $this setConditionType($ConditionType)
 * @method string getConditionType()
 * @method $this setLang($Lang)
 * @method string getLang()
 */
final class DescribeSasLeftCondition extends AegisCommon
{
    public $action = 'DescribeSasLeftCondition';
}
