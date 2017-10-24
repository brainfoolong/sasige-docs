<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Write post/page");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Write post/page");
$page->setSort(1);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();