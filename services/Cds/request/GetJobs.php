<?php
namespace aliyun\sdk\services\Cds\request;

use aliyun\sdk\services\Cds\CdsCommon;

/**
 * @method $this setStart($Start)
 * @method integer getStart()
 * @method $this setNumberPerPage($NumberPerPage)
 * @method integer getNumberPerPage()
 */
final class GetJobs extends CdsCommon
{
    public $action = 'GetJobs';
}
