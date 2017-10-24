<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Quick Start Linux");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Quick Start on Linux");
$page->setSort(1);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();