<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>.: Sistema M&eacute;dico Hospitalario :: SIMEDH :.</title>

        <style type="text/css">
            @import url("../../medifacil_front/estilo/simedh.css");

        </style>
        <style type="text/css" media="all">
            @import url("../../medifacil_front/estilo/simedh.css");
            body {font-size:12px}
            h1 {cursor:hand;font-size:16px;margin-left:10px;line-height:10px}
            xmp {color:green;font-size:12px;margin:0px;font-family:courier;background-color:#e6e6fa;padding:2px}
            div.hdr{
                    background-color:lightgrey;
                    margin-bottom:10px;
                    padding-left:10px;
            }
            #centro{
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    margin-left: -175px;
                    margin-top: -250px;
                    width: 350px;
                    height: 500px;
            }
        </style>
        <link rel="icon" type="image/png" href="../../medifacil_front/fotos/icono.png" />
         <script type="text/javascript" src="../javascript/windowsprotoype/prototype.js"></script>
         <script type="text/javascript" src="../javascript/usuario/usuarios.js"></script>

        <script type="text/javascript" src="../javascript/js_funciones.js"></script>
        <script type="text/javascript" src="../javascript/sha_1.js"></script>


    </head>
    <div id="VentanaTransparente" style=" visibility: hidden; ">
        <div class="overlay_absolute"></div>
        <div id="cargador" style="z-index:2000">
            <table width="100%" height="100%" border="0">
                <tr valign="middle">
                    <td>
                        <div id="cssload-wrapper">
                            <div class="cssload-loader">
                                <div class="cssload-line"></div>
                                <div class="cssload-line"></div>
                                <div class="cssload-line"></div>
                                <div class="cssload-line"></div>
                                <div class="cssload-line"></div>
                                <div class="cssload-line"></div>
                                <div class="cssload-subline"></div>
                                <div class="cssload-subline"></div>
                                <div class="cssload-subline"></div>
                                <div class="cssload-subline"></div>
                                <div class="cssload-subline"></div>
                                <div class="cssload-loader-circle-1"><div class="cssload-loader-circle-2"></div></div>
                                <div class="cssload-needle"></div>
                                <div class="cssload-loading">Espere porfavor</div>
                            </div>
                        </div>
                    </td>
                    
                </tr>
            </table>
        </div>
    </div>
    <body>
        <div id="centro">
            <table width="350" height="500" border="0" align="center" cellpadding="0" cellspacing="0" background="../../medifacil_front/imagen/inicio/login_copia.png" style="width:350px; height:400px; margin-top:100px">
                <tr height="120" >
                    <td width="150" height="232">&nbsp;</td>
                    <td width="257">&nbsp;</td>
                    <td width="43">&nbsp;</td>
                </tr>
                <tr>
                    <td height="159">&nbsp;</td>
                    <td valign="top">
                        <form id="formLogin" name="formLogin" action="" method="post" style="border:0; margin:0; padding:0">
                            <table border="0" cellspacing="3" cellpadding="0" style="width:160px; height:110px; margin-top:5px; padding-bottom:10px">
                                <tr>
                                    <td align="right"><label>Usuario:</label></td>
                                </tr>
                                <tr>
                                    <td align="right"><input id="usuario" name="usuario" type="text" maxlength="20" style="width:140px; background-color:#FFFFFF" value="" onkeyup="saltoConEnter(event,this,'2');"/></td>
                                </tr>
                                <tr>
                                    <td align="right"><label>Contraseña:</label></td>
                                </tr>
                                <tr>
                                    <td align="right"><input  id="clave" name="clave" type="password" maxlength="20" style="width:140px; background-color:#FFFFFF" value="" onkeyup="saltoConEnter(event,this,'3');"/></td>
                                </tr>
                                <tr>
                                    <td align="right"><input name="login" onclick="ingresarSistema();" type="button" class="gray-button" id="login" style="text-align:right" value="Ingresar"/></td>
                                </tr>
                            </table>
                            <input type="hidden" name="p1" id="p1" value="valida_usuario"/>
                            <input type="hidden" name="p4" id="p4" value="2"/>
                         </form>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td height="46">&nbsp;</td>
                    <td>
                        <div class="anulado" style="width:135px; height:35px; margin-top:5px; font-size:10px">

                        </div>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                                <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
        <p></p>
    </body>
</html>
     <p style="color: blue;font-weight: bold;"></p>
