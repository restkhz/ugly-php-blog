<?php

return [
  'DEFAULT_ROUTE' => [
    'CONTROLLER' => 'Index' ,
    'ACTION'    =>  'index',
  ],

  'CLASS_MAP' => [
    //Here is core classes path
    'Ugly\\' => UGLY_PATH.'core/',
    'ErrorHandler\\'  => UGLY_PATH.'core/',
    //APP classes path
    'Controller\\' => UGLY_PATH.'controller/',
    'Model\\' => UGLY_PATH.'model/',
    'Widget\\' => UGLY_PATH.'widget/',

  ],

  'CACHE_PATH' => UGLY_PATH.'cache/',
  'VIEW'  => UGLY_PATH.'view/',
  //DB_config
  'DB' => [
      'DRIVER'  => 'SqliteDriver',
      'PATH' => UGLY_PATH.'../data/',
      'NAME' =>  'sqlite.db',
  ]


];
