Pageset's are the way to go when it comes to listing and grouping of pages. For navigation, for tree views, etc...

## Pageset = Dynamic list of pages

Use cases

* I want all pages with the tag `navigation`, ordered by `sort` ascending
* I want all pages with language `en`, ordered by `sort` ascending
* I want all pages with the tag `post`, ordered by `date` descending but only in the current page `language`

Let's have a look at a common pageset that is used for navigation purposes. This is probably more informative for theme creator's. As a content writer you may never need pagesets.

    $pageset = new Pageset();
    $pageset->includePagesByTags(["navigation"]);
    $pageset->filterPagesByLanguage($page->getLanguage());
    $pageset->setOrderBy("+sort");
    echo $pageset->getHtmlListRecursive();
    
A brief explanation

* `$pageset = new Pageset();` Create a new pageset instance
* `$pageset->includePagesByTags(["navigation"]);` Include all pags with the tag navigation
* `$pageset->filterPagesByLanguage($page->getLanguage());` Only the pages with the language of the current page. We want stay in the same language context
* ` $pageset->setOrderBy("+sort");` We order by `sort` property of the pages, `+` means ascending 
* `echo $pageset->getHtmlListRecursive();` A shortcut to generate a `<ul>` html list