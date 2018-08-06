<?php

    require_once '../phpqrcode.php';

    $text = 'https://www.litblc.com';
    $level = 1;
    $size = 10;
    $margin = 1;
    $logo = './logo.png';
    $saveName = false;

    /**
     * 生成中间带有logo的二维码
     * @Author huaixiu.zhen
     * http://litblc.com
     * @param string $text     要生成的url
     * @param int $level       容错率 推荐使用 >= 1 的值
     * @param int $size        控制生成图片的大小
     * @param int $margin      控制生成二维码的空白区域大小
     * @param string $logo     中间要加的logo的物理地址
     * @param string $saveName 是否保存，可以输入路径和文件名
     */
    QRcode::addLogo($text, $level, $size, $margin, $logo, $saveName);




