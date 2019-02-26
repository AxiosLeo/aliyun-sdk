<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setclusterId($clusterId)
 * @method string getclusterId()
 * @method $this setinstanceIds($instanceIds)
 * @method string getinstanceIds()
 * @method $this setpassword($password)
 * @method string getpassword()
 */
final class InsertClusterMember extends EdasCommon
{
    public $action = 'InsertClusterMember';
}
