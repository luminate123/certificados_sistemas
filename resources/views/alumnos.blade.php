<x-layout>
    <div class="header mb-10">
        <p class="text-4xl font-semibold text-gray-900 dark:text-white">Certificado de notas</p>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <form action="/pdf" method="GET" target="_blank" class="grid">
            <div class="grid grid-cols-4 p-2">
                <div class="grid">
                    <label for="">Nombre de alumno:</label>
                    <input type="text" name="nombre_alumno" id="nombre_alumno" class="w-60 uppercase rounded-md">
                </div>
                <div class="grid">
                    <label for="">Código del alumno:</label>
                    <input type="text" name="code_alumno" id="code_alumno" class="w-60 rounded-md">
                </div>
                <div class="grid">
                    <label for="">Número del certificado:</label>
                    <input type="text" name="code_certificado" id="code_certificado" class="w-60 rounded-md">
                </div>
                <div class="grid">
                    <label for="">Créditos obtenidos:</label>
                    <input type="text" name="creditos_obtenidos" id="creditos_obtenidos" class="w-40 rounded-md">
                </div>
                <div class="grid">
                    <label for="">Créditos totales:</label>
                    <input type="text" name="creditos_totales" id="creditos_totales" class="w-40 rounded-md">
                </div>
                <div class="grid">
                    <label for="">Suma Calificativos:</label>
                    <input type="text" name="suma_calificativos" id="suma_calificativos" class="w-40 rounded-md">
                </div>
                <div class="grid">
                    <label for="">Fecha de creción:</label>
                    <input type="text" name="fecha_creacion" id="fecha_creacion" class="w-60 rounded-md">
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            CICLO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CURSO
                        </th>

                        <th scope="col" class="px-6 py-3">
                            NOTA
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CREDITOS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            AÑO ACADEMICO
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!--primer ciclo-->
                    <?php
                    for ($i = 0; $i < 6; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Primer ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Algoritmo y programación">Algoritmo y programación</option>
                                    <option value="Cálculo">Cálculo</option>
                                    <option value="Física I">Física I</option>
                                    <option value="Matemática discreta">Matemática discreta</option>
                                    <option value="Técnicas del aprendizaje">Técnicas del aprendizaje</option>
                                    <option value="Inglés I">Inglés I</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                    <!--segundo ciclo-->
                    <?php
                    for ($i = 6; $i < 12; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Segundo ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="" class="">Elija Opcion</option>
                                    <option value="Introducción a la arquitectura de computadoras">Introducción a la arquitectura de computadoras</option>
                                    <option value="Estructura de datos">Estructura de datos</option>
                                    <option value="Lógica de programación">Lógica de programación</option>
                                    <option value="Geometría">Geometría</option>
                                    <option value="Álgebra lineal computacional">Álgebra lineal computacional</option>
                                    <option value="Inglés II">Inglés II</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!--tercer ciclo-->
                    <?php
                    for ($i = 12; $i <= 18; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Tercer ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Arquitectura y organización de computadoras">Arquitectura y organización de computadoras</option>
                                    <option value="Técnicas de construcción de programas">Técnicas de construcción de programas</option>
                                    <option value="Teoría de la computación">Teoría de la computación</option>
                                    <option value="Técnicas digitales para computación">Técnicas digitales para computación</option>
                                    <option value="Física II">Física II</option>
                                    <option value="Inglés III">Inglés III</option>
                                    <option value="Métodos numéricos computacionales">Métodos numéricos computacionales</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!--cuarto ciclo-->
                    <?php
                    for ($i = 19; $i <= 25; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Cuarto ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Modelos de lenguajes de programación">Modelos de lenguajes de programación</option>
                                    <option value="Organización de archivos">Organización de archivos</option>
                                    <option value="Lenguajes formales y autómatas">Lenguajes formales y autómatas</option>
                                    <option value="Computación gráfica I">Computación gráfica I</option>
                                    <option value="Electrónica para computación">Electrónica para computación</option>
                                    <option value="Informática y sociedad">Informática y sociedad</option>
                                    <option value="Teoría de grafos y análisis combinatorio">Teoría de grafos y análisis combinatorio</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!--quinto ciclo-->
                    <?php
                    for ($i = 26; $i <= 32; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Quinto ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Teleprocesamiento">Teleprocesamiento</option>
                                    <option value="Sistemas operativos I">Sistemas operativos I</option>
                                    <option value="Base de datos I">Base de datos I</option>
                                    <option value="Metodología e ingeniería de software">Metodología e ingeniería de software</option>
                                    <option value="Computación simbólica y numérica">Computación simbólica y numérica</option>
                                    <option value="Economía general">Economía general</option>
                                    <option value="Tópicos especiales en lenguajes de programación">Tópicos especiales en lenguajes de programación</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                    <!--sexto ciclo-->
                    <?php
                    for ($i = 33; $i <= 40; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Sexto ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Computación gráfica II">Computación gráfica II</option>
                                    <option value="Sistemas operativos II">Sistemas operativos II</option>
                                    <option value="Base de datos II">Base de datos II</option>
                                    <option value="Metodología e ingeniería de software II">Metodología e ingeniería de software II</option>
                                    <option value="Estadística y probabilidad">Estadística y probabilidad</option>
                                    <option value="Portugués instrumental">Portugués instrumental</option>
                                    <option value="Tópicos especiales en base de datos">Tópicos especiales en base de datos</option>
                                    <option value="Tópicos especiales en ingeniería de software">Tópicos especiales en ingeniería de software</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                    <!--séptimo ciclo-->
                    <?php
                    for ($i = 41; $i <= 49; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Séptimo ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Redes de computadoras">Redes de computadoras</option>
                                    <option value="Álgebra universal para ciencia de la computación">Álgebra universal para ciencia de la computación</option>
                                    <option value="Compiladores">Compiladores</option>
                                    <option value="Programación en lógica">Programación en lógica</option>
                                    <option value="Laboratorio de base de datos">Laboratorio de base de datos</option>
                                    <option value="Administración y finanzas">Administración y finanzas</option>
                                    <option value="Realidad Nacional">Realidad Nacional</option>
                                    <option value="Tópicos especiales en sistemas operativos">Tópicos especiales en sistemas operativos</option>
                                    <option value="Tópicos especiales en procesamiento gráfico">Tópicos especiales en procesamiento gráfico</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                    <!--octavo ciclo-->
                    <?php
                    for ($i = 50; $i <= 58; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Octavo ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Especificación formal de sistemas">Especificación formal de sistemas</option>
                                    <option value="Geometría computacional">Geometría computacional</option>
                                    <option value="Investigación operativa I">Investigación operativa I</option>
                                    <option value="Modelamiento de sistemas con redes de Petri">Modelamiento de sistemas con redes de Petri</option>
                                    <option value="Ingeniería de la información">Ingeniería de la información</option>
                                    <option value="Laboratorio de compiladores">Laboratorio de compiladores</option>
                                    <option value="Ética para profesionales en informática">Ética para profesionales en informática</option>
                                    <option value="Tópicos especiales en informática teórica">Tópicos especiales en informática teórica</option>
                                    <option value="Tópicos especiales en redes de computadoras">Tópicos especiales en redes de computadoras</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                    <!--noveno ciclo-->
                    <?php
                    for ($i = 59; $i <= 65; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Noveno ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Sistemas orientadas a objetos">Sistemas orientadas a objetos</option>
                                    <option value="Semántica formal de lenguajes de programación">Semántica formal de lenguajes de programación</option>
                                    <option value="Investigación operativa II">Investigación operativa II</option>
                                    <option value="Tópicos especiales en ciencias de la computación I">Tópicos especiales en ciencias de la computación I</option>
                                    <option value="Inteligencia artificial">Inteligencia artificial</option>
                                    <option value="Organización, sistemas y métodos">Organización, sistemas y métodos</option>
                                    <option value="Tópicos especiales en procesamiento paralelo">Tópicos especiales en procesamiento paralelo</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                    <!--décimo ciclo-->
                    <?php
                    for ($i = 66; $i <= 70; $i++) { ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                Décimo ciclo
                            </td>

                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <select name="curso<?php echo ($i + 1); ?>" id="curso<?php echo ($i + 1); ?>" style="width: 80%;">
                                    <option value="">Elija Opcion</option>
                                    <option value="Tópicos especiales en ciencias de la computación II">Tópicos especiales en ciencias de la computación II</option>
                                    <option value="Tópicos especiales en ciencias de la computación III">Tópicos especiales en ciencias de la computación III</option>
                                    <option value="Tópicos especiales en ciencias de la computación IV">Tópicos especiales en ciencias de la computación IV</option>
                                    <option value="Tópicos especiales en ciencias de la computación V">Tópicos especiales en ciencias de la computación V</option>
                                    <option value="Trabajo de graduación">Trabajo de graduación</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="nota<?php echo ($i + 1); ?>" id="nota<?php echo ($i + 1); ?> ">
                                    <option value="">Elija Opcion</option>
                                    <option value="UNO">1</option>
                                    <option value="DOS">2</option>
                                    <option value="TRES">3</option>
                                    <option value="CUATRO">4</option>
                                    <option value="CINCO">5</option>
                                    <option value="SEIS">6</option>
                                    <option value="SIETE">7</option>
                                    <option value="OCHO">8</option>
                                    <option value="NUEVE">9</option>
                                    <option value="DIEZ">10</option>
                                    <option value="ONCE">11</option>
                                    <option value="DOCE">12</option>
                                    <option value="TRECE">13</option>
                                    <option value="CATORCE">14</option>
                                    <option value="QUINCE">15</option>
                                    <option value="DIECISÉIS">16</option>
                                    <option value="DIECISIETE">17</option>
                                    <option value="DIECIOCHO">18</option>
                                    <option value="DIECINUEVE">19</option>
                                    <option value="VEINTE">20</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="credito<?php echo ($i + 1); ?>" id="credito<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                <select name="año<?php echo ($i + 1); ?>" id="año<?php echo ($i + 1); ?>">
                                    <option value="">Elija Opcion</option>
                                    <?php
                                    for ($year = 1992; $year <= date('Y'); $year++) {
                                        echo '<option value="' . $year . '">' . $year . '</option>';
                                        echo '<option value="' . $year . '-NIV">' . $year . '-NIV</option>';
                                    }
                                    ?>
                                    <option value="">En blanco</option>
                                </select>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>

    </div>

    <div class="w-full mt-3 flex justify-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Generar PDF</button>
    </div>
    </form>
</x-layout>