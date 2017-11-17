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
<nav>
    <div class="screen-small">
        <div class="table">
            <div class="a"><img src="<?= $page->getPublicRootUrl("logo.png") ?>" alt="logo"></div>
            <div class="b" onclick="document.getElementById('mobilemenu').classList.toggle('active')"><img
                        src="<?= $page->getThemeUrl("ic_menu_white_24px.svg") ?>"
                        alt="<?= Theme::getTranslation("menu") ?>"></div>
        </div>
        <div id="mobilemenu">
            <?php
            ThemeHelper::showDefaultMenu();
            ?>
        </div>
    </div>
    <div class="screen-big">
        <div class="logo">
            <div class="icon"><img src="<?= $page->getPublicRootUrl("logo.png") ?>" alt="logo"></div>
        </div>
        <?php
        ThemeHelper::showDefaultMenu();
        ?>
    </div>
</nav>

<div class="page">
    <header>
        <h1 class="pagetitle"><?= $page->getPageTitle() ?>
            <?php if ($leadText) { ?>
                <div class="leadtext"><?= $leadText ?></div>
            <?php } ?>
        </h1>
        <div class="divider"></div>
    </header>