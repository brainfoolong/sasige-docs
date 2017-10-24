<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Directory structure");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Directory structure");
$page->setSort(4);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();