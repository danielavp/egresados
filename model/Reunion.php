<?php
   class Reunion{

	/*************************************
	 *  VARIABLES
	 *************************************/
    private $id;
    private $fecha;
    private $descripcion;
    private $lugar;
	private $hora;
	private $usuario;

    /*************************************
	 *  CONSTRUCTORES
	 *************************************/
	function __construct()
	{
	}
       
    function __construct1($id,$fecha,$descripcion,$lugar,$hora,$usuario)
	{
		$this->setId($id);
		$this->setFecha($fecha);
		$this->setDescripcion($descripcion);
		$this->setLugar($lugar);		
        $this->setHora($hora);
		$this->setUsuario($usuario);
	} 

	/*************************************
	 *  FUNCIONES
	 *************************************/
	public static function all(){
		$db=Db::getConnect();
		$listaReunion=[];
 
		$select=$db->query('SELECT * FROM reunion order by id');
 
		foreach($select->fetchAll() as $reunion){
			$aux= new Reunion();
			$aux->setId($reunion['id']);
			$aux->setLugar($reunion['lugar']);
			$aux->setHora($reunion['hora']);
			$aux->setDescripcion($reunion['descripcion']);
			$aux->setFecha($reunion['fecha']);
			$aux->setUsuario($reunion['usuario']);

			$listaReunion[]= $aux;
		}
		
		return $listaReunion;
	}

       
    public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}
	public function getFecha(){
		return $this->fecha;
	}
 
	public function setFecha($fecha){
		$this->fecha = $fecha;
	}
    
    public function getDescripcion(){
		return $this->descripcion;
	}
 
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
    public function getLugar(){
		return $this->lugar;
	}
 
	public function setLugar($lugar){
		$this->lugar= $lugar;
	}
    public function getHora(){
		return $this->hora;
	}
 
	public function setHora($hora){
		$this->hora = $hora;
	}

	public function getUsuario(){
		return $this->usuario;
	}
 
	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}
    
    public static function save($reunion){
		$db=Db::getConnect();
		echo $reunion->getFecha();
		$insert=$db->prepare('INSERT INTO reunion VALUES (:id,:fecha,:descripcion,:lugar,:hora,:usuario)');
        $insert->bindValue('id',$reunion->getId());
		$insert->bindValue('fecha',$reunion->getFecha());
		$insert->bindValue('descripcion',$reunion->getDescripcion());
		$insert->bindValue('lugar',$reunion->getLugar());
		$insert->bindValue('hora',$reunion->getHora());
		$insert->bindValue('usuario',$reunion->getUsuario());
		$insert->execute();
	}
 

 
	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM reunion WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();
 
		$administradorDb=$select->fetch();
 
 
		 $reunion = new Reunion($reunionDb['id'],$reunionDb['fecha'],$reunionDb['descripcion'],$reunionDb['lugar'],$reunionDb['hora'],$reunionDb['usuario']);

		return $reunion;
 
	}
 
	public static function update($reunion){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE reunion SET id=:id,fecha=:fecha,descripcion=:descripcion,lugar=:lugar,hora=:hora,usuario=:usuario');
		
	
 		$update->bindValue('id',$reunion->getId());
		$update->bindValue('fecha',$reunion->getFecha());
		$update->bindValue('descripcion',$reunion->getDescripcion());
		$update->bindValue('lugar',$reunion->getLugar());
		$update->bindValue('hora',$reunion->getHora());
		$update->bindValue('usuario',$reunion->getUsuario());
		$update->execute();
	}
 
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM reunion WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}
?>