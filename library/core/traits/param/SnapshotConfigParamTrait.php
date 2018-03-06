<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:47
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait SnapshotConfig
 * @package aliyun\sdk\core\traits\param
 */
trait SnapshotConfigParamTrait
{
    /**
     * @param array $SnapshotConfig
     * @return $this
     */
    public function setSnapshotConfig($SnapshotConfig){
        $this->setParam("SnapshotConfig",\aliyun\sdk\core\help\Parse::arrayToJson($SnapshotConfig));
        return $this;
    }

    /**
     * @return array
     */
    public function getSnapshotConfig(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("SnapshotConfig"));
    }
}