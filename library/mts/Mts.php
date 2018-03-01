<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/1 17:20
 */
namespace aliyun\sdk\mts;

use aliyun\sdk\mts\request\Job\SubmitMediaInfoJob;

/**
 * Class Mts
 * API Document : https://help.aliyun.com/document_detail/66804.html
 * @package aliyun\sdk\mts
 */
class Mts
{
    /********************************** Job **************************************************/

    /**
     * 提交媒体信息作业
     * @param $input
     * @return SubmitMediaInfoJob
     */
    public static function SubmitMediaInfoJob($input){
        return (new SubmitMediaInfoJob())->setInput($input);
    }
}