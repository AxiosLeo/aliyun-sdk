<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBid($Bid)
 * @method integer getBid()
 * @method $this setIid($Iid)
 * @method integer getIid()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPer($Per)
 * @method integer getPer()
 */
final class UserDataShowList extends CloudwfCommon
{
    public $action = 'UserDataShowList';
}
