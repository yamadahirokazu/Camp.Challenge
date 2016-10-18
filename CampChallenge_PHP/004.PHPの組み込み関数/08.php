<?php

echo strstr('kurona201@gmail.com','@');

//strstrは指定した文字数以降の文字を表示
//echo strlen('山田広和').'<br>';//一文字３バイト英語用
//echo mb_strlen('山田広和');//日本語用、マルチバイト、ストレングス
//漢字も３バイトのようす。
//英語用と日本語用のバイト数は違うようだ。