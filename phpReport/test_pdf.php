<?php
// เรียกใช้ส่วนการ autoload library mpdf
require_once 'vendor/autoload.php';

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

$data_print = "
    <style>
    body {
        font-family: 'Garuda'; // เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
    }
    </style>
    <h1>สวัสดี ผู้เยี่ยมชมทุกท่าน</h1>
    <p>ทดสอบเนื้อหา</p>
    <ul>
        <li>Home</li>
        <li>About</li>
        <li>Contact</li>
    </ul>
";

// Write some HTML code:
$mpdf->WriteHTML($data_print);

// Output a PDF file directly to the browser
$mpdf->Output();
