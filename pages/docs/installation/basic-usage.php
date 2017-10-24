<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Basic usage");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Basic usage");
$page->setSort(3);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();