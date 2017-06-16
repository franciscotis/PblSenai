<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="../Controller/Controller.php">
            <p>Digite a quantidade de equipes: <input type="number" name="qtd" min="1" max="1000"/></p>
            <p>Quantos pedreiros existem na sua equipe? <input type="number" name="pedreiro" min="1" max="1000"/></p>
            <p>Quantos ajudantes de pedreiro existem na sua equipe? <input type="number" name="ajudantepedreiro" min="1" max="1000"/></p>
            <p>Quantos carpinteiros existem na sua equipe? <input type="number" name="carpinteiro" min="2" max="1000"/></p>
            <p>Quantos ajudantes de carpinteiro existem na sua equipe? <input type="number" name="ajudantecarpinteiro" min="1" max="1000"/></p>
            <p>Quantos instaladores elétricos existem na sua equipe? <input type="number" name="instaladoreletrico" min="2" max="1000"/></p>
            <p>Quantos ajudantes de instalador eletrico existem na sua equipe? <input type="number" name="ajudanteinstaladoreletrico" min="1" max="1000"/></p>
            <p>Quantos instaladores hidraulicos existem na sua equipe? <input type="number" name="instaladorhidraulico" min="1" max="1000"/></p>
            <p>Quantos ajudantes de instalador hidraulico existem na sua equipe? <input type="number" name="ajudanteinstaladorhidraulico" min="1" max="1000"/></p>
            <p>Quantos ceramistas existem na sua equipe? <input type="number" name="ceramista" min="3" max="1000"/></p>
            <p>Quantos ajudantes de ceramista existem na sua equipe? <input type="number" name="ajudanteceramista" min="1" max="1000"/></p>
            <p>Quantos pintores existem na sua equipe? <input type="number" name="pintor" min="2" max="1000"/></p>
            <p>Quantos ajudantes de pintor existem na sua equipe? <input type="number" name="ajudantepintor" min="1" max="1000"/></p>
            <input type="submit" value="Enviar"/>
        </form>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
