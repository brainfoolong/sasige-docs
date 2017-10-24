<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Create a new empty project");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Create new project");
$page->setSort(5);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();