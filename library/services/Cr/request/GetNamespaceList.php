<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setAuthorize($Authorize)
 * @method string getAuthorize()
 */
final class GetNamespaceList extends CrCommon
{
    public $action = 'GetNamespaceList';
}
