<?php
//$nombreSede;
//$nombreArea;
//$nombreCordinador;
//$accion;

//print_r($datos);
//echo $jc;
//
//$datos["sede"] = $parametros["p2"];
//                    $datos["area"] = $parametros["p3"];
//                    $datos["cordinador"] = $parametros["p4"];
//                    $datos["idSedeempresaArea"] = $parametros["p5"];
//print_r('inicio'.$arrayListaTurnosxSedeEmpresaArea.'fin');
//echo '<br> ------------------------------<br>';
//print_r('inicio'.$arrayListaTurnosDisponibles.'fin');
?>
<input id="hCodTurno" type="hidden" />
<input id="hIdTurnoAreaSede" type="hidden">
<input id="hIdfilaSeleccionada" type="hidden">

<fieldset>


    <form id="manteTurno" name="manteTurno" action="" style="background-color: #E6FFEC">

        <table class="cabecera" cellpadding="2" cellspacing="2" border="0"  >

            <tr>
                <td align="left">Sede</td>
                <td><input type="text" name="CodIdSedecita" id="CodIdSedecita" value="<?php echo $datos["sede"] ?>" class="texto_combo" size="8" readonly/></td>
            </tr>


            <tr>
                <td align="left">Area</td>
                <td><input type="text" name="nomArea" id="nomArea" value="<?php echo $datos["area"] ?>" class="texto_combo" size="40" readonly tabindex="1"/></td>
            </tr>


            <tr>
                <td align="left"> Coordinador</td>
                <td><input type="text" name="nomCoordinador" id="nomCoordinador" value="<?php echo $datos["cordinador"] ?>" class="texto_combo" size="40" readonly tabindex="1"/></td>

            </tr>

            <tr>
                <td align="left"> id SedeEmpresaArea</td>
                <td><input type="text" name="nomSedeEmpresaArea" id="nomSedeEmpresaArea" value="<?php echo $datos["idSedeempresaArea"] ?>" class="texto_combo" size="40" readonly tabindex="1"/></td>

            </tr>

        </table>
    </form>

</fieldset>



<br/>



<p>&nbsp;</p>







<div id="cabecera" align="center" style="width: 100%;height: 30%; color: #000000;">

    <table border="0" align="center" style="width: 100%;height: 100%">
        <tr>
            <td align="center" style="height:100%; width:47%">



                <table border="1" align="center">
                    <tr align="center">
                        <td>

                            <div  id ="divCabeceraArea" style="width:100%; height:100%;background-color: #D6E9FE; color: #0000FF">
                                <h1 >Turnos Disponibles</h1>
                            </div>

                        </td>


                    </tr>
                    <tr align="center">
                        <td>
                            <div id="Div_TablaListaTurnosDisponibles" align="center" style="width:300px; height:240px;"></div>
                        </td>
                    </tr>
                </table>


            </td>

            <td align="center" style="height:100%; width:6%">

                <table>
                    
<!--      inicio-->
      
                    <?php
                        if (isset($_SESSION["permiso_formulario_servicio"][235]["ASIGNAR_TURNO_DISPONIBLE_AL_AREA"]) && ($_SESSION["permiso_formulario_servicio"][235]["ASIGNAR_TURNO_DISPONIBLE_AL_AREA"] == 1)) {


                            echo "<tr align=center>
                                <td align=center>
                                    <a href=\"javascript:javascript:asignarTurnoDisponibleAlArea();\"><img  id=\"imgagenGuardar\" src=\"../../../../fastmedical_front/imagen/icono/b_adelante.gif\" width=25px height=25px/></a>
                                  </td>
                                  </tr>
                                    ";
                        } else {

                            echo "<tr align=center>
                                    <td align=center>
                                    <img  id=\"imgagenGuardar\" src=\"../../../../fastmedical_front/imagen/icono/b_adelante.gif\" width=25px height=25px/>
                                                                       
                                   </td>
                                   </tr>
                                    ";
                        }
                        
                        
                         if (isset($_SESSION["permiso_formulario_servicio"][235]["QUITAR_TURNO_SELECCIONADO_AL_AREA"]) && ($_SESSION["permiso_formulario_servicio"][235]["QUITAR_TURNO_SELECCIONADO_AL_AREA"] == 1)) {


                            echo "<tr align=center>
                                <td align=center>
                                    <a href=\"javascript:javascript:quitarTurnoSeleccionadoAlArea();\"><img  id=\"imgagenGuardar\" src=\"../../../../fastmedical_front/imagen/icono/b_atras.gif\" width=25px height=25px/></a>
                                  </td>
                                  </tr>
                                    ";
                        } else {

                            echo "<tr align=center>
                                    <td align=center>
                                    <img  id=\"imgagenGuardar\" src=\"../../../../fastmedical_front/imagen/icono/b_atras.gif\" width=25px height=25px/>
                                                                       
                                   </td>
                                   </tr>
                                   
                                    ";
                        }
                        
                        
                        
                        
                        
                        
                        ?>      



                    
<!--      fin-->
<!--                    <tr align="center">
                        

                        <td  align="center" style="width:180px; height:50px;">

                            <a href="javascript:asignarTurnoDisponibleAlArea();"> <img  id="imgagenGuardar" src="../../../../fastmedical_front/imagen/icono/b_adelante.gif" width="25px" height="25px"/></a>

                        </td>
                        
                        
                        
                    </tr>-->
                    
                    
                    
<!--                    <tr align="center" style="width:180px; height:50px;">
                        
                        
                        
                        <td align="center">

                            <a href="javascript:quitarTurnoSeleccionadoAlArea();"><img  id="imgagenGuardar" src="../../../../fastmedical_front/imagen/icono/b_atras.gif" width="25px" height="25px"/></a>
                        </td>
                    </tr>-->


                </table>



            </td>

            <td align="center" style="height:100%; width:47%">

                <table border="1" align="center">
                    <tr align="center">
                        <td>

                            <div  id ="divCabeceraArea" style="width:100%; height:100%;background-color: #D6E9FE; color: #0000FF">
                                <h1 >Turnos Seleccionados por el Area </h1>
                            </div>

                        </td>


                    </tr>
                    <tr align="center">
                        <td>
                            <!--                            <div id="Div_TurnosSeleccionadosxArea" align="center" style="width:300px; height:180px;"></div>-->
                            <div id="Div_TurnosSeleccionadosxArea" align="center" style="width:300px; height:240px;"></div>
                        </td>
                    </tr>
                </table>



            </td>
        </tr>    
    </table>
</div>



