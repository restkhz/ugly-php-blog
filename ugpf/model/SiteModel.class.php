<?php
namespace Model;

use Ugly\Model;

class SiteModel extends Model
{

  public function getSiteIndex() {
    $site['site'] = $this->select('title,subtitle')->exec()->fetch();
    return $site;
  }
  
  public function getSpidersAdmin() {
    $count = $this->select('spiders')->exec()->fetch();
    return $count[0];
  }

  public function getViewsAdmin() {
    $count = $this->select('views')->exec()->fetch();
    return $count[0];
  }

  public function updateSite($data) { //$data = array
    return $this->update(['title','subtitle'],$data)->where('id',1)->exec();
  }



  public function init()
  {
    $this->table = 'site';
  }
}
