<?php
namespace aliyun\sdk\services\ARMS\request;

use aliyun\sdk\services\ARMS\ARMSCommon;

/**
 * @method $this setDatasetId($DatasetId)
 * @method integer getDatasetId()
 * @method $this setIntervalInSec($IntervalInSec)
 * @method integer getIntervalInSec()
 * @method $this setDateStr($DateStr)
 * @method string getDateStr()
 * @method $this setMinTime($MinTime)
 * @method integer getMinTime()
 * @method $this setMaxTime($MaxTime)
 * @method integer getMaxTime()
 * @method $this setDimensions($Dimensions)
 * @method array getDimensions()
 * @method $this setWhereInKey($WhereInKey)
 * @method string getWhereInKey()
 * @method $this setWhereInValues($WhereInValues)
 * @method array getWhereInValues()
 * @method $this setMeasures($Measures)
 * @method array getMeasures()
 * @method $this setIsDrillDown($IsDrillDown)
 * @method boolean getIsDrillDown()
 * @method $this setOrderByKey($OrderByKey)
 * @method string getOrderByKey()
 * @method $this setLimit($Limit)
 * @method integer getLimit()
 * @method $this setReduceTail($ReduceTail)
 * @method boolean getReduceTail()
 */
final class WhereInDimQuery extends ARMSCommon
{
    public $action = 'WhereInDimQuery';
}
