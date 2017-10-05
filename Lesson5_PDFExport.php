<?php
 // INCLUDE THE phpToPDF.php FILE
require("phpToPDF.php"); 

// PUT YOUR HTML IN A VARIABLE
$my_html="<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <title>Generating Payslip</title>   
  </head>
  <body>
    <h1> 'Printing Pay Slip' </h1>
  </body>
</html>";

// SET YOUR PDF OPTIONS -- FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => '',
  "file_name" => 'pdf_payslip.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='pdf_payslip.pdf'>Download Your PDF</a>");
?>