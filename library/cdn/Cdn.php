<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:15
 */
namespace aliyun\sdk\cdn;

use aliyun\sdk\cdn\request\Service\DescribeCdnService;
use aliyun\sdk\cdn\request\Service\ModifyCdnService;
use aliyun\sdk\cdn\request\Service\OpenCdnService;

class Cdn
{
    /**
     * 开通CDN
     * API Document : https://help.aliyun.com/document_detail/27157.html
     * @param $InternetChargeType
     * @return OpenCdnService
     */
    public static function OpenCdnService($InternetChargeType){
        $request = new OpenCdnService();
        return $request->setInternetChargeType($InternetChargeType);
    }

    /**
     * 查询CDN状态
     * API Document : https://help.aliyun.com/document_detail/27158.html
     * @return DescribeCdnService
     */
    public static function DescribeCdnService(){
        return new DescribeCdnService();
    }

    /**
     * 变更计费类型
     * API Document : https://help.aliyun.com/document_detail/27159.html
     * @param $InternetChargeType
     * @return ModifyCdnService
     */
    public static function ModifyCdnService($InternetChargeType){
        $request = new ModifyCdnService();
        return $request->setInternetChargeType($InternetChargeType);
    }
}