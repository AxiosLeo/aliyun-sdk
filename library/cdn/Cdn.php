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
use aliyun\sdk\cdn\request\DomainConfig\SetErrorPageConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetFileCacheExpiredConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetForceRedirectConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetIgnoreQueryStringConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetOptimizeConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetPageCompressConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetRangeConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetRefererConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetSourceHostConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetVideoSeekConfig;
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
use aliyun\sdk\core\help\Parse;

/**
 * Class Cdn
 * @package aliyun\sdk\cdn
 */
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
        return (new OpenCdnService())->setInternetChargeType($InternetChargeType);
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
        return (new ModifyCdnService())->setInternetChargeType($InternetChargeType);
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
        return (new DescribeCdnDomainDetail())->setDomainName($domain_name);
    }

    /**
     * 添加加速域名
     * https://help.aliyun.com/document_detail/27161.html
     * @param $domain_name
     * @param $cdn_type
     * @return AddCdnDomain
     */
    public static function AddCdnDomain($domain_name,$cdn_type){
        return (new AddCdnDomain())->setDomainName($domain_name)->setCdnType($cdn_type);
    }

    /**
     * 启用已停用的域名
     * https://help.aliyun.com/document_detail/27165.html
     * @param $domain_name
     * @return StartCdnDomain
     */
    public static function StartCdnDomain($domain_name){
        return (new StartCdnDomain())->setDomainName($domain_name);
    }

    /**
     * 停用某加速域名
     * https://help.aliyun.com/document_detail/27166.html
     * @param $domain_name
     * @return StopCdnDomain
     */
    public static function StopCdnDomain($domain_name){
        return (new StopCdnDomain())->setDomainName($domain_name);
    }

    /**
     * 删除加速域名
     * https://help.aliyun.com/document_detail/27167.html
     * @param $domain_name
     * @return DeleteCdnDomain
     */
    public static function DeleteCdnDomain($domain_name){
        return (new DeleteCdnDomain())->setDomainName($domain_name);
    }

    /**
     * 根据源站查域名
     * https://help.aliyun.com/document_detail/50453.html
     * @param $sources
     * @return DescribeDomainsBySource
     */
    public static function DescribeDomainsBySource($sources){
        return (new DescribeDomainsBySource())->setSources($sources);
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

    /**
     * 设置页面优化
     * 文档中写的是DomaiName ，是写错了。实际服务端接收的还是DomainName
     * https://help.aliyun.com/document_detail/27170.html
     * @param $domain_name
     * @param $enable
     * @return SetOptimizeConfig
     */
    public static function SetOptimizeConfig($domain_name, $enable){
        $enable = Parse::parseEnableParam($enable);
        return (new SetOptimizeConfig())->setDomainName($domain_name)->setEnable($enable);
    }

    /**
     * 设置智能压缩
     * 文档依然后错误
     * https://help.aliyun.com/document_detail/27171.html
     * @param $domain_name
     * @param $enable
     * @return SetPageCompressConfig
     */
    public static function SetPageCompressConfig($domain_name,$enable){
        $enable = Parse::parseEnableParam($enable);
        return (new SetPageCompressConfig())->setDomainName($domain_name)->setEnable($enable);
    }

    /**
     * 设置过滤参数
     * https://help.aliyun.com/document_detail/27172.html
     * @param $domain_name
     * @param $enable
     * @return SetIgnoreQueryStringConfig
     */
    public static function SetIgnoreQueryStringConfig($domain_name, $enable){
        $enable = Parse::parseEnableParam($enable);
        return (new SetIgnoreQueryStringConfig())->setDomainName($domain_name)->setEnable($enable);
    }

    /**
     * 设置Range回源
     * https://help.aliyun.com/document_detail/27173.html
     * @param $domain_name
     * @param $enable
     * @return SetRangeConfig
     */
    public static function SetRangeConfig($domain_name, $enable){
        $enable = Parse::parseEnableParam($enable);
        return (new SetRangeConfig())->setDomainName($domain_name)->setEnable($enable);
    }

    /**
     * 设置拖拽播放
     * https://help.aliyun.com/document_detail/27174.html
     * @param $domain_name
     * @param $enable
     * @return SetVideoSeekConfig
     */
    public static function SetVideoSeekConfig($domain_name, $enable){
        $enable = Parse::parseEnableParam($enable);
        return (new SetVideoSeekConfig())->setDomainName($domain_name)->setEnable($enable);
    }

    /**
     * 设置回源HOST
     * https://help.aliyun.com/document_detail/27175.html
     * @param $domain_name
     * @param $back_src_domain
     * @return SetSourceHostConfig
     */
    public static function SetSourceHostConfig($domain_name, $back_src_domain){
        return (new SetSourceHostConfig())->setDomainName($domain_name)->setBackSrcDomain($back_src_domain);
    }

    /**
     * 设置404页面
     * https://help.aliyun.com/document_detail/27176.html
     * @param $domain_name
     * @param $page_type
     * @return SetErrorPageConfig
     */
    public static function SetErrorPageConfig($domain_name, $page_type){
        return (new SetErrorPageConfig())->setDomainName($domain_name)->setPageType($page_type);
    }

    /**
     * 设置强制跳转
     * https://help.aliyun.com/document_detail/27177.html
     * @param $domain_name
     * @param $redirect_type
     * @return SetForceRedirectConfig
     */
    public static function SetForceRedirectConfig($domain_name, $redirect_type){
        return (new SetForceRedirectConfig())->setDomainName($domain_name)->setRedirectType($redirect_type);
    }

    /**
     * 设置refer防盗链
     * https://help.aliyun.com/document_detail/27178.html
     * @param string $domain_name
     * @param string $refer_type  block黑名单;allow白名单
     * @return SetRefererConfig
     */
    public static function SetRefererConfig($domain_name, $refer_type)
    {
        return (new SetRefererConfig())->setDomainName($domain_name)->setReferType($refer_type);
    }

    /**
     * 设置文件类型缓存策略
     * https://help.aliyun.com/document_detail/27179.html
     * @param $domain_name
     * @param $cache_content
     * @param $ttl
     * @return SetFileCacheExpiredConfig
     */
    public static function SetFileCacheExpiredConfig($domain_name, $cache_content, $ttl){
        return (new SetFileCacheExpiredConfig())->setDomainName($domain_name)->setCacheContent($cache_content)->setTTL($ttl);
    }
}