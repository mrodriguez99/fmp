<div style="width: 100%; height: 100px;" align="center">
    <fieldset>
        <legend>&nbsp; Desactivar Puesto &nbsp;</legend><br>
        <table  align="center" width="80%">
            <tr>
                <td height="30">Inicio: </td>
                <td>
                     <input onclick="calendarioHtmlx('textInicio')" id="textInicio" type="text" style="width: 100px;" value="<?php echo $inicio; ?>" />
                </td>
            </tr>
            <tr>
                <td height="30"> Fin: </td>
                <td>
                     <input id="textFin" onclick="calendarioHtmlx('textFin')" type="text" style="width: 100px;" value="<?php echo $fin; ?>" />
                </td>
            </tr>
            <tr>
                <td height="30">Estado:</td>
                <td>
                    <input type="checkbox" disabled="TRUE" name="checkEstado" id="chkEstado" onclick="if(this.checked){this.value=1}else{this.value=0;}" <?php echo $checked ?>  value="<?php echo $activo ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="2" height="40" align="center">
                      <a href="javascript:cambiarEstadoPuestoEmpleado();"><img  id="imgagenGuardar" src="../../../../medifacil_front/imagen/btn/btn_cambiarEstado.gif"/></a>
                </td>
            </tr>
        </table><br>
    </fieldset>
</div>
<input id="hPeriodoPuestoEmpleado" type="hidden"  value="<?php echo $periodoPuesto; ?>" />
