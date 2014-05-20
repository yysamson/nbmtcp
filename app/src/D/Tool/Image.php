<?php
/**
 * User: dongww
 * Date: 14-1-16
 * Time: 上午9:28
 */

namespace D\Tool;

/**
 * 处理图片上传的类
 *
 * Class Image
 * @package D\Tool
 */
class Image
{
    protected $uploadPath;

    public function __construct($uploadPath)
    {
        $this->uploadPath = $uploadPath;
    }

    /**
     * 上传一张图片
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     * @return string
     */
    public function uploadFile($file)
    {
        $toPath   = $this->uploadPath;
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($toPath, $filename);

        return $filename;
    }

    /**
     * 上传多张图片
     *
     * @param $files
     * @return array
     */
    public function uploadFiles($files)
    {
        $fileNames = array();
        foreach ($files as $file) {
            if ($file) {
                $fileNames[] = $this->uploadFile($file);
            } else {
                continue;
            }

        }

        //文件名数组
        return $fileNames;
    }

    /**
     * 获取图片的文件路径
     *
     * @param $fileName
     * @return string
     */
    public function getPath($fileName)
    {
        return realpath($this->uploadPath . $fileName);
    }

    /**
     * 获取图片链接
     *
     * @param $fileName
     * @param string $pre
     * @return string
     */
    public function getUrl($fileName, $pre = '')
    {
        return '/upload/' . $pre . $fileName;
    }
} 