# VideoConvertThumb
一套PHP程序，通过调用ffmpeg生成视频缩略图，读取本地文件，数组转换json，通过ajax与前端瀑布流交互，最终通过超酷播放器预览。

# zh-CN
**使用方法**：
<br>1.下载ffmpeg，并添加环境变量
<br>2.下载本程序，并添加两个文件夹，分别为thumb(存放预览图)、video(存放视频)
<br>**注意事项**：
<br>1.首次运行convert.php，自动生成预览图，不要关闭网页，否则会中止操作
<br>2.播放视频(允许跨站)：play.php?v_url=[视频地址]&img_url=[封面地址/预览图]
# en-US
**Usage Method**:
<br>1.Download ffmpeg and add environment variables
<br>2.Download the program and add two folders, thumb (store preview) and video (store video)
**Matters Needing Attention**:
<br>1.Run convert.php for the first time to generate a preview automatically. Do not close the web page, or the operation will be aborted.
<br>2.Play video (Cross Station allowed): play.php? V_url = [video address] & img_url = [cover address / preview image]
