<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Metafile - A page");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Metafile - A page");
$page->setSort(1);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();