<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Quick Start Windows");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Quick Start on Windows");
$page->setSort(2);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();