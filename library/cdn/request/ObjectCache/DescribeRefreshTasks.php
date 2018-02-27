<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:17
 */

namespace aliyun\sdk\cdn\request\ObjectCache;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeRefreshTasks
 * @package aliyun\sdk\cdn\request\ObjectCache
 * @method $this setTaskId($task_id)
 * @method $this setObjectPath($object_path)
 * @method $this setDomainName($domain_name)
 * @method $this setObjectType($object_type)
 * @method $this setStatus($status)
 * @method $this setStartTime($start_time)
 * @method $this setEndTime($end_time)
 * @method $this setPageSize($page_size)
 * @method $this setPageNumber($page_number)
 */
class DescribeRefreshTasks extends CdnCommon
{
    use Request;
}