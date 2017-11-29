<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Changelog");
$page->setDate("now");
$page->setLabel("Changelog");
$page->setSort(3);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();