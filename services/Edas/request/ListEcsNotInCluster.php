<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setNetworkMode($NetworkMode)
 * @method integer getNetworkMode()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 */
final class ListEcsNotInCluster extends EdasCommon
{
    public $action = 'ListEcsNotInCluster';
}
