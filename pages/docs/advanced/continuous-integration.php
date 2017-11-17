<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Continues Integration");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Continues Integration");
$page->setSort(1);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();