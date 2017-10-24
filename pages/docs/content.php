<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Your content");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Your content");
$page->setSort(2);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();