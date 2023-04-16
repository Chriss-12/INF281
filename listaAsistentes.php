<?php

        require "conexion.php";
        require "fpdf/fpdf.php";  
        $list = $participantes ="SELECT concat(p.nombre,' ', p.apPaterno,' ',p.apMaterno) as part,  p.id_usuario as p1 FROM usuario p
        INNER JOIN reserva r ON p.id_usuario = r.id_usuarioParticipante";
        $listar = mysqli_query($con,$list);


        $pdf = new FPDF("P","mm","letter");
        $pdf->AddPage();
        $pdf->SetFont("Arial","B",12);
        $pdf->Cell(190,5,"LISTA DE ASISTENTES",0,1,"C");

        $pdf->Ln(2);

        $pdf->SetFont("Arial","B",9);

        $pdf->Cell(20,5,"Id",1,0,"C");
        $pdf->Cell(80,5,"Nombre Completo",1,0,"C");
        $pdf->Cell(40,5,"Correo",1,0,"C");
        $pdf->Cell(40,5,"Asistencias",1,1,"C");
        $pdf->SetFont("Arial","",9);
        while($row=mysqli_fetch_assoc($listar)){
            $pdf->Cell(20,5,$row["p1"],1,0,"C");
            $pdf->Cell(80,5,$row["part"],1,0,"L");
            $pdf->Cell(40,5,"",1,0,"C");
            $pdf->Cell(40,5,"",1,1,"C");
        }

        $pdf->Output();

?>