<?php

/**
 * 九型人格测试（144题评定版开源代码）
 * 
 * 【版权声明】
 * 禁止用于商业用途，如需作商业用途，请务必与素材资源的原作者联系，否则责任自负。
 * 
 * @author: yixzm
 * @mail:   dream@yixzm.cn
 * @site:   http://www.yixzm.cn
 * @blog:
 * 
 * 源码讲解：https://blog.csdn.net/dreamstone_xiaoqw/article/details/90046498
 * 原版说明：https://blog.csdn.net/dreamstone_xiaoqw/article/details/83903609
 */

if (isset($_GET['api'])) {
    require_once(__DIR__ . "/nine_style/api/q_144.php");
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
    require_once(__DIR__ . "/nine_style/view/q_144.html");
}
