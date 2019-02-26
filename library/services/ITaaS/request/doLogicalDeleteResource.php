<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setInterrupt($Interrupt)
 * @method boolean getInterrupt()
 * @method $this setInvoker($Invoker)
 * @method string getInvoker()
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
 * @method $this setAuthTypeDefault($AuthTypeDefault)
 * @method string getAuthTypeDefault()
 */
final class doLogicalDeleteResource extends ITaaSCommon
{
    public $action = 'doLogicalDeleteResource';
}
