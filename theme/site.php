<?php

namespace Nullix\Sasige;

$page = Page::getCurrent();
require __DIR__ . "/header.php";
?>
    <div class="content">
        <?= $page->getContent() ?>
    </div>
    <?

require __DIR__ . "/footer.php";
