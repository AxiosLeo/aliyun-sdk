<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNamespace($Namespace)
 * @method string getNamespace()
 * @method $this setAuthorizeId($AuthorizeId)
 * @method integer getAuthorizeId()
 */
final class DeleteNamespaceAuthorization extends CrCommon
{
    public $action = 'DeleteNamespaceAuthorization';
}
