<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:42
 */

namespace aliyun\sdk\cdn\request\DomainOperation;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class AddCdnDomain
 * @package aliyun\sdk\cdn\request\DomainOperation
 * @method $this setDomainName($DomainName)
 * @method $this setCdnType($CdnType)
 * @method $this setSourceType($SourceType)
 * @method $this setSourcePort($SourcePort)
 * @method $this setSources($Sources)
 * @method $this setScope($Scope)
 */
class AddCdnDomain extends CdnCommon
{
    use Request;
}