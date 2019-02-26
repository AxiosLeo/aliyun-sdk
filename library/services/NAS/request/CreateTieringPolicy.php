<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setMtime($Mtime)
 * @method integer getMtime()
 * @method $this setAtime($Atime)
 * @method integer getAtime()
 * @method $this setCtime($Ctime)
 * @method integer getCtime()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setFileName($FileName)
 * @method string getFileName()
 * @method $this setRecallTime($RecallTime)
 * @method integer getRecallTime()
 * @method $this setCheckLimit($CheckLimit)
 * @method boolean getCheckLimit()
 */
final class CreateTieringPolicy extends NASCommon
{
    public $action = 'CreateTieringPolicy';
}
