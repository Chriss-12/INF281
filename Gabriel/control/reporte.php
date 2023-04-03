<?php

        include "conexion.php";
        include "fpdf/fpdf.php"; 
        $actividad = "SELECT *FROM actividad";
        $listar = mysqli_query($con,$actividad);


        $pdf = new FPDF("P","mm","letter");
        $pdf->AddPage();
        $pdf->SetFont("Arial","B",12);
        $pdf->Cell(190,5,"LISTA DE ACTIVIDADES",0,1,"C");

        $pdf->Ln(2);

        $pdf->SetFont("Arial","B",9);

        $pdf->Cell(20,5,"Id",1,0,"C");
        $pdf->Cell(80,5,"Tema",1,0,"C");
        $pdf->Cell(40,5,"Tipo",1,0,"C");
        $pdf->Cell(40,5,"Fecha",1,1,"C");
        $pdf->SetFont("Arial","",9);
        while($row=mysqli_fetch_assoc($listar)){
            $pdf->Cell(20,5,$row["id_actividad"],1,0,"C");
            $pdf->Cell(80,5,$row["tema"],1,0,"L");
            $pdf->Cell(40,5,$row["tipo"],1,0,"C");
            $pdf->Cell(40,5,$row["fechaActividad"],1,1,"C");
        }


  


        $pdf->Output();

?>