<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setClusterMemberId($ClusterMemberId)
 * @method string getClusterMemberId()
 */
final class DeleteClusterMember extends EdasCommon
{
    public $action = 'DeleteClusterMember';
}
