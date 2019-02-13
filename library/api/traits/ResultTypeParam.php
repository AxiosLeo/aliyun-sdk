<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:54
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait ResultTypeParam.
 *
 * @method getResultType()
 */
trait ResultTypeParam
{
    /**
     * @param $result_type
     *
     * @return $this
     */
    public function setResultType($result_type)
    {
        $array = [
            'JSON', 'TEXT', 'BINARY', 'XML', 'HTML',
        ];

        if (is_numeric($result_type)) {
            $result_type = isset($array[$result_type]) ?? $result_type;
        }

        $this->setParam('ResultType', $result_type);

        return $this;
    }
}
