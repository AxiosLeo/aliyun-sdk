<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBClusterId($DBClusterId)
 * @method string getDBClusterId()
 * @method $this setDBName($DBName)
 * @method string getDBName()
 * @method $this setCharacterSetName($CharacterSetName)
 * @method string getCharacterSetName()
 * @method $this setDBDescription($DBDescription)
 * @method string getDBDescription()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setAccountPrivilege($AccountPrivilege)
 * @method string getAccountPrivilege()
 */
final class CreateDatabase extends PolardbCommon
{
    public $action = 'CreateDatabase';
}
