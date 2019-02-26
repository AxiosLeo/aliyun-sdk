<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCategory($Category)
 * @method string getCategory()
 * @method $this setPersonName($PersonName)
 * @method string getPersonName()
 * @method $this setImages($Images)
 * @method string getImages()
 * @method $this setPersonLib($PersonLib)
 * @method string getPersonLib()
 */
final class RegisterMediaDetailPerson extends MtsCommon
{
    public $action = 'RegisterMediaDetailPerson';
}
