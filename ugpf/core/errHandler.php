  <?php
/**
* This script is only for Err and Exp handling
*/

set_error_handler('errHandler');
set_exception_handler('expHandler');

function dev_check()
{
  if(DEV) {
      error_reporting(E_ALL);
  } else {
      error_reporting(0);
      echo('Seems someting went wrong...');
      exit(1);
  }
}

function errHandler($no, $file, $line, $context)
{
    dev_check();
    echo '<h1>We met an Error:</h1><br>';
    echo '<b>'. $no . ' ' . $str .'</b><br>';
    echo 'at: '. $file .'<br>';
    echo 'Line: ' . $line. '<br><pre>';
    print_r($context);
    echo '<pre>';
    exit(1);
}

function expHandler($e)
{
    dev_check();
    echo '<h1>We met an Exception:</h1><br>';
    echo $e->getMessage().'<br>';
    echo 'at: '. $e->getFile() .'<br>';
    echo 'Line: ' . $e->getLine(). '<br>';
    echo '<pre>';print_r($e->getTrace());
    echo  '<pre><br>'.$e->getTraceAsString();
    exit(1);
}
