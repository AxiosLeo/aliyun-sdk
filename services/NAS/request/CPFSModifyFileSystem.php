<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFsId($FsId)
 * @method string getFsId()
 * @method $this setFsDesc($FsDesc)
 * @method string getFsDesc()
 * @method $this setLdapUrl($LdapUrl)
 * @method string getLdapUrl()
 */
final class CPFSModifyFileSystem extends NASCommon
{
    public $action = 'CPFSModifyFileSystem';
}
