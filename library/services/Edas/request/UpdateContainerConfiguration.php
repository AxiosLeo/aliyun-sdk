<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setContextPath($ContextPath)
 * @method string getContextPath()
 * @method $this setHttpPort($HttpPort)
 * @method integer getHttpPort()
 * @method $this setMaxThreads($MaxThreads)
 * @method integer getMaxThreads()
 * @method $this setURIEncoding($URIEncoding)
 * @method string getURIEncoding()
 * @method $this setUseBodyEncoding($UseBodyEncoding)
 * @method boolean getUseBodyEncoding()
 */
final class UpdateContainerConfiguration extends EdasCommon
{
    public $action = 'UpdateContainerConfiguration';
}
