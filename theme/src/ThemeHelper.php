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
            $date = $navPage->getDate();
            echo '<article class="post-entry">';
            echo '<h2><a href="' . $navPage->getUrl() . '">' . $navPage->getPageTitle() . '</a></h2>';
            echo '<div class="time"><time datetime="' . $date->format("Y-m-d") . '"><span class="month">' . strftime("%b",
                    $date->getTimestamp()) . '</span><span class="day">' . (int)$date->format("d") . '</span><span class="year">' . $date->format("Y") . '</span></time></div>';
            echo '<p class="leadtext">' . $navPage->getLeadText() . ' | <a href="' . $navPage->getUrl() . '">Weiterlesen</a></p>';
            echo '</article>';
        }
    }
}
