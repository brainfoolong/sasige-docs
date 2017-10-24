<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Package.json");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Package.json");
$page->setSort(2);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();