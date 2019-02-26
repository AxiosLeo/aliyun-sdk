<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:15
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait IncludeSnapshotListParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait IncludeSnapshotListParamTrait
{
    public function setIncludeSnapshotList($include_snapshot_list){
        $include_snapshot_list = \aliyun\sdk\core\help\Parse::boolToString($include_snapshot_list);
        $this->setParam("IncludeSnapshotList",$include_snapshot_list);
        return $this;
    }
}