<?php
/**
 * Created by PhpStorm.
 * User: jp-1
 * Date: 2015/8/21
 * Time: 10:03
 */
header("Content-type: text/html; charset=utf-8");
//遍历文件夹里面的所有文件
function getFiles($path)
{
    foreach (glob($path) as $subPath) {
        if (is_dir($subPath)) {
            getfiles($subPath . '/*');
        } else {
            echo $subPath . '<br />';
        }
    }
}

//将中英文字符串分割成单个字或字母组成的数组
 preg_match_all("/./u", 'a在这里填入需要分割的字符串b', $arr);
 $singleWordArr=$arr[0];
var_dump($singleWordArr);

/**
 * 字符串命名风格转换
 * type 0 将Java风格转换为C的风格 1 将C风格转换为Java的风格
 * @param string $name 字符串
 * @param integer $type 转换类型
 * @return string
 */
function parse_name($name, $type=0) {
    if ($type) {
        return ucfirst(preg_replace_callback("/_([a-zA-Z])/", function($matches){
            return strtoupper($matches[1]);
        }, $name));
    } else {
        return strtolower(trim(preg_replace("/[A-Z]/", "_$0", $name), "_"));
    }
}
/*echo parse_name('hello_word_morning',1);
echo parse_name('HelloWordMorning',0);*/