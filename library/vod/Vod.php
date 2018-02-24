<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/7 16:59
 */

namespace aliyun\sdk\vod;

use aliyun\sdk\vod\request\Category\AddCategory;
use aliyun\sdk\vod\request\Category\DeleteCategory;
use aliyun\sdk\vod\request\Category\GetCategories;
use aliyun\sdk\vod\request\Category\UpdateCategory;
use aliyun\sdk\vod\request\Video\DeleteStream;
use aliyun\sdk\vod\request\Video\DeleteVideo;
use aliyun\sdk\vod\request\Video\GetMezzanineInfo;
use aliyun\sdk\vod\request\Video\GetPlayInfo;
use aliyun\sdk\vod\request\Video\GetVideoInfo;
use aliyun\sdk\vod\request\Video\GetVideoList;
use aliyun\sdk\vod\request\Video\GetVideoPlayAuth;
use aliyun\sdk\vod\request\Video\ListLiveRecordVideo;
use aliyun\sdk\vod\request\Video\UpdateVideoInfo;
use aliyun\sdk\vod\request\VideoUpload\CreateUploadVideo;
use aliyun\sdk\vod\request\VideoUpload\CreateUploadImage;
use aliyun\sdk\vod\request\VideoUpload\RefreshUploadVideo;

class Vod
{
    /********************************** VideoUpload **************************************************/

    /**
     * 获取视频上传地址和凭证
     * API Document : https://help.aliyun.com/document_detail/55407.html
     * @param $title
     * @param $file_name
     * @return CreateUploadVideo
     */
    public static function CreateUploadVideo($title, $file_name){
        $request = new CreateUploadVideo();
        return $request->setTitle($title)->setFileName($file_name);
    }

    /**
     * 刷新视频上传凭证
     * API Document : https://help.aliyun.com/document_detail/55408.html
     * @param $video_id
     * @return RefreshUploadVideo
     */
    public static function RefreshUploadVideo($video_id){
        $request = new RefreshUploadVideo();
        return $request->setVideoId($video_id);
    }

    /**
     * 获取图片上传地址和凭证
     * API Document : https://help.aliyun.com/document_detail/55619.html
     * @param $image_type
     * @return CreateUploadImage
     */
    public static function CreateUploadImage($image_type){
        $request = new CreateUploadImage();
        return $request->setImageType($image_type);
    }

    /********************************** Video **************************************************/

    /**
     * 获取视频播放地址
     * API Document : https://help.aliyun.com/document_detail/56124.html
     * @param $video_id
     * @return GetPlayInfo
     */
    public static function GetPlayInfo($video_id){
        $request = new GetPlayInfo();
        return $request->setVideoId($video_id);
    }

    /**
     * 获取视频播放凭证
     * API Document : https://help.aliyun.com/document_detail/52833.html
     * @param $video_id
     * @return GetVideoPlayAuth
     */
    public static function GetVideoPlayAuth($video_id){
        $request = new GetVideoPlayAuth();
        return $request->setVideoId($video_id);
    }

    /**
     * 获取视频信息
     * API Document : https://help.aliyun.com/document_detail/52835.html
     * @param $video_id
     * @return GetVideoInfo
     */
    public static function GetVideoInfo($video_id){
        $request = new GetVideoInfo();
        return $request->setVideoId($video_id);
    }

    /**
     * 修改视频信息
     * API Document : https://help.aliyun.com/document_detail/52836.html
     * @param $video_id
     * @return UpdateVideoInfo
     */
    public static function UpdateVideoInfo($video_id){
        $request = new UpdateVideoInfo();
        return $request->setVideoId($video_id);
    }

    /**
     * 删除视频
     * API Document : https://help.aliyun.com/document_detail/52837.html?
     * @param $video_ids
     * @return DeleteVideo
     */
    public static function DeleteVideo($video_ids){
        $request = new DeleteVideo();
        return $request->setVideoIds($video_ids);
    }

    /**
     * 获取视频信息列表
     * API Document : https://help.aliyun.com/document_detail/52838.html
     * @return GetVideoList
     */
    public static function GetVideoList(){
        return new GetVideoList();
    }

    /**
     * 删除媒体流
     * API Document : https://help.aliyun.com/document_detail/62130.html
     * @param $video_id
     * @param $job_ids
     * @return DeleteStream
     */
    public static function DeleteStream($video_id, $job_ids){
        $request = new DeleteStream();
        return $request->setVideoId($video_id)->setJobIds($job_ids);
    }

    /**
     * 获取源文件地址
     * API Document : https://help.aliyun.com/document_detail/59624.html
     * @param $video_id
     * @return GetMezzanineInfo
     */
    public static function GetMezzanineInfo($video_id){
        $request = new GetMezzanineInfo();
        return $request->setVideoId($video_id);
    }

    /**
     * 获取直转点视频列表
     * API Document : https://help.aliyun.com/document_detail/64050.html
     * @return ListLiveRecordVideo
     */
    public static function ListLiveRecordVideo(){
        return new ListLiveRecordVideo();
    }

    /********************************** Category **************************************************/

    /**
     * 创建分类
     * API Document : https://help.aliyun.com/document_detail/56401.html
     * @param $cate_name
     * @return AddCategory
     */
    public static function AddCategory($cate_name){
        $request = new AddCategory();
        return $request->setCateName($cate_name);
    }

    /**
     * 修改分类
     * API Document : https://help.aliyun.com/document_detail/56403.html
     * @param $cate_id
     * @param $cate_name
     * @return UpdateCategory
     */
    public static function UpdateCategory($cate_id, $cate_name){
        $request = new UpdateCategory();
        return $request->setCateId($cate_id)->setCateName($cate_name);
    }

    /**
     * 删除分类
     * API Document : https://help.aliyun.com/document_detail/56404.html
     * @param $cate_id
     * @return DeleteCategory
     */
    public static function DeleteCategory($cate_id){
        $request = new DeleteCategory();
        return $request->setCateId($cate_id);
    }

    /**
     * 获取分类及其子分类
     * API Document : https://help.aliyun.com/document_detail/56406.html
     * @return GetCategories
     */
    public static function GetCategories(){
        $GetCategories = new GetCategories();
        return $GetCategories;
    }
}