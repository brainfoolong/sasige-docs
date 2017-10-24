<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Updates");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Updates");
$page->setSort(7);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();