<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setData($Data)
 * @method string getData()
 */
final class CreateCredentials extends CSBCommon
{
    public $action = 'CreateCredentials';
}
