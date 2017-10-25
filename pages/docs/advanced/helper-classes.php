<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Continuous Integration");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Continuous Integration");
$page->setSort(2);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();