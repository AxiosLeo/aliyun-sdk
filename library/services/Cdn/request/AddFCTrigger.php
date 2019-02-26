<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setTriggerARN($TriggerARN)
 * @method string getTriggerARN()
 * @method $this setEventMetaName($EventMetaName)
 * @method string getEventMetaName()
 * @method $this setEventMetaVersion($EventMetaVersion)
 * @method string getEventMetaVersion()
 * @method $this setSourceARN($SourceARN)
 * @method string getSourceARN()
 * @method $this setFunctionARN($FunctionARN)
 * @method string getFunctionARN()
 * @method $this setRoleARN($RoleARN)
 * @method string getRoleARN()
 * @method $this setNotes($Notes)
 * @method string getNotes()
 */
final class AddFCTrigger extends CdnCommon
{
    public $action = 'AddFCTrigger';
}
