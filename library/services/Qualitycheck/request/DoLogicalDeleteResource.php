<?php
namespace aliyun\sdk\services\Qualitycheck\request;

use aliyun\sdk\services\Qualitycheck\QualitycheckCommon;

/**
 * @method $this setInterrupt($Interrupt)
 * @method boolean getInterrupt()
 * @method $this setPk($Pk)
 * @method string getPk()
 * @method $this setBid($Bid)
 * @method string getBid()
 * @method $this setHid($Hid)
 * @method integer getHid()
 * @method $this setCountry($Country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($TaskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($TaskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($GmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($Success)
 * @method boolean getSuccess()
 * @method $this setMessage($Message)
 * @method string getMessage()
 */
final class DoLogicalDeleteResource extends QualitycheckCommon
{
    public $action = 'DoLogicalDeleteResource';
}
