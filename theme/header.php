<?php
namespace Nullix\Sasige;

$page = Page::getCurrent();

$pageset = new Pageset();
$pageset->includePagesByTags(["navigation"]);
$pageset->filterPagesByLanguage($page->getLanguage());
$pageset->setOrderBy("+sort");

$leadText = $page->getLeadText();

?>
<!DOCTYPE html>
<html lang="<?= $page->getLanguage() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $page->getLeadText() ?>">
    <meta name="author" content="Sasige">
    <title><?= $page->getPageTitle() ?></title>
    <link href="<?= $page->getThemeCssUrl(["stylesheets/page.scss"]) ?>" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $page->getPublicRootUrl("favicon.ico") ?>">
</head>
<body>
<header>
    <div class="logo">
        <div class="item">
            <div class="main">SASIGE</div>
            <div class="sub">Static Site Generator</div>
        </div>
    </div>
    <h1 class="pagetitle"><?= $page->getPageTitle() ?>
        <?php if ($leadText) { ?>
            <div class="leadtext"><?= $leadText ?></div>
        <?php } ?></h1>
</header>
<nav>
    <div class="sidebar">
        <?php
        ThemeHelper::showDefaultMenu();
        ?>
    </div>
</nav>

<div class="page">