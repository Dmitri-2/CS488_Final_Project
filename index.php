<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
    include "sample.php";
    $data = new SimpleXMLElement($xmlstr);
    echo $data->ATTRIBUTES->ATTRIBUTE[0]->ATTRVALUE[0]->COLVALUE;
    function console_log($output, $with_script_tags = true) {
      $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
  ');';
      if ($with_script_tags) {
          $js_code = '<script>' . $js_code . '</script>';
      }
      echo $js_code;
  }
    console_log($data);
    console_log($data->ATTRIBUTES->ATTRIBUTE[0]->ATTRVALUE[0]);
 ?>
 </body>
</html>

