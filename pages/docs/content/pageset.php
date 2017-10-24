<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Pageset");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Pageset");
$page->setSort(4);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();