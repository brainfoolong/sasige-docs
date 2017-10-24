<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Themes - The design part");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Themes - The design part");
$page->setSort(3);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();