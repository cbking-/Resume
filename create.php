<?php
require_once("./mpdf/vendor/autoload.php");

$mpdf = new mPDF("utf-8", "Letter", "", "trebuchet", 12.7, 12.7, 12.7, 12.7);

$css  = file_get_contents("style.css");
$html = file_get_contents("resume.html");

$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML($html, 2);

$mpdf->Output("Corbin_King_Resume.pdf", "F");

$mpdf2 = new mPDF("utf-8", "Letter", "", "trebuchet", 12.7, 12.7, 12.7, 12.7);
$html = file_get_contents("cover_letter.html");

$mpdf2->WriteHTML($css, 1);
$mpdf2->WriteHTML($html, 2);

$mpdf2->Output("Corbin_King_Cover_Letter.pdf", "F");