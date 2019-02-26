<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setCpuLimit($CpuLimit)
 * @method string getCpuLimit()
 * @method $this setMemoryLimit($MemoryLimit)
 * @method string getMemoryLimit()
 */
final class UpdateK8sApplicationConfig extends EdasCommon
{
    public $action = 'UpdateK8sApplicationConfig';
}
