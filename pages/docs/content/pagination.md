When it comes to listing if many pages you may need a pagination. For example you have 400 posts and want only 50 per site.

## Pagination - A friend of pagesets

A pagination requires a [pageset](pageset.html). The job of the pagination is to split the pageset up in a number of subsites.

With the example above, you have 400 posts and you want 50 posts per page. So you have a total of 8 pages.

Here is an example for the basic usage of full page using pagination. Most things should be clear when you've carefully read the previous documentation parts. Notice: This whole thing can also be included in a theme template. A content writer should not think about it. A detailed explanation is in the theme section.

    <?php
    namespace Nullix\Sasige;
    
    $page = Page::getCurrent();
    $page->setPageTitle("Planung und alles vor dem Bau");
    $page->setDate("now");
    $page->setLabel("Planung");
    $page->setTags(["post"]);
    $page->setThemeTemplate("post");
    
    $pageset = new Pageset();
    $pageset->includePagesByTags(["post"]);
    $pageset->filterPagesByLanguage($page->getLanguage());
    $pageset->setOrderBy("-date");
    
    $pagination = new Pagination($page, $pageset);
    $pagination->setEntriesPerPage(50);
    
    $page->setContentByCallable(function (Page $page) {
        $pagination = $page->getPagination();
        ThemeHelper::listPosts($pagination);
        echo $pagination->getNumericPageHtmlList();
    });

Now going deeper

* We already know the part of pageset and what it does.
* `$pagination = new Pagination($page, $pageset);` Create a new pagination instance
* `$page->setContentByCallable(function (Page $page) {` Open a anonym function that will be executed when fetching the page content
* `$pagination = $page->getPagination();` Get the pagination instance that's associated with the page
* `ThemeHelper::listPosts($pagination);` For simplifying things, here we have a helper class that manage the output of the pagelist
* `echo $pagination->getNumericPageHtmlList(); `Display a numeric list with all 8 pages to click through


## Deeper look into ThemeHelper::listPosts()

As you can see, this is a little more advanced. You, as a content writer, should not need to think about it. It's most like already done by the theme creator.

    public static function listPosts(Pagination $pagination)
    {
        $pages = $pagination->getPagesOfPage();
        foreach ($pages as $navPage) {
            $date = $navPage->getDate();
            echo '<article class="post-entry">';
            echo '<h2><a href="' . $navPage->getUrl() . '">' . $navPage->getPageTitle() . '</a></h2>';
            echo '<div class="time"><time datetime="' . $date->format("Y-m-d") . '"><span class="month">' . strftime("%b",
                    $date->getTimestamp()) . '</span><span class="day">' . (int)$date->format("d") . '</span><span class="year">' . $date->format("Y") . '</span></time></div>';
            echo '<p class="leadtext">' . $navPage->getLeadText() . ' | <a href="' . $navPage->getUrl() . '">Weiterlesen</a></p>';
            echo '</article>';
        }
    }
    
That's the internal magic. Take a list of pages for each page (The generator repeat this step for every page, in our example 8 times). And for each page we do a list of contained pages with some lead text and timestamp information. 