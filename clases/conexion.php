<?php
//PARAMETROS
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBNAME','servicel');

class Conexion
{
    protected $conexion;
	public $ultimoId;
    //CREANDO METODO PARA CONECTAR
	public function __construct()
    {
		$this->conexion = mysqli_connect(HOST, USER, PASS,DBNAME);
                mysqli_set_charset($this->conexion,'utf8');
		if (!$this->conexion) DIE("Lo sentimos, no se ha podido
					conectar con MySQL: " . mysqli_error());
		        return true;
	}//Fin del constructor

	//CREANDO METODO PARA DESCONECTAR
	public function desconectar()
    {
        if ($this->conexion) {
            mysqli_close($this->conexion);
        }
    }

 	//METODO PARA EJECUTARSQL
    public function ejecutarSql($sql)
    {
		$rs = mysqli_query($this->conexion,$sql);
		if(!$rs)
		{
			print "<br><br><br><br><div class='container'>
	            <div class='alert alert-danger alert-dismissable'>
	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	                <strong>¡Ocurrió un error!</strong>
	            </div>
	           </div>";
	           $rs = 2;
		}

		//Programacion para obtener el ultimo ID procesado
		$sql	= "SELECT last_insert_id();";
		$rsId	= mysqli_query($this->conexion,$sql);
		$id		= mysqli_fetch_row($rsId);
		$this->ultimoId = $id[0];

		//retornando valor de rs
		return $rs;
    }//Fin de ejecutar

	//PROGRAMANDO METODO PARA INSERTAR REGISTROS
	public function insertarDB($tabla,$campos,$valores)
	{
		$sql = "INSERT INTO $tabla($campos) VALUES($valores)";
		$rs = $this->ejecutarSql($sql);
		return true;
	}//Fin de Insertar

	//PROGRAMANDO METODO PARA ACTUALIZAR
	public function actualizarDB($tabla,$campos,$condicion)
	{
		$sql = "UPDATE $tabla SET
					$campos
				WHERE $condicion";

		$rs = $this->ejecutarSql($sql);
		return true;
	}

	//PROGRAMANDO METODO PARA ELIMINAR
	public function eliminarDB($tabla,$condicion)
	{
		$sql = "DELETE FROM $tabla WHERE $condicion";
		$rs = $this->ejecutarSql($sql);
		return true;
	}

	//METODO PARA LLENAR SELECT
	public function llenarSelect($nombre,$sql,$indice,$tabla)
	{
		$rs = $this->ejecutarSql($sql);
		print "<select name='$nombre' id='$nombre' class='form-control'>
					<option value='0'>Selecccionar  ".$tabla."</option>";
		while($fila=mysqli_fetch_array($rs))
		{
			if($fila[0]==$indice)
				print "<option value='".$fila[0]."' selected>".$fila[1]."</option>";
			else
				print "<option value='".$fila[0]."'>".$fila[1]."</option>";
		}
		print "</select>";
	}//Fin de select

	//METODO PARA LLENAR SELECT
	public function llenarSelectMaterial($nombre,$sql,$indice,$tabla)
	{
		$rs = $this->ejecutarSql($sql);
		print "<select name='$nombre' id='$nombre' class='form-control'>
					<option value='0'>Selecccionar  ".$tabla."</option>";
		while($fila=mysqli_fetch_array($rs))
		{
			if($fila[0]==$indice)
				print "<option value='".$fila[0]."' selected>".$fila[1]."</option>";
			else
				print "<option value='".$fila[0]."'>".$fila[1].' , en stock: '.$fila[2]."</option>";
		}
		print "</select>";
	}//Fin de select

	public function llenarText($nombre,$sql)
	{
		$rs = $this->ejecutarSql($sql);
		while($fila=mysqli_fetch_array($rs)){
			print "<input type='hidden' class='form-control' id='$nombre' name='$nombre' 
			readonly='true' value=".$fila[0].">";
		}
	}//Fin de select

	public function llenarText2($nombre,$sql)
	{
		$rs = $this->ejecutarSql($sql);
		while($fila=mysqli_fetch_array($rs)){
			print "<input type='text' class='form-control' id='$nombre' name='$nombre' 
			readonly='true' value=".$fila[0].">";
		}
	}//Fin de select

	public function retornarIdPersona($sql){
		$rs = $this->ejecutarSql($sql);
		while($fila=mysqli_fetch_array($rs)){
			$idPersona=$fila[0];
			print $idPersona;
		}
	}

	//METODO UTILIZADO PARA RETORNAR EL ULTIMO ID INSERTADO
	public function retornarId()
	{
		return $this->ultimoId;
	}//Fin de retornarId

}//Fin de la clase conexion

$bdConexion = new Conexion();
?>