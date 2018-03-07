<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 17:18
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait SpotStrategyParam
 * @package aliyun\sdk\ecs\traits
 */
trait SpotStrategyParam
{
    private $SpotStrategySelect = [
        "NoSpot","SpotWithPriceLimit","SpotAsPriceGo"
    ];
    public function setSpotStrategy($SpotStrategy){
        if(is_numeric($SpotStrategy) && isset($this->SpotStrategySelect[$SpotStrategy])){
            $SpotStrategy = $this->SpotStrategySelect[$SpotStrategy];
        }

        $this->setParam("SpotStrategy",$SpotStrategy);
        return $this;
    }

    public function getSpotStrategy(){
        return $this->params("SpotStrategy");
    }
}