<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Hosting / Deployment");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Hosting / Deployment");
$page->setSort(8);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");
$page->setContentByMarkdownFileSelf();