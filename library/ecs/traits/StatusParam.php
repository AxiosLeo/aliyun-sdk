<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 17:32
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Class StatusParam.
 */
trait StatusParam
{
    public function setStatus($status)
    {
        $options = [
            'Creating', 'Available', 'UnAvailable', 'CreateFailed',
        ];

        if (is_numeric($status)) {
            $status = isset($options[$status]) ? $options[$status] : 'Available';
        }

        if (!in_array($status, $options)) {
            $status = 'Available';
        }

        $this->setParam('Status', $status);

        return $this;
    }
}
