<?php

namespace Nullix\Sasige;

class ThemeHelper
{
    /**
     * Show the default page menu
     * Is used and generated twice so we have a little helper function here
     */
    public static function showDefaultMenu()
    {
        $page = Page::getCurrent();
        $pageset = new Pageset();
        $pageset->includePagesByTags(Theme::getOption("navigationPagesetTags"));
        $pageset->filterPagesByLanguage($page->getLanguage());
        $pageset->setOrderBy("+sort");
        echo $pageset->getHtmlListRecursive();
    }

    /**
     * List posts for given pagination
     * @param Pagination $pagination
     */
    public static function listPosts(Pagination $pagination)
    {
        $pages = $pagination->getPagesOfPage();
        foreach ($pages as $navPage) {
            echo '<article class="post-entry">';
            echo '<h3><a href="' . $navPage->getUrl() . '">' . $navPage->getPageTitle() . '</a></h3>';
            echo '</article>';
        }
    }
}
