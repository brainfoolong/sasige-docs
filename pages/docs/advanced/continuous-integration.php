<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Helper classes");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Helper classes");
$page->setSort(1);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();