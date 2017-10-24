<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Configuration");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Configuration");
$page->setSort(6);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();