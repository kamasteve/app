<?php
set_include_path(get_include_path() . PATH_SEPARATOR . "/C:/wamp/www/app/dompdf");

require_once "autoload.inc.php";

$dompdf = new DOMPDF();

$html = <<<'ENDHTML'
<html>
 <body>
  <h1>Hello Dompdf</h1>
 </body>
</html>
ENDHTML;

$dompdf->load_html($html);
$dompdf->render();

$dompdf->stream("hello.pdf");