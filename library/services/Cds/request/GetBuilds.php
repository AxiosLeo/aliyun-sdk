<?php
namespace aliyun\sdk\services\Cds\request;

use aliyun\sdk\services\Cds\CdsCommon;

/**
 * @method $this setJobName($JobName)
 * @method string getJobName()
 * @method $this setStart($Start)
 * @method integer getStart()
 * @method $this setNumberPerPage($NumberPerPage)
 * @method integer getNumberPerPage()
 */
final class GetBuilds extends CdsCommon
{
    public $action = 'GetBuilds';
}
