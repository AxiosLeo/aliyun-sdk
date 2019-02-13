<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:15
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait InternetChargeTypeParam.
 */
trait InternetChargeTypeParam
{
    public function setInternetChargeType($internet_charge_type)
    {
        $option = [
            'PayByBandwidth', 'PayByTraffic',
        ];

        if (!in_array($internet_charge_type, $option)) {
            $internet_charge_type = 'PayByTraffic';
        }
        $this->setParam('InternetChargeType', $internet_charge_type);

        return $this;
    }
}
