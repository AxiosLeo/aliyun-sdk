<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:15
 */
namespace aliyun\sdk\cdn;

use aliyun\sdk\cdn\request\DomainConfig\DescribeDomainConfigs;
use aliyun\sdk\cdn\request\DomainOperation\AddCdnDomain;
use aliyun\sdk\cdn\request\DomainOperation\DeleteCdnDomain;
use aliyun\sdk\cdn\request\DomainOperation\DescribeCdnDomainDetail;
use aliyun\sdk\cdn\request\DomainOperation\DescribeDomainsBySource;
use aliyun\sdk\cdn\request\DomainOperation\DescribeUserDomains;
use aliyun\sdk\cdn\request\DomainOperation\StartCdnDomain;
use aliyun\sdk\cdn\request\DomainOperation\StopCdnDomain;
use aliyun\sdk\cdn\request\Service\DescribeCdnService;
use aliyun\sdk\cdn\request\Service\ModifyCdnService;
use aliyun\sdk\cdn\request\Service\OpenCdnService;

class Cdn
{
    /********************************** Service **************************************************/

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

    /********************************** DomainOperation **************************************************/

    /**
     * 查询域名列表
     * API Document : https://help.aliyun.com/document_detail/27162.html
     * @return DescribeUserDomains
     */
    public static function DescribeUserDomains(){
        return new DescribeUserDomains();
    }

    /**
     * 查询域名信息
     * API Document : https://help.aliyun.com/document_detail/27163.html
     * @param $domain_name
     * @return DescribeCdnDomainDetail
     */
    public static function DescribeCdnDomainDetail($domain_name){
        $request = new DescribeCdnDomainDetail();
        return $request->setDomainName($domain_name);
    }

    /**
     * 添加加速域名
     * https://help.aliyun.com/document_detail/27161.html
     * @param $domain_name
     * @param $cdn_type
     * @return AddCdnDomain
     */
    public static function AddCdnDomain($domain_name,$cdn_type){
        $request = new AddCdnDomain();
        return $request->setDomainName($domain_name)->setCdnType($cdn_type);
    }

    /**
     * 启用已停用的域名
     * https://help.aliyun.com/document_detail/27165.html
     * @param $domain_name
     * @return StartCdnDomain
     */
    public static function StartCdnDomain($domain_name){
        $request = new StartCdnDomain();
        return $request->setDomainName($domain_name);
    }

    /**
     * 停用某加速域名
     * https://help.aliyun.com/document_detail/27166.html
     * @param $domain_name
     * @return StopCdnDomain
     */
    public static function StopCdnDomain($domain_name){
        $request = new StopCdnDomain();
        return $request->setDomainName($domain_name);
    }

    /**
     * 删除加速域名
     * https://help.aliyun.com/document_detail/27167.html
     * @param $domain_name
     * @return DeleteCdnDomain
     */
    public static function DeleteCdnDomain($domain_name){
        $request = new DeleteCdnDomain();
        return $request->setDomainName($domain_name);
    }

    /**
     * 根据源站查域名
     * https://help.aliyun.com/document_detail/50453.html
     * @param $sources
     * @return DescribeDomainsBySource
     */
    public static function DescribeDomainsBySource($sources){
        $request = new DescribeDomainsBySource();
        return $request->setSources($sources);
    }

    /********************************** DomainConfig **************************************************/

    /**
     * 查询域名配置
     * https://help.aliyun.com/document_detail/27169.html
     * @param $domain_name
     * @return DescribeDomainConfigs
     */
    public static function DescribeDomainConfigs($domain_name){
        return (new DescribeDomainConfigs())->setDomainName($domain_name);
    }
}