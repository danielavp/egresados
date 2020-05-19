<?php
class Capacitacion
{
	private $id;
	private $tema;
	private $fecha;
	private $fecha_fin;
	private $descripcion;
	private $lugar;
	private $hora;
	private $encargado;
	private $usuario;

	function __construct($id, $tema, $fecha, $fecha_fin, $descripcion, $lugar, $hora, $encargado, $usuario)
	{
		$this->setId($id);
		$this->setTema($tema);
		$this->setFecha($fecha);
		$this->setFecha_fin($fecha_fin);
		$this->setDescripcion($descripcion);
		$this->setLugar($lugar);
		$this->setHora($hora);
		$this->setEncargado($encargado);
		$this->setUsuario($usuario);
		// $this->setIdAdministrador($idAdministrador);
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getTema()
	{
		return $this->tema;
	}

	public function setTema($tema)
	{
		$this->tema = $tema;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	public function getFecha_fin()
	{
		return $this->fecha_fin;
	}

	public function setFecha_fin($fecha_fin)
	{
		$this->fecha_fin = $fecha_fin;
	}

	public function getLugar()
	{
		return $this->lugar;
	}

	public function setLugar($lugar)
	{
		$this->lugar = $lugar;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}
	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	public function getHora()
	{
		return $this->hora;
	}

	public function setHora($hora)
	{
		$this->hora = $hora;
	}

	public function getEncargado()
	{
		return $this->encargado;
	}

	public function setEncargado($encargado)
	{
		$this->encargado = $encargado;
	}
	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	}



	/**
	 * Función que agrega una nueva capacitación.
	 */
	public static function save($capacitacion)
	{
		$db = Db::getConnect();

		$insert = $db->prepare('INSERT INTO capacitacion (id,tema,fecha,fecha_fin,lugar,descripcion,hora,encargado,usuario)
		                       VALUES (:id,:tema, :fecha,:fecha_fin,:lugar,:descripcion,:hora, :encargado, :usuario)');

		$insert->execute(array(
			":id" => $capacitacion->getId(),
			":tema" => $capacitacion->getTema(),
			":fecha" => $capacitacion->getFecha(),
			":fecha_fin" => $capacitacion->getFecha_fin(),
			":lugar" => $capacitacion->getLugar(),
			":descripcion" => $capacitacion->getDescripcion(),
			":hora" => $capacitacion->getHora(),
			":encargado" => $capacitacion->getEncargado(),
			":usuario" => $capacitacion->getUsuario()
		));

		if ($insert == true) {
			return true;
		} else {
			return false;
		}
	}

	public static function all()
	{
		$db = Db::getConnect();
		$listaCapacitacion = [];

		$select = $db->query('SELECT * FROM capacitacion order by id');

		foreach ($select->fetchAll() as $capacitacion) {
			$listaCapacitacion[] = new Capacitacion(
				$capacitacion['id'],
				$capacitacion['tema'],
				$capacitacion['fecha'],
				$capacitacion['fecha_fin'],
				$capacitacion['lugar'],
				$capacitacion['descripcion'],
				$capacitacion['hora'],
				$capacitacion['encargado'],
				$capacitacion['usuario']
			);
		}
		return $listaCapacitacion;
	}

	public static function searchById($id)
	{
		$db = Db::getConnect();
		$select = $db->prepare('SELECT * FROM capacitacion WHERE id=:id');
		$select->bindValue('id', $id);
		$select->execute();

		$capacitacionDb = $select->fetch();


		$capacitacion = new Capacitacion(
			$capacitacionDb['id'],
			$capacitacionDb['tema'],
			$capacitacionDb['fecha'],
			$capacitacionDb['fecha_fin'],
			$capacitacionDb['lugar'],
			$capacitacionDb['descripcion'],
			$capacitacionDb['hora'],
			$capacitacionDb['encargado'],
			$capacitacionDb['usuario']
		);
		//var_dump($granja);
		//die();
		return $capacitacion;
	}

	public static function update($capacitacion)
	{
		$db = Db::getConnect();

		$update = $db->prepare('UPDATE capacitacion SET id=:id,tema=:tema, fecha=:fecha,fecha_fin=:fecha_fin,lugar=:lugar,descripcion=:descripcion,hora=:hora,encargado= :encargado, usuario=:usuario WHERE id=:id');
		$update->bindValue('id', $capacitacion->getId());
		$update->bindValue('tema', $capacitacion->geTema());
		$update->bindValue('fecha', $capacitacion->getFecha());
		$update->bindValue('fecha_fin', $capacitacion->getFecha_fin());
		$update->bindValue('lugar', $capacitacion->getLugar());
		$update->bindValue('descripcion', $capacitacion->getDescripcion());
		$update->bindValue('hora', $capacitacion->getHora());
		$update->bindValue('encargado', $capacitacion->getEncargado());
		$update->bindValue('usuario', $capacitacion->getUsuario());
		$update->execute();
	}

	public static function delete($id)
	{
		$db = Db::getConnect();
		$delete = $db->prepare('DELETE  FROM capacitacion WHERE id=:id');
		$delete->bindValue('id', $id);
		$delete->execute();
	}
}
