<?php
    require("../tcpdf/tcpdf.php");
    ob_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        
        <?php
            /*$html = "diploma.html";
            $archivo = fopen($html, "r") or die("No se pudo accesar al documento.");
            $diploma = file_get_contents($html);
            fclose($archivo);*/
            $diploma = $_GET["html"];

            $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->AddPage();
            ob_end_clean();
            
            $pdf->writeHTML($diploma, true, false, true, false, '');
            $pdf->Output('example_001.pdf', 'I');

        ?>
    </body>
</html>



