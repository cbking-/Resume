<?php
require_once("./vendor/autoload.php");

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 
						'format' => 'Letter', 
						'default_font' => 'trebuchet',
						'default_font_size' => 10, 
						'margin_left' => 12.7, 
						'margin_right' => 12.7,
						'margin_top' => 12.7,
						'margin_bottom' => 12.7]);

$css  = file_get_contents("style.css");
$html = file_get_contents("resume.html");

$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML($html, 2);

$mpdf->Output("Corbin_King_Resume.pdf", "F");

$mpdf2 = new \Mpdf\Mpdf(['mode' => 'utf-8', 
						'format' => 'Letter', 
						'font' => 'trebuchet', 
						'margin_left' => 12.7, 
						'margin_right' => 12.7,
						'margin_top' => 12.7,
						'margin_bottom' => 12.7]);

$html = file_get_contents("cover_letter.html");

$mpdf2->WriteHTML($css, 1);
$mpdf2->WriteHTML($html, 2);

$mpdf2->Output("Corbin_King_Cover_Letter.pdf", "F");
