<?php
class Usuario
{
	/*************************************
	 *  VARIABLES
	 *************************************/
	private $id;
	private $nombre;
	private $apellido;
	private $cedula;
	private $codigo;
	private $direccion;
	private $telefono;
	private $anopromo;
	private $estudios;
	private $clave;
	private $tipo;
	private $foto;


	/*************************************
	 *  CONSTRUCTORES
	 *************************************/
	function __construct()
	{
	}

	function __construct1($id, $nombre, $apellido, $cedula, $codigo, $direccion, $telefono, $anopromo, $estudios, $clave, $tipo, $foto)
	{
		$this->setId($id);
		$this->setNombre($nombre);
		$this->setApellido($apellido);
		$this->setCedula($cedula);
		$this->setCodigo($codigo);
		$this->setDireccion($direccion);
		$this->setTelefono($telefono);
		$this->setAnopromo($anopromo);
		$this->setEstudios($estudios);
		$this->setClave($clave);
		$this->setTipo($tipo);
		$this->setFoto($foto);
	}

	/*************************************
	 *  FUNCIONES
	 *************************************/
	/**
	 * Metodo que permite saber si por un codigo,clave y tipo usuario recibido existe un usuario. 
	 */
	public function userExists($codigo, $clave, $tipo_usuario)
	{
		$db = Db::getConnect();
		$md5Clave = md5($clave);
		$query = $db->prepare('SELECT * FROM usuarios 
											 WHERE codigo = :codigo AND clave = :clave
												   AND tipo = :tipo');
		$query->execute([
			'codigo' => $codigo,
			'clave' => $md5Clave,
			'tipo' => $tipo_usuario
		]);

		// ME TRAE EL NUMERO DE FILAS ENCONTRADAS
		if ($query->rowCount()) {

			foreach ($query as $currentUser) {
				$this->id = $currentUser['id'];
				$this->tipo = $currentUser['tipo'];
				$this->nombre = $currentUser['nombre'];
				$this->apellido = $currentUser['apellido'];
				$this->cedula = $currentUser['cedula'];
				$this->foto = $currentUser['foto'];
				$this->direccion = $currentUser['direccion'];
				$this->telefono = $currentUser['telefono'];
				$this->estudios = $currentUser['estudios'];
				$this->anopromo = $currentUser['anopromo'];
				$this->codigo = $currentUser['codigo'];
			}
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Función que trae todos los egresados de la carrera.
	 */
	public static function all()
	{
		$db = Db::getConnect();
		$listaUsuario = [];

		$select = $db->query('SELECT * FROM usuarios WHERE tipo=2 order by id');

		foreach ($select->fetchAll() as $usuario) {
			$user= new Usuario();

			$user->setId($usuario['id']);
			$user->setNombre($usuario['nombre']);
			$user->setApellido($usuario['apellido']);
			$user->setCedula($usuario['cedula']);
			$user->setCodigo($usuario['codigo']);
			$user->setDireccion($usuario['direccion']);
			$user->setEstudios($usuario['estudios']);
			$user->setTipo($usuario['tipo']);
			$user->setClave($usuario['clave']);
			$user->setAnopromo($usuario['anopromo']);
			$user->setTelefono($usuario['telefono']);
			$user->setFoto($usuario['foto']);

			$listaUsuario[] = $user;
		}
		return $listaUsuario;
	}

	public  function toString($id){

		$db = Db::getConnect();
        $query = $db->prepare('SELECT * FROM usuarios 
											 WHERE codigo = :id');
		$query->execute([
			':id' => $id
			
		]);
		$user=null;
		foreach ($query as $usuario) {
			$user= new Usuario();

			$user->setId($usuario['id']);
			$user->setNombre($usuario['nombre']);
			$user->setApellido($usuario['apellido']);
			$user->setCedula($usuario['cedula']);
			$user->setCodigo($usuario['codigo']);
			$user->setDireccion($usuario['direccion']);
			$user->setEstudios($usuario['estudios']);
			$user->setTipo($usuario['tipo']);
			$user->setClave($usuario['clave']);
			$user->setAnopromo($usuario['anopromo']);
			$user->setTelefono($usuario['telefono']);
			$user->setFoto($usuario['foto']);

		}
		
		return $user;
	}
	/*************************************
	 *  GETTER Y SETTERS
	 *************************************/
	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}
	public function getCedula()
	{
		return $this->cedula;
	}

	public function setCedula($cedula)
	{
		$this->cedula = $cedula;
	}
	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}

	public function getDireccion()
	{
		return $this->direccion;
	}

	public function setDireccion($direccion)
	{
		$this->direccion = $direccion;
	}
	public function getTelefono()
	{
		return $this->telefono;
	}

	public function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}
	public function getAnopromo()
	{
		return $this->anopromo;
	}

	public function setAnopromo($anopromo)
	{
		$this->anopromo = $anopromo;
	}

	public function getEstudios()
	{
		return $this->estudios;
	}

	public function setEstudios($estudios)
	{
		$this->estudios = $estudios;
	}

	public function getClave()
	{
		return $this->clave;
	}

	public function setClave($clave)
	{
		$this->clave = $clave;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}


	public function getFoto()
	{
		return $this->foto;
	}

	public function setFoto($foto)
	{
		$this->foto = $foto;
	}
}
