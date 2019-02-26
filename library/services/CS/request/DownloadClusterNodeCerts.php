<?php
namespace aliyun\sdk\services\CS\request;

use aliyun\sdk\services\CS\CSCommon;

/**
 * @method $this setToken($Token)
 * @method string getToken()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 */
final class DownloadClusterNodeCerts extends CSCommon
{
    public $action = 'DownloadClusterNodeCerts';
}
