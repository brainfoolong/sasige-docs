<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Multilanguage");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Multilanguage");
$page->setSort(3);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();