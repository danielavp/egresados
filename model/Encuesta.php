<?php
   class Encuesta{
	private $id;
	private $tema;
	private $url;
	private $usuario;
	private $fecha;
    
       
    function __construct($id,$tema,$url,$usuario,$fecha)
	{
		$this->setId($id);
		$this->setTema($tema);
		$this->setUrl($url);
		$this->setUsuario($usuario);
		$this->setFecha($fecha);
	} 
       
    
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		return $this->id=$id;
	}
	public function getTema(){
		return $this->tema;
	}
	public function setTema($tema){
		return $this->tema=$tema;
	}
	public function getUrl(){
		return $this->url;
	}
	public function setUrl($url){
		return $this->url=$url;
	}
 
	public function getUsuario(){
		return $this->usuario;
	}
	public function setUsuario($usuario){
		return $this->usuario=$usuario;
	}
	public function getFecha(){
		return $this->fecha;
	}
	public function setFecha($fecha){
		return $this->fecha=$fecha;
	}
    public static function save($encuesta){
		$db=Db::getConnect();
		
		$insert=$db->prepare('INSERT INTO encuesta VALUES (:id, :tema, :url,:usuario,:fecha )');
		$insert->bindValue('id',$encuesta->getId());
		$insert->bindValue('tema',$encuesta->getTema());
		$insert->bindValue('url',$encuesta->getUrl());
		$insert->bindValue('usuario',$encuesta->getUsuario());
		$insert->bindValue('fecha',$encuesta->getFecha());
	

		$insert->execute();
	}
 
	public static function all(){
		$db=Db::getConnect();
		$listaEncuesta=[];
 
		$select=$db->query('SELECT * FROM encuesta order by id');
 
		foreach($select->fetchAll() as $encuesta){
			$listaEncuesta[]=new encuesta($encuesta['id'],$encuesta['tema'],$encuesta['url'],$encuesta['usuario'],$encuesta['fecha']);
		}
		return $listaEncuesta;
	}
 
	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM encuesta WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();
 
		$encuestaDb=$select->fetch();
 
 
		$encuesta = new encuesta($encuestaDb['id'],$encuestaDb['tema'],$encuestaDb['url'],$encuestaDb['usuario'],$encuestaDb['fecha']);

		return $encuesta;
 
	}
 
	public static function update($encuesta){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE encuesta SET id=:id, tema=:tema, url=:url , usuario=:usuario ,fecha=:fecha ');
		
		$update->bindValue('id',$encuesta->getId());
		$update->bindValue('tema',$encuesta->getTema());
		$update->bindValue('url',$encuesta->getUrl());
		$update->bindValue('usuario',$encuesta->getUsuario());
		
		$update->bindValue('fecha',$encuesta->getFecha());

		$update->execute();
	}
 
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM encuesta WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}
?>