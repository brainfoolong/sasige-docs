<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("For the advanced");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("For the advanced");
$page->setSort(4);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();