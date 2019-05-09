<?php
/**
 * @author yixzm
 * 
 * @mail dream@yixzm.cn
 * 
 * @site http://www.yixzm.cn
 * 
 * 开源版演示地址：
 * 	http://www.yixzm.cn/opensource/nine_style_people/public/index.php
 * 
 * 更新日志：
 * 
 * 2019-5-9 开源版裁剪
 */


 /**
  * 路由
  * 
  * 只有这么三个函数，就不用自动加载和call_user_func了。
  */
if (isset($_GET['api'])) {
    require_once(__DIR__."/nine_style/api/q_144.php");
    // echo file_get_contents(__DIR__."/nine_style/api/q_144.php");
    $api = $_GET['api'];
    switch ($api) {
        case "get_9style_people_question":
        echo get_9style_people_question();
        case "get_9style_people_info":
        echo get_9style_people_info();
        case "post_9style_people_result":
        echo post_9style_people_result();
        default:
        return null;
    }
} else {
    // var_dump(scandir(__DIR__."/nine_style/view/"));
    // 请求入参为空，则加载测试页面
    require_once(__DIR__."/nine_style/view/q_144.html");
}