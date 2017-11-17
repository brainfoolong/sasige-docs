A metafile control everything of a page. It can also contain the page content itself. But, most likely you'll write your content in markdown or html. For more power you have also some other options.

## Metafile = Page
A page must have a `metafile`. Or even better, a metafile is the page. File-ending must be `.php`. This metafile control everything: How a page is generated, what content it will show, what language it is, the date it was created, which position in navigation, etc... There are ton's of options here.

## Basic metafile

A metafile must contain the following and can be extended with more options.

    <?php
    namespace Nullix\Sasige;    
    $page = Page::getCurrent();
    
Let's take an example of this documentation page

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
    
So, what does all this? A short explanation.

* `<?php` Open tag for PHP - Mark begin of PHP code
* `namespace Nullix\Sasige;` The namespace where in, is always the same
* `$page->setPageTitle("Metafile - A page");` Set the website pagetitle
* `$page->setParentToDirectory();` The page is parent of the `pages/docs/content.php`, for navigation purposes
* `$page->setDate("now");` The date when the page has been modified. `now` means the time at it will be generated
* `$page->setLabel("Metafile - A page");` The label for navigation
* `$page->setSort(1);` The sort for navigation
* `$page->setTags(["site", "navigation"]);` The tags of this page, used for pageset and navigation
* `$page->setThemeTemplate("post");` Set the theme template the should be used
* `$page->setContentByMarkdownFileSelf();` Use a .md file for content with the same name as the metafile


