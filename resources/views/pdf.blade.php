<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header {
            margin-bottom: 20px;
            font-size: 10px;
            align-items: center;
        }

        body {
            border: 0.5px solid #000;
            margin-left: -15px;
            margin-right: -5px;
            margin-top: -5px;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            margin-top: -10px;
            z-index: 1;
        }


        .title {
            font-family: 'Plate-regular';
            float: left;
            text-align: center;

        }

        .titulito {
            font-family: 'Plate-regular';
            margin-top: -25px;
        }

        .title-2 {
            font-family: 'Plate-regular';
            float: right;
            margin-top: 10px;
            margin-right: 30px;
            justify-items: center;

        }


        .numero {
            font-size: 20px;
            font-weight: bold;
            float: left;
            margin-left: 45px;

        }

        .cuadro-numero {
            width: 150px;
            height: 30px;
            border: 0.5px solid #000;
            float: right;
            margin-right: 35px;

        }

        .cuadro-numero-numero {
            font-size: x-large;
            font-family: 'Times New Roman', Times, serif;
            position: absolute;
            top: 55px;
            left: 45px;
        }

        .content {
            margin-top: 75px;
            margin-bottom: 0px;
            position: relative;
            z-index: 1;
        }

        .footer {
            text-align: center;
        }

        h1 {
            font-family: 'Plate-regular';
        }

        .facu {
            margin-left: -150px;
            font-size: 18px;
            float: left;
        }

        .nombreFacu {
            float: right;
            margin-top: 20px;
            margin-right: 175px;
        }

        .escuela {
            margin-top: 25px;
        }

        .escu {
            float: right;
            font-size: 18px;
            margin-right: -110px;
        }

        .nombreescuela {
            float: left;
            margin-top: 20px;
            margin-left: 450px;
        }

        .casillero {
            margin-top: -15px;
        }

        .decano {
            margin-top: 35px;
        }

        .deca {
            float: left;
            margin-left: -640px;
        }

        .certifica {
            float: right;
            margin-right: 350px;
            margin-top: 40px;
            font-size: 20px;
            text-decoration: underline;
        }

        .alumno {
            margin-top: 60px;
            margin-left: 50px;
        }

        .don {
            margin-left: -20px;
            float: left;
            margin-right: 20px;
            line-height: 2;
            /* Add this line to set the line spacing */
            text-indent: 50px;
            /* Add this line to add indentation */
            margin-top: 3px;
        }


        table {
            width: 100%;
            margin-top: 75px;
            border-top: 0.5px solid #000;

            border-collapse: collapse;
            height: auto;


        }

        th {
            border-bottom: 0.1px solid #000;
            padding: 1px;
            text-align: center;
        }

        td {
            padding: 0.2px;
            text-align: center;
            font-size: 12px;
        }

        th:last-child,
        td:last-child {
            border-right: none;
        }

        th {
            font-family: "Plate-regular";
            font-size: 14px;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 75%;
            height: 50%;
            transform: translate(-65%, -50%);
            z-index: -1;
        }

        .salto {
            page-break-after: always;
        }

        .table2 {
            width: 100%;
            margin-top: -70px;
            border-top: 1px solid #000;
            border-collapse: collapse;
        }

        .linea {
            border-left: 0.5px solid black;
            height: 775.5px;
            /* Altura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 146.5;
            left: 201.5;
        }

        .linea2 {
            border-left: 0.5px solid black;
            height: 775.5px;
            /* Altura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 146.5;
            left: 268.5;
        }

        .linea3 {
            border-left: 0.5px solid black;
            height: 775.5px;
            /* Altura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 146.5;
            left: 362;
        }

        .linea4 {
            border-left: 0.5px solid black;
            height: 775.5px;
            /* Altura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 146.5;
            left: 438.5;
        }

        /* 2da pagina */
        .linea5 {
            border-left: 0.5px solid black;
            height: 700px;
            /* Altura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 1;
            left: 190.5;
        }

        .linea6 {
            border-left: 0.5px solid black;
            height: 700px;
            /* Altura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 1;
            left: 257.5;
        }

        .linea7 {
            border-left: 0.5px solid black;
            height: 700px;
            /* Altura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 1;
            left: 350.8;
        }

        .linea8 {
            border-left: 0.5px solid black;
            height: 700px;
            /* Altura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 1;
            left: 427.5;
        }

        .linea9 {
            border-top: 0.5px solid black;
            width: 102.8%;
            /* Anchura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 701px;
            left: -26;
        }

        .linea10 {
            border-top: 0.5px solid black;
            width: 102.8%;
            /* Anchura de la línea */
            margin: 0 20px;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 660px;
            left: -26;
        }

        .cuadro-segundapagina {
            width: 110%;
            height: 7px;
            position: absolute;
            border: 0px solid #000;
            background-color: white;
            left: -25;
            top: 701.5px;

        }

        .cuadrocontenedor-segundapagina {
            width: 102.8%;
            height: 65px;
            position: absolute;
            border-top: 0.5px solid #000;
            border-bottom: 0.5px solid #000;
            top: 708.5px;

        }

        .cuadrito1-segundapagina {
            width: 150px;
            height: 50px;
            border: 0.5px solid #000;
            position: absolute;
            left: 50;
            top: 5;

        }

        .cuadrito2-segundapagina {
            width: 150px;
            height: 50px;
            border: 0.5px solid #000;
            position: absolute;
            left: 230;
            top: 5;

        }

        .linea-recta1 {
            border-left: 0.5px solid black;
            height: 50px;
            /* Altura de la línea */
            margin: 0 auto;
            /* Centrar horizontalmente */
            position: absolute;
            left: 50%;
            /* Centrar horizontalmente */
            transform: translateX(-50%);
            /* Ajustar para compensar el ancho de la línea */
        }

        .linea-recta2 {
            border-left: 0.5px solid black;
            height: 50px;
            /* Altura de la línea */
            margin: 0 auto;
            /* Centrar horizontalmente */
            position: absolute;
            left: 50%;
            /* Centrar horizontalmente */
            transform: translateX(-50%);
            /* Ajustar para compensar el ancho de la línea */
        }

        .linea-punteada1 {
            border-top: 0.5px dashed black;
            width: 100%;
            /* Anchura de la línea */
            margin: 20px 0;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 5;
        }

        .linea-punteada2 {
            border-top: 0.5px dashed black;
            width: 100%;
            /* Anchura de la línea */
            margin: 20px 0;
            /* Margen alrededor de la línea */
            position: absolute;
            top: 5;
        }

        .obligatorios1 {
            width: 10px;
            height: 50px;
            position: absolute;
            left: 8;
            top: 8;
            font-size: 7px;
        }

        .electivos1 {
            width: 10px;
            height: 50px;
            position: absolute;
            left: 8;
            top: 27;
            font-size: 7px;
        }

        .obligatorios2 {
            width: 10px;
            height: 50px;
            position: absolute;
            left: 190;
            top: 8;
            font-size: 7px;
        }

        .electivos2 {
            width: 10px;
            height: 50px;
            position: absolute;
            left: 190;
            top: 27;
            font-size: 7px;
        }

        .suma {
            width: 10px;
            height: 50px;
            position: absolute;
            left: 400;
            top: 8;
            font-size: 7px;
        }

        .cuadro-segundapagina2 {
            width: 110%;
            height: 7px;
            position: absolute;
            border: 0px solid #000;
            background-color: white;
            left: -25;
            top: 774.6px;

        }

        .cuadrocontenedor2-segundapagina {
            width: 102.8%;
            height: 65px;
            position: absolute;
            border-top: 0.5px solid #000;
            top: 781.6px;
            font-size: 11.5px;
        }

        .letritas {
            margin-left: 15px;
            margin-right: 20px;
            margin-top: 10px;
            text-align: justify;
        }

        .letras-negritas {
            margin-left: 15px;
            margin-right: 20px;
            margin-top: 10px;
            text-align: justify;
            font-weight: bold;
            font-size: 12px;
        }

        .cuadro-foto {
            width: 120px;
            height: 150px;
            border: 0.5px solid #000;
            position: absolute;
            left: 30px;
            top: 85px;
        }

        .ultima-linea {
            width: 100%;
            height: 7px;
            position: absolute;
            left: 130;
            top: 100px;
            font-size: 12px;
        }

        .cursiva-ultima {
            font-style: italic;
            margin-right: 150px;
        }

        .firmas {
            height: 7px;
            position: absolute;
            left: 130;
            top: 180px;
            font-size: 12px;
            text-align: center;
        }

        .linea-firma2 {
            position: absolute;
            left: 250;
            top: 0;
            font-size: 12px;
        }

        .creditos_obtenidos {
            position: absolute;
            left: 30px;
            top: 30px;
            font-size: 12px;
        }

        .creditos_totales {
            position: absolute;
            left: 110px;
            top: 30px;
            font-size: 12px;
        }

        .suma_calificativos {
            position: absolute;
            font-size: 36px;
            left: 54px;
            top: 0px;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <?php
    $nombreImagen = "watermark.png";
    $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
    ?>
    <img src="<?php echo $imagenBase64 ?>" class="watermark" alt="">
    <div class="container">
        <div class="header">
            <div class="title">
                <h1>UNIVERSIDAD NACIONAL</h1>
                <h1 class="titulito">DE TRUJILLO</h1>
            </div>
            <div class="title-2">
                <h1 class="subtitulo">CERTIFICADO DE ESTUDIOS</h1>
                <div class="casillero">
                    <div class="numero">N°</div>
                    <div class="cuadro-numero">
                        <div class="cuadro-numero-numero ">
                            {{$data['code_certificado']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="facultad">
            <h1 class="facu">FACULTAD DE: </h1>
            <p class="nombreFacu">CIENCIAS FISICAS Y MATEMATICAS</p>
        </div>
        <div class="escuela">
            <h1 class="escu">ESCUELA ACADÉMICO - PROFESIONAL DE: </h1>
            <p class="nombreescuela">INGENIERIA INFORMATICA</p>
        </div>
        <div class="decano">
            <p class="deca">El Decano de la Facultad de : <span style="font-size: 18px;margin-right:80px;margin-left:20px;">CIENCIAS FISICAS Y MATEMATICAS</span> que suscribe,</p>
            <h1 class="certifica">CERTIFICA:</h1>
        </div>
        <div class="alumno">
            <p class="don">Que don(ña):<span style="font-size: 18px;margin-right:50px;margin-left:20px;"> {{$data['nombre_alumno']}} {{$data['code_alumno']}}</span> ha sido examinado (a) en los cursos siguientes y obtenido los calificativos que a continuación de indican:</p>
        </div>
        <div class="linea"></div>
        <div class="linea2"></div>
        <div class="linea3"></div>
        <div class="linea4"></div>
        <div class="table">
            <table>
                <tr>
                    <th style="width:40%;">ASIGNATURAS</th>
                    <th>CREDITOS</th>
                    <th>CALIFICATIVOS</th>
                    <th>AÑO (*) <br> ACADEMICO</th>
                    <th>OBSERVACIÓN</th>
                </tr>
                <!--primer ciclo-->
                <tr>
                    <td>I CICLO</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                <tr>
                    <td>{{ $data['curso' . ($i+1)] }}</td>
                    <td>{{ $data['credito' . ($i+1)] }}</td>
                    <td>{{ $data['nota' . ($i+1)] }}</td>
                    <td>{{ $data['año' . ($i+1)] }}</td>
                    <td></td>
                </tr>
            <?php } ?>

            <!--segundo ciclo-->
            <tr>
                <td>II CICLO</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <?php for ($i = 6; $i < 12; $i++) { ?>
            <tr>
                <td>{{ $data['curso' . ($i+1)] }}</td>
                <td>{{ $data['credito' . ($i+1)] }}</td>
                <td>{{ $data['nota' . ($i+1)] }}</td>
                <td>{{ $data['año' . ($i+1)] }}</td>
                <td></td>
            </tr>
        <?php } ?>

        <!--tercer ciclo-->
        <tr>
            <td>III CICLO</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php for ($i = 12; $i <= 18; $i++) { ?>
        <tr>
            <td>{{ $data['curso' . ($i+1)] }}</td>
            <td>{{ $data['credito' . ($i+1)] }}</td>
            <td>{{ $data['nota' . ($i+1)] }}</td>
            <td>{{ $data['año' . ($i+1)] }}</td>
            <td></td>
        </tr>
    <?php } ?>

    <!--cuarto ciclo-->
    <tr>
        <td>IV CICLO</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <?php for ($i = 19; $i <= 25; $i++) { ?>
    <tr>
        <td>{{ $data['curso' . ($i+1)] }}</td>
        <td>{{ $data['credito' . ($i+1)] }}</td>
        <td>{{ $data['nota' . ($i+1)] }}</td>
        <td>{{ $data['año' . ($i+1)] }}</td>
        <td></td>
    </tr>
<?php } ?>

<!--quinto ciclo-->
<tr>
    <td>V CICLO</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <?php for ($i = 26; $i <= 32; $i++) { ?>

<tr>
    <td>{{ $data['curso' . ($i+1)] }}</td>
    <td>{{ $data['credito' . ($i+1)] }}</td>
    <td>{{ $data['nota' . ($i+1)] }}</td>
    <td>{{ $data['año' . ($i+1)] }}</td>
    <td></td>
</tr>
<?php } ?>

<!--sexto ciclo-->
<tr>
    <td>VI CICLO</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <?php for ($i = 33; $i <= 40; $i++) { ?>

<tr>
    <td>{{ $data['curso' . ($i+1)] }}</td>
    <td>{{ $data['credito' . ($i+1)] }}</td>
    <td>{{ $data['nota' . ($i+1)] }}</td>
    <td>{{ $data['año' . ($i+1)] }}</td>
    <td></td>
</tr>
<?php } ?>

            </table>

        </div>
    </div>

    <div class="salto no-watermark"></div>
    <div class="linea5"></div>
    <div class="linea6"></div>
    <div class="linea7"></div>
    <div class="linea8"></div>

    <div class="linea9"></div>
    <div class="linea10"></div>

    <div class="table2">
        <table>
            <tr>
                <th style="width:40%;">ASIGNATURAS</th>
                <th>CREDITOS</th>
                <th>CALIFICATIVOS</th>
                <th>AÑO (*) <br> ACADEMICO</th>
                <th>OBSERVACIÓN</th>
            </tr>
            <!--septimo ciclo-->
            <tr>
                <td>VII CICLO</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <?php for ($i = 41; $i <= 49; $i++) { ?>
            <tr>
                <td>{{ $data['curso' . ($i+1)] }}</td>
                <td>{{ $data['credito' . ($i+1)] }}</td>
                <td>{{ $data['nota' . ($i+1)] }}</td>
                <td>{{ $data['año' . ($i+1)] }}</td>
                <td></td>
            </tr>
        <?php } ?>
        <!--octavo ciclo-->
        <tr>
            <td>VIII CICLO</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php for ($i = 50; $i <= 58; $i++) { ?>
        <tr>
            <td>{{ $data['curso' . ($i+1)] }}</td>
            <td>{{ $data['credito' . ($i+1)] }}</td>
            <td>{{ $data['nota' . ($i+1)] }}</td>
            <td>{{ $data['año' . ($i+1)] }}</td>
            <td></td>
        </tr>
    <?php } ?>
    <!--noveno ciclo-->
    <tr>
        <td>IX CICLO</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <?php for ($i = 59; $i <= 65; $i++) { ?>
    <tr>
        <td>{{ $data['curso' . ($i+1)] }}</td>
        <td>{{ $data['credito' . ($i+1)] }}</td>
        <td>{{ $data['nota' . ($i+1)] }}</td>
        <td>{{ $data['año' . ($i+1)] }}</td>
        <td></td>
    </tr>
<?php } ?>
<!--decimo ciclo-->
<tr>
    <td>X CICLO</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <?php for ($i = 66; $i <= 70; $i++) { ?>
<tr>
    <td>{{ $data['curso' . ($i+1)] }}</td>
    <td>{{ $data['credito' . ($i+1)] }}</td>
    <td>{{ $data['nota' . ($i+1)] }}</td>
    <td>{{ $data['año' . ($i+1)] }}</td>
    <td></td>
</tr>

<?php } ?>


        </table>

    </div>
    <div class="cuadro-segundapagina"></div>
    <div class="cuadrocontenedor-segundapagina">

        <div class="obligatorios1">
            Curso Obligatorio:
        </div>
        <div class="electivos1">
            Curso Electivos:
        </div>
        <div class="cuadrito1-segundapagina">
            <div class="linea-recta1"></div>
            <div class="linea-punteada1"></div>
        </div>

        <div class="obligatorios2">
            Créditos Obligatorio:
        </div>
        <div class="electivos2">
            Créditos Electivos:
        </div>

        <div class="cuadrito2-segundapagina">
            <div class="linea-recta2"></div>
            <div class="linea-punteada2"></div>
            <span class="creditos_obtenidos">{{$data['creditos_obtenidos']}}</span>
            <span class="creditos_totales">{{$data['creditos_totales']}}</span>
        </div>
        <div class="suma">
            SumaTotal Calificativos:
            <div class="suma_calificativos">
                {{$data['suma_calificativos']}}
            </div>

        </div>
    </div>

    <div class="cuadro-segundapagina2"></div>

    <div class="cuadrocontenedor2-segundapagina">
        <p class="letritas">
            El presente certificado acredita únicamente calificativos obtenidos: 01 a 10 DESAPROBADO, y de 11 a 20 APROBADO,
            como consta en los registros y documentos de esta Universidad, a los cuales se remite en caso necesario. No acredita
            obtención de grado académico o título profesional ni necesariamente culminación de estudios. Cualquier enmendadura
            o anotación hecha invalida el presente documento.
        </p>

        <p class="letras-negritas">
            * Por acuerdo de Consejo Universitario se suprimieron los años 1995 y 1996 (Of. N° 983-96/R de fecha 14-11-96)
        </p>

        <div class="cuadro-foto"></div>
        <p class="ultima-linea"><span class="cursiva-ultima">V° B°</span>Expedido en Trujillo, el {{$data['fecha_creacion']}}</p>

        <div class="firmas">
            <p class="linea-firma">_____________________________</p>
            <p class="firma-decano">DECANO</p>
            <p class="linea-firma2">_____________________________</p>
        </div>
    </div>
</body>

</html>