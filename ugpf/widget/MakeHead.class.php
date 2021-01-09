<?php
namespace Widget;

use Ugly\Ugly;
use Model\SiteModel;
use Model\PostsModel;
use Model\PagesModel;
use Model\CategoriesModel;

/**
 * Make banner
 */

class MakeHead
{
    public static function run()
    {
        $cateObj = new CategoriesModel;
        $siteObj = new SiteModel;
        $pagesObj = new PagesModel;
        $categoriesList = $cateObj->getCategoriesIndex();
        $site = $siteObj->getSiteIndex();
        $pages = $pagesObj->getPages();
        return array_merge($pages, $site, $categoriesList);
    }
}