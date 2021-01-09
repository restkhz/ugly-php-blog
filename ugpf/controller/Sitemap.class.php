<?php
namespace Controller;

use Ugly\Ugly;
use Ugly\Controller;
use Model\PostsModel;
use Model\CategoriesModel;
use Model\SiteModel;
use Model\UsersModel;
use Model\CommentsModel;
/**
 * Sitemap generator
 */

 class Sitemap extends Controller {
    public function index() {

        $postsObj = new PostsModel;
        $postsLinks = $postsObj->getAllUrls();
        
        $cateObj = new CategoriesModel;
        $cateLinks = $cateObj->getAllUrls();
        
        $links = array_merge($cateLinks,$postsLinks);

        $host = 'https://'.$_SERVER["HTTP_HOST"].'/';

        $dom = new \DOMDocument('1.0','utf-8');

        $dom->formatOutput = true;
        $root = $dom->createElement("urlset");
        $root->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $dom->appendChild($root);
        foreach($links as $link){

            $track = $dom->createElement("url");
            $root->appendChild($track);

            $loc = $dom->createElement("loc");
                $track->appendChild($loc);
            $priority = $dom->createElement("priority");
                $track->appendChild($priority);
            //$lastmod = $dom->createElement("lastmod");
            //    $track->appendChild($lastmod);
            $changefreq = $dom->createElement("changefreq");
                $track->appendChild($changefreq);
            $text = $dom->createTextNode($host.$link);
            $loc->appendChild($text);
            $date = date("Y-m-d",time());
            //$text = $dom->createTextNode($date);
            //$lastmod->appendChild($text);
            $text = $dom->createTextNode("daily");
            $changefreq->appendChild($text);
            $text = $dom->createTextNode(0.8);
            $priority->appendChild($text);
        }
        ob_clean();
        flush();
        //header("Content-type: text/xml");
        echo $dom->saveXML();
    }
 }