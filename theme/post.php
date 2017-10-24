<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
require __DIR__ . "/header.php";
?>
    <div class="content">
        <div class="head">
            <time datetime="<?= $page->getDate()->format("Y-m-d") ?>" pubdate>Last updated <?= $page->getDate()
                    ->format("d.m.Y") ?> - Sasige version <?= SASIGE_VERSION ?>
                |
            </time>
            <a href="https://github.com/brainfoolong/sasige-docs/edit/master/pages/<?= $page->getPath() ?>.md"
               target="_blank">Improve
                this page</a>
        </div>

        <div class="post">
            <?= $page->getContent() ?>
        </div>
    </div>
    <?

require __DIR__ . "/footer.php";
