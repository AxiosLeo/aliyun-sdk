<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:33
 */

namespace aliyun\sdk\cdn\request\DomainOperation;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeUserDomains
 * @package aliyun\sdk\cdn\request\DomainOperation
 * @method $this setPageSize($page_size)
 * @method $this setPageNumber($page_number)
 * @method $this setDomainName($domain_name)
 * @method $this setDomainSearchType($domain_search_type)
 * @method $this setDomainStatus($domain_status)
 * @method $this setCdnType($cdn_type)
 * @method $this setResourceGroupId($resource_group_id)
 * @method $this setFuncFilter($func_filter)
 * @method $this setFuncId($func_id)
 */
class DescribeUserDomains extends CdnCommon
{
    use Request;
}