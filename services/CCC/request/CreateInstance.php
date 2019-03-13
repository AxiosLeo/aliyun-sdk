<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStorageMaxDays($StorageMaxDays)
 * @method integer getStorageMaxDays()
 * @method $this setStorageMaxSize($StorageMaxSize)
 * @method integer getStorageMaxSize()
 * @method $this setDirectoryId($DirectoryId)
 * @method string getDirectoryId()
 * @method $this setAdminRamId($AdminRamId)
 * @method array getAdminRamId()
 * @method $this setPhoneNumber($PhoneNumber)
 * @method string getPhoneNumber()
 */
final class CreateInstance extends CCCCommon
{
    public $action = 'CreateInstance';
}
