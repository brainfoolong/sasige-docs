<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
$page->setPageTitle("Pagination Example");
$page->setParentToDirectory();
$page->setDate("now");
$page->setLabel("Pagination Example");
$page->setSort(6);
$page->setTags(["site", "navigation"]);
$page->setThemeTemplate("post");

$pageset = new Pageset();
$pageset->includePagesByTags(["site"]);
$pageset->filterPagesByLanguage($page->getLanguage());
$pageset->setOrderBy("-date");

$pagination = new Pagination($page, $pageset);
$pagination->setEntriesPerPage(3);

$page->setContentByCallable(function (Page $page) {
    ?>
    <p>On this page we create a pagination navigation. Each page only have a subset of defined elements.</p>
    <?
    $pagination = $page->getPagination();
    echo $pagination->getNumericPageHtmlList();
    ?>
    <p>Here is the list of sites for the current page</p>
    <?php
    ThemeHelper::listPosts($pagination);
});
