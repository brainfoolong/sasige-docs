<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Basics");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Basics");
$page->setSort(1);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();