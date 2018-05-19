<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

	$sHost = "localhost";
	$sDBnombre = "phpapr";
	$sUsuario = "root";
	$sContraseña = "root";
        
                    $scon = mysqli_connect($sHost,$sUsuario,$sContraseña);

            mysqli_set_charset($scon,"utf8");


            if(mysqli_connect_errno())
            {

                    fnEcho("No jalo");
                    exit();
            }



            mysqli_select_db($scon,$sDBnombre) or die("la base de datos: $sDBnombre, no existe");