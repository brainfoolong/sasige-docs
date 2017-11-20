<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Documentation");
$page->setDate("now");
$page->setLabel("Documentation");
$page->setSort(2);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();