<?php
include('../clases/conexion.php');
session_start();
include('../clases/sesion.php');
$tabla  = (isset($_POST['tabla'])?$_POST['tabla']:'no se recibe');
$id     = (isset($_REQUEST['id'])?$_REQUEST['id']:0);
print '<script type="text/javascript" src="../js/confirmation.js"></script>';
switch($tabla){

    case 'tblsolicitud':
    
    $sqlMostrar ='SELECT sol.idsolicitud AS "Código", per.nombre AS "Empleado", ts.nombretipo AS "Solicitud", tm.motivo AS "Motivo", sol.fecha AS 
    "Fecha de solicitud", sol.comentario AS "Comentario" FROM tblsolicitud sol 
    INNER JOIN tblpersona per ON per.idpersona = sol.idpersona INNER JOIN tbltiposolicitud ts ON ts.idtipo = sol.idtipo
    INNER JOIN tblmotivo tm ON tm.idmotivo = sol.idmotivo WHERE sol.estado = "1"';
    $rsMostrar = $bdConexion->ejecutarSql($sqlMostrar);

    print '<script type="text/javascript" src="../js/listar.js"></script>
              <table class="table table-condensed table-hover" id="lista"><thead >
              <tr>
                  <th>Código</th>
                  <th>Empleado</th>
                  <th>Solicitud</th>
                  <th>Motivo</th>
                  <th>Fecha de solicitud</th>
                  <th>Comentario</th>
                  <th style="text-align: center;">Acciones</th>
              </tr>
           </thead><tbody>';

    while($fila = mysqli_fetch_array($rsMostrar)){
        $fecha = $fila['Fecha de solicitud'];
        print "
        <tr>
            <td>".$fila['Código']."</td>
            <td>".$fila['Empleado']."</td>
            <td>".$fila['Solicitud']."</td>
            <td>".$fila['Motivo']."</td>
            <td>".date('d-m-Y', strtotime($fecha))."</td>
            <td>".$fila['Comentario']."</td>
            <td  style='text-align:center;'>
                <a data-toggle='confirmation' data-title='¿Está seguro de resolver este registro?' data-btn-ok-label='Si'
                data-btn-ok-icon='fa fa-check' data-btn-ok-class='btn-success'
                data-btn-cancel-label='No' data-btn-cancel-icon='fa fa-close'
                data-btn-cancel-class='btn-danger' href='tblSolicitud.php?accion=resolver&hCodigo=".$fila['Código']."'>
                <button type='submit' class='btn btn-success boton' id='btnResolver' >Resolver</button>
                </a>
            </td>
        </tr> ";
    }//Fin while
    print "
         </tbody></table>";
    break;

    case 'tblcita':
    
    if($rol == 1 || $rol == 2){
        $sqlMostrar ='SELECT ci.idcita AS "Código", per.nombre AS "Empleado", ci.fechasolicitud AS "Fecha de solicitud", 
        ci.fechacita AS "Fecha cita", h.hora AS "Hora", ci.comentarios AS "Comentario", est.estado AS "Estado" 
        FROM tblcita ci INNER JOIN tblpersona per ON ci.idpersona = per.idpersona INNER JOIN tblestado est ON 
        ci.idestado = est.idestado INNER JOIN tblhora h ON ci.idhora = h.idhora WHERE ci.idestado !="0" AND ci.visible !="0" ORDER BY est.idestado ASC';
        $rsMostrar = $bdConexion->ejecutarSql($sqlMostrar);

        print '<script type="text/javascript" src="../js/listar.js"></script>
                <table  class="table table-condensed table-hover" id="lista"><thead >
                <tr>
                    <th>Código</th>
                    <th>Empleado</th>
                    <th>Fecha de solicitud</th>
                    <th>Fecha cita</th>
                    <th>Hora</th>
                    <th>Comentario</th>
                    <th>Estado</th>
                    <th style="text-align: center;">Acciones</th>
                </tr>
            </thead><tbody>';

            while($fila = mysqli_fetch_array($rsMostrar)){
                $fecha = $fila['Fecha de solicitud'];
                $fechaC = $fila['Fecha cita'];
                print "
                <tr>
                    <td>".$fila['Código']."</td>
                    <td>".$fila['Empleado']."</td>
                    <td>".date('d-m-Y', strtotime($fecha))."</td>
                    <td>".date('d-m-Y', strtotime($fechaC))."</td>
                    <td>".$fila['Hora']."</td>
                    <td>".$fila['Comentario']."</td>
                    <td>".$fila['Estado']."</td>
                    <td  style='text-align:center;'>
                        <a href='tblCita.php?accion=aprobar&hCodigo=".$fila['Código']."'>
                        <button type='submit' class='btn btn-success boton' id='btnAprobar'>Aprobar</button>
                        </a>
                        <a href='tblCita.php?accion=denegar&hCodigo=".$fila['Código']."'>
                        <button type='submit' class='btn btn-danger boton' id='btnDenegar'>Denegar</button>
                        </a>
                        <a data-toggle='confirmation' data-title='¿Está seguro de resolver este registro?' data-btn-ok-label='Si'
                        data-btn-ok-icon='fa fa-check' data-btn-ok-class='btn-success'
                        data-btn-cancel-label='No' data-btn-cancel-icon='fa fa-close'
                        data-btn-cancel-class='btn-danger' href='tblCita.php?accion=resolver&hCodigo=".$fila['Código']."&txtestado=".$fila['Estado']."'>
                        <button type='submit' class='btn btn-warning boton' id='btnResolver' >Resolver</button>
                        </a>
                    </td>
                </tr> ";
            }//Fin while
            print "
                </tbody></table>";   
    }else if($rol == 3 || $rol == 4 || $rol == 5 || $rol == 6 || $rol == 7 || $rol == 8 || $rol == 9 || $rol == 10 || $rol == 11 || $rol == 12 || $rol == 13){
        $sqlMostrar ='SELECT per.nombre AS "Empleado", ci.fechasolicitud AS "Fecha de solicitud", 
        ci.fechacita AS "Fecha cita", h.hora AS "Hora", ci.comentarios AS "Comentario", est.estado AS "Estado" 
        FROM tblcita ci INNER JOIN tblpersona per ON ci.idpersona = per.idpersona INNER JOIN tblestado est ON 
        ci.idestado = est.idestado INNER JOIN tblhora h ON ci.idhora = h.idhora WHERE ci.idestado !="0" AND ci.visible !="0" AND ci.idpersona = '.$idPersona.' ORDER BY est.idestado ASC';
        $rsMostrar = $bdConexion->ejecutarSql($sqlMostrar);

        print '<script type="text/javascript" src="../js/listar.js"></script>
                <table  class="table table-condensed table-hover" id="lista"><thead >
                <tr>
                    <th>Empleado</th>
                    <th>Fecha de solicitud</th>
                    <th>Fecha cita</th>
                    <th>Hora</th>
                    <th>Comentario</th>
                    <th>Estado</th>
                </tr>
            </thead><tbody>';

            while($fila = mysqli_fetch_array($rsMostrar)){
                $fecha = $fila['Fecha de solicitud'];
                $fechaC = $fila['Fecha cita'];
                $respuesta = $fila['Estado'];
                if($respuesta == 'Aprobado'){
                    print "
                    <tr>
                        <td>".$fila['Empleado']."</td>
                        <td>".date('d-m-Y', strtotime($fecha))."</td>
                        <td>".date('d-m-Y', strtotime($fechaC))."</td>
                        <td>".$fila['Hora']."</td>
                        <td>".$fila['Comentario']."</td>
                        <td style='color: green; text-transform: uppercase; font-weight: bold;'>".$fila['Estado']."</td>
                    </tr> ";    
                }else if($respuesta == 'Denegado'){
                    print "
                    <tr>
                        <td>".$fila['Empleado']."</td>
                        <td>".date('d-m-Y', strtotime($fecha))."</td>
                        <td>".date('d-m-Y', strtotime($fechaC))."</td>
                        <td>".$fila['Hora']."</td>
                        <td>".$fila['Comentario']."</td>
                        <td style='color: red; text-transform: uppercase; font-weight: bold;'>".$fila['Estado']."</td>
                    </tr> ";    
                }else{
                    print "
                    <tr>
                        <td>".$fila['Empleado']."</td>
                        <td>".date('d-m-Y', strtotime($fecha))."</td>
                        <td>".date('d-m-Y', strtotime($fechaC))."</td>
                        <td>".$fila['Hora']."</td>
                        <td>".$fila['Comentario']."</td>
                        <td>".$fila['Estado']."</td>
                    </tr> ";
                }
            }//Fin while
            print "
                </tbody></table>";
    }
    break;

    case 'tblsolsuplemento':

    $sqlMostrar ='SELECT solm.idsolicitud AS "Código", per.nombre AS "Empleado", tus.nombretipo AS "Área", solm.fecha AS "Fecha de solicitud", 
    mat.material AS "Material", solm.cantidad AS "Cantidad" FROM tblsolsuplemento solm INNER JOIN tblpersona per ON 
    solm.idpersona = per.idpersona INNER JOIN tblmaterial mat ON  solm.idmaterial = mat.idmaterial 
    INNER JOIN tbltipousuario tus ON tus.idtipo = solm.idtipo WHERE solm.estado = "1"';
    $rsMostrar = $bdConexion->ejecutarSql($sqlMostrar);

    print '<script type="text/javascript" src="../js/listar.js"></script>
              <table class="table table-condensed table-hover" id="lista"><thead >
              <tr>
                  <th>Código</th>
                  <th>Empleado</th>
                  <th>Área</th>
                  <th>Fecha de solicitud</th>
                  <th>Material</th>
                  <th>Cantidad</th>
                  <th style="text-align: center;">Acciones</th>
              </tr>
           </thead><tbody>';

    while($fila = mysqli_fetch_array($rsMostrar)){
        $fecha = $fila['Fecha de solicitud'];
        print "
        <tr>
            <td>".$fila['Código']."</td>
            <td>".$fila['Empleado']."</td>
            <td>".$fila['Área']."</td>
            <td>".date('d-m-Y', strtotime($fecha))."</td>
            <td>".$fila['Material']."</td>
            <td>".$fila['Cantidad']."</td>
            <td  style='text-align:center;'>
                <a data-toggle='confirmation' data-title='¿Está seguro de resolver este registro?' data-btn-ok-label='Si'
                data-btn-ok-icon='fa fa-check' data-btn-ok-class='btn-success'
                data-btn-cancel-label='No' data-btn-cancel-icon='fa fa-close'
                data-btn-cancel-class='btn-danger' href='tblSolSup.php?accion=resolver&hCodigo=".$fila['Código']."'>
                <button type='submit' class='btn btn-success boton' id='btnResolver' >Resolver</button>
                </a>
            </td>
        </tr> ";
    }//Fin while
    print "
         </tbody></table>";
    break;

    case 'tblusuario':

    $sqlMostrar ='SELECT us.idusuario AS "Código", us.idpersona AS "idpersona", per.nombre AS "Empleado", us.idtipo AS "Tipo", tus.nombretipo AS "Tipo de usuario", 
    us.user AS "Nombre de usuario", us.pass AS "Contraseña", us.activo AS "Activo" FROM tblpersona per INNER JOIN tblusuario us 
    ON per.idpersona = us.idpersona INNER JOIN tbltipousuario tus ON tus.idtipo = us.idtipo';
    $rsMostrar = $bdConexion->ejecutarSql($sqlMostrar);

    print '<script type="text/javascript" src="../js/listar.js"></script>
              <table class="table table-condensed table-hover" id="lista"><thead>
              <tr>
                  <th>Código</th>
                  <th>Empleado</th>
                  <th>Tipo de usuario</th>
                  <th>Nombre de usuario</th>
                  <th>Contraseña</th>
                  <th style="text-align: center;">Acciones</th>
              </tr>
           </thead><tbody>';

    while($fila = mysqli_fetch_array($rsMostrar)){
        $activo = $fila['Activo'];
        if($activo==0){
            print "
            <tr>
                <td style='color: red;'>".$fila['Código']."</td>
                <td style='color: red;'>".$fila['Empleado']."</td>
                <td style='color: red;'>".$fila['Tipo de usuario']."</td>
                <td style='color: red;'>".$fila['Nombre de usuario']."</td>
                <td style='-webkit-text-security: disc; color: red;'>".$fila['Contraseña']."</td>
                <td style='text-align:center;'>
                    <a data-toggle='confirmation' data-title='¿Está seguro de modificar este registro?' data-btn-ok-label='Si'
                    data-btn-ok-icon='fa fa-check' data-btn-ok-class='btn-success'
                    data-btn-cancel-label='No' data-btn-cancel-icon='fa fa-close'
                    data-btn-cancel-class='btn-danger' href='frmUsuario.php?accion=update&hCodigo=".$fila['Código']."&idpersona=".$fila['idpersona']."&txtnombre=".$fila['Empleado']."&txtuser=".$fila['Nombre de usuario']."&txtpass=".$fila['Contraseña']."&slcTipo=".$fila[3]."'>
                    <button type='submit' class='btn btn-warning boton' id='btnModificar'>Modificar</button>
                    </a>
                    <a data-toggle='confirmation' data-title='¿Está seguro de reactivar este usuario?' data-btn-ok-label='Si'
                    data-btn-ok-icon='fa fa-check' data-btn-ok-class='btn-success'
                    data-btn-cancel-label='No' data-btn-cancel-icon='fa fa-close'
                    data-btn-cancel-class='btn-danger' href='tblUsuario.php?accion=reactivar&hCodigo=".$fila['Código']."&txtnombre=".$fila['Empleado']."&txtuser=".$fila['Nombre de usuario']."&txtpass=".$fila['Contraseña']."&slcTipo=".$fila[2]."&txtactivo=1'>
                    <button type='submit' class='btn btn-success boton' id='btnEliminar'>&nbspReactivar&nbsp</button>
                    </a>
                </td>
            </tr> ";    
        }else if($activo==1){
            print "
            <tr>
                <td>".$fila['Código']."</td>
                <td>".$fila['Empleado']."</td>
                <td>".$fila['Tipo de usuario']."</td>
                <td>".$fila['Nombre de usuario']."</td>
                <td style='-webkit-text-security: disc;'>".$fila['Contraseña']."</td>
                <td style='text-align:center;'>
                    <a data-toggle='confirmation' data-title='¿Está seguro de modificar este registro?' data-btn-ok-label='Si'
                    data-btn-ok-icon='fa fa-check' data-btn-ok-class='btn-success'
                    data-btn-cancel-label='No' data-btn-cancel-icon='fa fa-close'
                    data-btn-cancel-class='btn-danger' href='frmUsuario.php?accion=update&hCodigo=".$fila['Código']."&idpersona=".$fila['idpersona']."&txtnombre=".$fila['Empleado']."&txtuser=".$fila['Nombre de usuario']."&txtpass=".$fila['Contraseña']."&slcTipo=".$fila[3]."'>
                    <button type='submit' class='btn btn-warning boton' id='btnModificar'>Modificar</button>
                    </a>
                    <a data-toggle='confirmation' data-title='¿Está seguro de desactivar este usuario?' data-btn-ok-label='Si'
                    data-btn-ok-icon='fa fa-check' data-btn-ok-class='btn-success'
                    data-btn-cancel-label='No' data-btn-cancel-icon='fa fa-close'
                    data-btn-cancel-class='btn-danger' href='tblUsuario.php?accion=desactivar&hCodigo=".$fila['Código']."&txtnombre=".$fila['Empleado']."&txtuser=".$fila['Nombre de usuario']."&txtpass=".$fila['Contraseña']."&slcTipo=".$fila[2]."&txtactivo=0'>
                    <button type='submit' class='btn btn-danger boton' id='btnEliminar'>Desactivar</button>
                    </a>
                </td>
            </tr> ";
        }
        
    }//Fin while
    print "
         </tbody></table>";
    break;

    case 'tblboleta':
    
    if($rol == 1 || $rol == 2){
        $sqlMostrar ='SELECT bol.idboleta AS "Código", bol.idpersona AS "Código empleado", per.nombre AS 
        "Empleado", bol.boleta AS "Boleta de pago", bol.quincena AS "Quincena", bol.idmes AS "Código mes", mes.mes AS "Mes", bol.anyo AS 
        "Año" FROM tblboleta bol INNER JOIN tblpersona per ON bol.idpersona = per.idpersona INNER JOIN tblmes 
        mes ON bol.idmes = mes.idmes ORDER BY mes.idmes ASC';
        $rsMostrar = $bdConexion->ejecutarSql($sqlMostrar);

        print '<script type="text/javascript" src="../js/listar.js"></script>
                <table  class="table table-condensed table-hover" id="lista"><thead >
                <tr>
                    <th>Código</th>
                    <th>Empleado</th>
                    <th>Boleta de pago</th>
                    <th>Quincena</th>
                    <th>Mes</th>
                    <th>Año</th>
                </tr>
            </thead><tbody>';

            while($fila = mysqli_fetch_array($rsMostrar)){
                $imagen = $fila['Boleta de pago'];
                print "
                <tr>
                    <td>".$fila['Código']."</td>
                    <td>".$fila['Empleado']."</td>
                    <td><a href=".$fila['Boleta de pago']." target='_blank'><img src=".$fila['Boleta de pago']." style='width:100px;height:100px;'></a></td>
                    <td>".$fila['Quincena']."</td>
                    <td>".$fila['Mes']."</td>
                    <td>".$fila['Año']."</td>
                </tr> ";
            }//Fin while
            print "
                </tbody></table>";   
    }else if($rol == 3 || $rol == 4 || $rol == 5 || $rol == 6 || $rol == 7 || $rol == 8 || $rol == 9 || $rol == 10 || $rol == 11 || $rol == 12 || $rol == 13){
        $sqlMostrar ='SELECT bol.idboleta AS "Código", bol.idpersona AS "Código empleado", per.nombre AS 
        "Empleado", bol.boleta AS "Boleta de pago", bol.quincena AS "Quincena", bol.idmes AS "Código mes", mes.mes AS "Mes", bol.anyo AS 
        "Año" FROM tblboleta bol INNER JOIN tblpersona per ON bol.idpersona = per.idpersona INNER JOIN tblmes 
        mes ON bol.idmes = mes.idmes WHERE bol.idpersona = '.$idPersona.' ORDER BY mes.idmes ASC';
        $rsMostrar = $bdConexion->ejecutarSql($sqlMostrar);

        print '<script type="text/javascript" src="../js/listar.js"></script>
                <table  class="table table-condensed table-hover" id="lista"><thead >
                <tr>
                    <th>Código</th>
                    <th>Empleado</th>
                    <th>Boleta de pago</th>
                    <th>Quincena</th>
                    <th>Mes</th>
                    <th>Año</th>
                </tr>
            </thead><tbody>';

            while($fila = mysqli_fetch_array($rsMostrar)){
                $imagen = $fila['Boleta de pago'];
                print "
                <tr>
                    <td>".$fila['Código']."</td>
                    <td>".$fila['Empleado']."</td>
                    <td><a href=".$fila['Boleta de pago']." target='_blank'><img src=".$fila['Boleta de pago']." style='width:100px;height:100px;'></a></td>
                    <td>".$fila['Quincena']."</td>
                    <td>".$fila['Mes']."</td>
                    <td>".$fila['Año']."</td>
                </tr> ";
            }//Fin while
            print "
                </tbody></table>";
    }
    break;

    default:
        print "<div class='container'>
         <div class='alert alert-danger alert-dismissable'>
             <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
             <strong>Ha ocurrido un error.</strong>
         </div>
        </div>";
    break;
}//Fin switch
?>