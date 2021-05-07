<?php
    require('../fpdf/fpdf.php');

include "../Controller/postC.php";
include "../Model/post.php";
$postC = new  postC();
        $result = $postC->recupererpost1();

      

            $title = ' Les informations des posts ';

            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetTitle($title);
            // Logo
            $pdf->Image('assets/img/logo1.png',10,6,30);
            // Arial bold 15
            $pdf->SetFont('Arial', 'B', 15);
            $w= $pdf -> GetStringWidth($title)+6 ;
            $pdf ->SetX((210-$w)/2);
            //color of frame , background and text
            $pdf->SetDrawColor(221,221,221,1);
            $pdf->SetFillColor(56,182,255,1);
            $pdf->SetTextColor(255,255,255,1);
            //thikness of frame (1 mm)
            $pdf-> SetLineWidth(1);

            //  $pdf->Cell(0, 10, $title, 1, 1, 'c');
            $pdf->Cell($w,9,$title,1,1,'C',true);
            //Line Break
            $pdf -> Ln(10);
            if (is_array($result) || is_object($result))
            {
                        foreach($result as $result){
                        $titre  = $result['titre'];
                        $description  = $result['description'];
                        $image = $result['image'];
            
            $pdf -> SetTextColor(0,0,0,1);
            $w= $pdf -> GetStringWidth($description)+50;

            $pdf -> SetX((170-$w)/2);
            $pdf -> Cell(40,10,'description',1,0,'C');
            $pdf->Cell($w,10,$description,1,1,'C');


            $pdf->Image('assets/img/'.$image,55,90,100);
                        }}

            $pdf->Output();
        
    