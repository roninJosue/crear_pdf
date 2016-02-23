<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Certificado</title>
        <link rel="stylesheet" href="C:/xampp/htdocs/create_pdf/projects/public/css/bootstrap.css"/>
        <link rel="stylesheet" href="C:/xampp/htdocs/create_pdf/projects/public/css/myCss.css"/>
    </head>
    <body>
        <?php
        $name = "Gabriela Beatriz";
        $lastname = "Arriaza Guevara";
        ?>
        <div class="">
            <!--<div class="row"></div>-->
            <div class="">
                <!--<div class="col-lg-2"></div>-->
                <div class=" text-center">
                    <h4>El Programa Interamaricano de Facilitadores Judiciales (PIFJ) 
                        de la
                    </h4> 
                    <h4>
                        Organizaci&oacute;n de los Estados Americanos (OEA) otorga el presente diploma a:
                    </h4>
                    <?php echo "<h5 class='nombr'>$name $lastname</h5>"; ?>
                </div>
                <!--<div class="col-lg-2"></div>-->
            </div>
            <!--<div class="row col2"></div>-->
            <div class="" style="margin-bottom: 0px">
                <!--<div class="col-lg-1"></div>-->
                <div class=" text-center">
                    <h4 style="margin: 15px 40px 0 40px; width: 100%">Por su participaci&oacute;n como pasante presencial en apoyo a la Gerencia de El Salvador, en los periodos
                    </h4> 
                    <h4 style="margin: 15px 40px 10px 40px; width: 100%">
                        comprendidos entre el 01 de abril al 31 de mayo y el 01 de septiembre al 31 de 2015.
                    </h4>
                    <br>
                    <h4 style="margin: 0 40px 0 40px; width: 100%;">
                        Dado en la ciudad de Managua, Nicaragua, a los treinta d&iacute;as del mes de noviembre del año dos mil
                    </h4>
                    <h4>quince.</h4>
                </div>
                <!--<div class="col-lg-1"></div>-->
            </div>
            

                <div class="">
                    <div class="firma"></div>
                <div class="text-center footer">
                    <div class="borde_sup">
                        <h4>Msc. Odily Castillo R&aacute;udez</h4>
                        <h4>Gerente Acad&eacute;mica</h4>
                        <h4>PIFJ/OEA</h4>
                    </div>
                    <div class=""></div>
                </div>

            </div>
    </div>
</body>
</html>
