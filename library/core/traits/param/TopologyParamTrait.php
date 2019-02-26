<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:02
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait Topology
 * @package aliyun\sdk\core\traits\param
 */
trait TopologyParamTrait
{
    /**
     * @param array $topology
     * @return $this
     */
    public function setTopology($topology){
        $this->setParam("Topology",\aliyun\sdk\core\help\Parse::arrayToJson($topology));
        return $this;
    }

    /**
     * @return array
     */
    public function getTopology(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("Topology"));
    }
}