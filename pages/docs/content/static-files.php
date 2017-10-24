<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Static files / Media");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Static files / Media");
$page->setSort(3);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();