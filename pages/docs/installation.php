<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Installation");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Installation");
$page->setSort(1);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();