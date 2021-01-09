<?php
namespace Widget;

use Ugly\Ugly;
use Model\SiteModel;
use Model\PostsModel;

/**
 * A widget which can count UV based on session.
 */

class TokenGenerator
{
    public static function getToken()
    {
        for($len=16,$r='';strlen($r)<$len;$r.=chr(!mt_rand(0,2)?mt_rand(48,57):(!mt_rand(0,1)?mt_rand(65,90):mt_rand(97,122))));
        return $r;
    }
}