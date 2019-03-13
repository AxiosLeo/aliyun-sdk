<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNamespace($Namespace)
 * @method string getNamespace()
 * @method $this setAuthorize($Authorize)
 * @method string getAuthorize()
 */
final class GetNamespaceAuthorizationList extends CrCommon
{
    public $action = 'GetNamespaceAuthorizationList';
}
