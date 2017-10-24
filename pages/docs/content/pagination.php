<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Pagination");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Pagination");
$page->setSort(5);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();