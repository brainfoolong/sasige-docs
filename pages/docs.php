<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Documentation");
$page->setLeadText("From quick start to in-depth help");
$page->setDate("now");
$page->setLabel("Documentation");
$page->setSort(2);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();