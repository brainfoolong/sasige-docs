<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Link to page");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Link to page");
$page->setSort(4);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();