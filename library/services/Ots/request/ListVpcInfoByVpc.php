<?php
namespace aliyun\sdk\services\Ots\request;

use aliyun\sdk\services\Ots\OtsCommon;

/**
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setTagInfo($TagInfo)
 * @method array getTagInfo()
 */
final class ListVpcInfoByVpc extends OtsCommon
{
    public $action = 'ListVpcInfoByVpc';
}
