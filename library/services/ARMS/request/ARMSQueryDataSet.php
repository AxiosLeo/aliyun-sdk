<?php
namespace aliyun\sdk\services\ARMS\request;

use aliyun\sdk\services\ARMS\ARMSCommon;

/**
 * @method $this setDatasetId($DatasetId)
 * @method integer getDatasetId()
 * @method $this setIntervalInSec($IntervalInSec)
 * @method integer getIntervalInSec()
 * @method $this setDateStr($DateStr)
 * @method integer getDateStr()
 * @method $this setMinTime($MinTime)
 * @method integer getMinTime()
 * @method $this setMaxTime($MaxTime)
 * @method integer getMaxTime()
 * @method $this setDimensions($Dimensions)
 * @method array getDimensions()
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
 * @method $this setHungryMode($HungryMode)
 * @method boolean getHungryMode()
 * @method $this setRequiredDims($RequiredDims)
 * @method array getRequiredDims()
 * @method $this setOptionalDims($OptionalDims)
 * @method array getOptionalDims()
 */
final class ARMSQueryDataSet extends ARMSCommon
{
    public $action = 'ARMSQueryDataSet';
}
