<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAgsid($Agsid)
 * @method integer getAgsid()
 * @method $this setIdtype($Idtype)
 * @method integer getIdtype()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPer($Per)
 * @method integer getPer()
 */
final class ProfileHistoryList extends CloudwfCommon
{
    public $action = 'ProfileHistoryList';
}
