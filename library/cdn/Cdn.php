<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:15
 */
namespace aliyun\sdk\cdn;

use aliyun\sdk\cdn\request\data\DescribeDomainBpsData;
use aliyun\sdk\cdn\request\data\DescribeDomainFlowData;
use aliyun\sdk\cdn\request\DomainConfig\DeleteCacheExpiredConfig;
use aliyun\sdk\cdn\request\DomainConfig\DeleteHttpHeaderConfig;
use aliyun\sdk\cdn\request\DomainConfig\DescribeDomainConfigs;
use aliyun\sdk\cdn\request\DomainConfig\ModifyFileCacheExpiredConfig;
use aliyun\sdk\cdn\request\DomainConfig\ModifyHttpHeaderConfig;
use aliyun\sdk\cdn\request\DomainConfig\ModifyPathCacheExpiredConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetDomainServerCertificate;
use aliyun\sdk\cdn\request\DomainConfig\SetErrorPageConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetFileCacheExpiredConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetForceRedirectConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetHttpHeaderConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetIgnoreQueryStringConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetOptimizeConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetPageCompressConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetPathCacheExpiredConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetRangeConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetRefererConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetReqAuthConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetSourceHostConfig;
use aliyun\sdk\cdn\request\DomainConfig\SetVideoSeekConfig;
use aliyun\sdk\cdn\request\DomainOperation\AddCdnDomain;
use aliyun\sdk\cdn\request\DomainOperation\DeleteCdnDomain;
use aliyun\sdk\cdn\request\DomainOperation\DescribeCdnDomainDetail;
use aliyun\sdk\cdn\request\DomainOperation\DescribeDomainsBySource;
use aliyun\sdk\cdn\request\DomainOperation\DescribeUserDomains;
use aliyun\sdk\cdn\request\DomainOperation\StartCdnDomain;
use aliyun\sdk\cdn\request\DomainOperation\StopCdnDomain;
use aliyun\sdk\cdn\request\ObjectCache\DescribeRefreshQuota;
use aliyun\sdk\cdn\request\ObjectCache\DescribeRefreshTasks;
use aliyun\sdk\cdn\request\ObjectCache\PushObjectCache;
use aliyun\sdk\cdn\request\ObjectCache\RefreshObjectCaches;
use aliyun\sdk\cdn\request\Service\DescribeCdnService;
use aliyun\sdk\cdn\request\Service\ModifyCdnService;
use aliyun\sdk\cdn\request\Service\OpenCdnService;
use aliyun\sdk\core\help\Parse;

/**
 * Class Cdn
 * API Document : https://help.aliyun.com/document_detail/27155.html
 * @package aliyun\sdk\cdn
 */
class Cdn
{
    /********************************** Service **************************************************/

    /**
     * 开通CDN
     * @param $InternetChargeType
     * @return OpenCdnService
     */
    public static function OpenCdnService($InternetChargeType){
        return (new OpenCdnService())->setInternetChargeType($InternetChargeType);
    }

    /**
     * 查询CDN状态
     * @return DescribeCdnService
     */
    public static function DescribeCdnService(){
        return new DescribeCdnService();
    }

    /**
     * 变更计费类型
     * @param $InternetChargeType
     * @return ModifyCdnService
     */
    public static function ModifyCdnService($InternetChargeType){
        return (new ModifyCdnService())->setInternetChargeType($InternetChargeType);
    }

    /********************************** DomainOperation **************************************************/

    /**
     * 查询域名列表
     * @return DescribeUserDomains
     */
    public static function DescribeUserDomains(){
        return new DescribeUserDomains();
    }

    /**
     * 查询域名信息
     * @param $domain_name
     * @return DescribeCdnDomainDetail
     */
    public static function DescribeCdnDomainDetail($domain_name){
        return (new DescribeCdnDomainDetail())->setDomainName($domain_name);
    }

    /**
     * 添加加速域名
     * @param $domain_name
     * @param $cdn_type
     * @return AddCdnDomain
     */
    public static function AddCdnDomain($domain_name,$cdn_type){
        return (new AddCdnDomain())->setDomainName($domain_name)->setCdnType($cdn_type);
    }

    /**
     * 启用已停用的域名
     * @param $domain_name
     * @return StartCdnDomain
     */
    public static function StartCdnDomain($domain_name){
        return (new StartCdnDomain())->setDomainName($domain_name);
    }

    /**
     * 停用某加速域名
     * @param $domain_name
     * @return StopCdnDomain
     */
    public static function StopCdnDomain($domain_name){
        return (new StopCdnDomain())->setDomainName($domain_name);
    }

    /**
     * 删除加速域名
     * @param $domain_name
     * @return DeleteCdnDomain
     */
    public static function DeleteCdnDomain($domain_name){
        return (new DeleteCdnDomain())->setDomainName($domain_name);
    }

    /**
     * 根据源站查域名
     * @param $sources
     * @return DescribeDomainsBySource
     */
    public static function DescribeDomainsBySource($sources){
        return (new DescribeDomainsBySource())->setSources($sources);
    }

    /********************************** DomainConfig **************************************************/

    /**
     * 查询域名配置
     * @param $domain_name
     * @return DescribeDomainConfigs
     */
    public static function DescribeDomainConfigs($domain_name){
        return (new DescribeDomainConfigs())->setDomainName($domain_name);
    }

    /**
     * 设置页面优化
     * 文档中写的是DomaiName ，是写错了。实际服务端接收的还是DomainName
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
     * @param $domain_name
     * @param $back_src_domain
     * @return SetSourceHostConfig
     */
    public static function SetSourceHostConfig($domain_name, $back_src_domain){
        return (new SetSourceHostConfig())->setDomainName($domain_name)->setBackSrcDomain($back_src_domain);
    }

    /**
     * 设置404页面
     * @param $domain_name
     * @param $page_type
     * @return SetErrorPageConfig
     */
    public static function SetErrorPageConfig($domain_name, $page_type){
        return (new SetErrorPageConfig())->setDomainName($domain_name)->setPageType($page_type);
    }

    /**
     * 设置强制跳转
     * @param $domain_name
     * @param $redirect_type
     * @return SetForceRedirectConfig
     */
    public static function SetForceRedirectConfig($domain_name, $redirect_type){
        return (new SetForceRedirectConfig())->setDomainName($domain_name)->setRedirectType($redirect_type);
    }

    /**
     * 设置refer防盗链
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
     * @param $domain_name
     * @param $cache_content
     * @param $ttl
     * @return SetFileCacheExpiredConfig
     */
    public static function SetFileCacheExpiredConfig($domain_name, $cache_content, $ttl){
        return (new SetFileCacheExpiredConfig())->setDomainName($domain_name)->setCacheContent($cache_content)->setTTL($ttl);
    }

    /**
     * 设置路径缓存策略
     * @param $domain_name
     * @param $cache_content
     * @param $ttl
     * @return SetPathCacheExpiredConfig
     */
    public static function SetPathCacheExpiredConfig($domain_name, $cache_content, $ttl){
        return (new SetPathCacheExpiredConfig())->setDomainName($domain_name)->setCacheContent($cache_content)->setTTL($ttl);
    }

    /**
     * 修改文件类型缓存策略
     * @param $domain_name
     * @param $config_id
     * @param $cache_content
     * @param $ttl
     * @return ModifyFileCacheExpiredConfig
     */
    public static function ModifyFileCacheExpiredConfig($domain_name, $config_id , $cache_content , $ttl){
        return (new ModifyFileCacheExpiredConfig())->setDomainName($domain_name)->setConfigID($config_id)->setCacheContent($cache_content)->setTTL($ttl);
    }

    /**
     * 修改路径缓存策略
     * @param $domain_name
     * @param $config_id
     * @param $cache_content
     * @param $ttl
     * @return ModifyPathCacheExpiredConfig
     */
    public static function ModifyPathCacheExpiredConfig($domain_name, $config_id , $cache_content , $ttl){
        return (new ModifyPathCacheExpiredConfig())->setDomainName($domain_name)->setConfigID($config_id)->setCacheContent($cache_content)->setTTL($ttl);
    }

    /**
     * 删除缓存策略
     * @param $domain_name
     * @param $cache_type
     * @param $config_id
     * @return DeleteCacheExpiredConfig
     */
    public static function DeleteCacheExpiredConfig($domain_name, $cache_type, $config_id){
        return (new DeleteCacheExpiredConfig())->setDomainName($domain_name)->setCacheType($cache_type)->setConfigID($config_id);
    }

    /**
     * 设置鉴权
     * @param $domain_name
     * @param $auth_type
     * @return SetReqAuthConfig
     */
    public static function SetReqAuthConfig($domain_name, $auth_type){
        return (new SetReqAuthConfig())->setDomainName($domain_name)->setAuthType($auth_type);
    }

    /**
     * 设置HTTP头信息
     * @param $domain_name
     * @param $header_key
     * @param $header_value
     * @return SetHttpHeaderConfig
     */
    public static function SetHttpHeaderConfig($domain_name, $header_key, $header_value){
        return (new SetHttpHeaderConfig())->setDomainName($domain_name)->setHeaderKey($header_key)->setHeaderValue($header_value);
    }

    /**
     * 修改HTTP头信息
     * @param $domain_name
     * @param $header_key
     * @param $header_value
     * @param $config_id
     * @return ModifyHttpHeaderConfig
     */
    public static function ModifyHttpHeaderConfig($domain_name, $header_key, $header_value, $config_id){
        return (new ModifyHttpHeaderConfig())->setDomainName($domain_name)->setHeaderKey($header_key)->setHeaderValue($header_value)->setConfigID($config_id);
    }

    /**
     * 删除HTTP头信息
     * @param $domain_name
     * @param $config_id
     * @return DeleteHttpHeaderConfig
     */
    public static function DeleteHttpHeaderConfig($domain_name, $config_id){
        return (new DeleteHttpHeaderConfig())->setDomainName($domain_name)->setConfigID($config_id);
    }

    /**
     * 设置证书
     * @param $domain_name
     * @param $cert_name
     * @param $server_certificate_status
     * @return SetDomainServerCertificate
     */
    public static function SetDomainServerCertificate($domain_name, $cert_name, $server_certificate_status){
        $server_certificate_status = Parse::parseEnableParam($server_certificate_status);
        return (new SetDomainServerCertificate())->setDomainName($domain_name)->setCertName($cert_name)->setServerCertificateStatus($server_certificate_status);
    }

    /********************************** ObjectCache **************************************************/

    /**
     * 刷新缓存
     * @param $object_path
     * @return RefreshObjectCaches
     */
    public static function RefreshObjectCaches($object_path){
        return (new RefreshObjectCaches())->setObjectPath($object_path);
    }

    /**
     * 预热
     * @param $object_path
     * @return PushObjectCache
     */
    public static function PushObjectCache($object_path){
        return (new PushObjectCache())->setObjectPath($object_path);
    }

    /**
     * 查询刷新、预热状态
     * @return DescribeRefreshTasks
     */
    public static function DescribeRefreshTasks(){
        return (new DescribeRefreshTasks());
    }

    /**
     * 查询刷新预热次数限制和余量
     * @return DescribeRefreshQuota
     */
    public static function DescribeRefreshQuota(){
        return (new DescribeRefreshQuota());
    }

    /********************************** Data **************************************************/

    /**
     * 查询域名的带宽监测数据
     * @return DescribeDomainBpsData
     */
    public static function DescribeDomainBpsData(){
        return (new DescribeDomainBpsData());
    }

    /**
     * 查询流量监控数据
     * @return DescribeDomainFlowData
     */
    public static function DescribeDomainFlowData(){
        return (new DescribeDomainFlowData());
    }
}