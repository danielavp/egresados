<?php
   class Oferta{
    private $id;
    private $ciudad;
    private $descripcion;
    private $experiencia;
    private $empresa;
    private $cargo;
    private $vacantes;
	private $usuario;
	private $fecha;
    
    function __construct($id,$ciudad,$descripcion,$experiencia,$empresa,$cargo,$vacantes,$usuario,$fecha)
	{
		$this->setId($id);
		$this->setCiudad($ciudad);
		$this->setDescripcion($descripcion);
		$this->setExperiencia($experiencia);
		$this->setEmpresa($empresa);
		$this->setCargo($cargo);
		$this->setVacantes($vacantes);
		$this->setUsuario($usuario);
		$this->setFecha($fecha);
		
		
		
	
	}
    public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}


    public function getCiudad(){
		return $this->ciudad;
	}
 
	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}
    public function getDescripcion(){
		return $this->descripcion;
	}
 
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
 

	public function getExperiencia(){
		return $this->experiencia;
	}
 
	public function setExperiencia($experiencia){
		$this->experiencia = $experiencia;
	}
    
	public function getEmpresa(){
		return $this->empresa;
	}
 
	public function setEmpresa($empresa){
		$this->empresa = $empresa;
	}

	public function getCargo(){
		return $this->cargo;
	}
 
	public function setCargo($cargo){
		$this->cargo = $cargo;
	}

	public function getVacantes(){
		return $this->vacantes;
	}
 
	public function setVacantes($vacantes){
		$this->vacantes = $vacantes;
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

    public static function save($oferta){
		$db=Db::getConnect();
		//var_dump($galpon);
 		//die();
		$insert=$db->prepare('INSERT INTO oferta VALUES (:id, :ciudad,:descripcion, :experiencia,:empresa, :cargo ,:vacantes,:usuario,:fecha)');
		$insert->bindValue('id',$oferta->getId());
		$insert->bindValue('ciudad',$oferta->getCiudad());
		$insert->bindValue('descripcion',$oferta->getDescripcion());
        $insert->bindValue('experiencia',$oferta->getExperiencia());
        $insert->bindValue('empresa',$oferta->getEmpresa());
        $insert->bindValue('cargo',$oferta->getCargo());
        $insert->bindValue('vacantes',$oferta->getVacantes());
		$insert->bindValue('usuario',$oferta->getUsuario());
		$insert->bindValue('fecha',$oferta->getFecha());

		$insert->execute();
	}
    public static function all(){
		$db=Db::getConnect();
		$listaoferta=[];
 
		$select=$db->query('SELECT * FROM oferta order by id');
 
		foreach($select->fetchAll() as $oferta){
			$listaoferta[]=new Oferta($oferta['id'],$oferta['ciudad'],$oferta['descripcion'],$oferta['experiencia'],$oferta['empresa'],$oferta['cargo'],$oferta['vacantes'],$oferta['usuario'],$oferta['fecha']);
		}
		return $listaoferta;
	}
 
	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM oferta WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();
 
		$ofertaDb=$select->fetch();
 
 
		$oferta = new Oferta($ofertaDb['id'],$ofertaDb['ciudad'],$ofertaDb['descripcion'],$ofertaDb['experiencia'],$ofertaDb['empresa'],$ofertaDb['cargo'],$ofertaDb['vacantes'],$ofertaDb['usuario'],$ofertaDb['fecha']);
		//var_dump($lote);
		//die();
		return $oferta;
 
	}

	



 
	public static function update($oferta){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE oferta SET ciudad=:ciudad,  descripcion=:descripcion , experiencia=:experiencia,empresa=:empresa, cargo=:cargo ,vacantes=:vacantes ,usuario=:usuario, fecha=:fecha WHERE id=:id');
		$update->bindValue('id',$oferta->getId());
		$update->bindValue('ciudad',$oferta->getCiudad());
		$update->bindValue('descripcion',$oferta->getDescripcion());
        $update->bindValue('experiencia',$oferta->getExperiencia());
        $update->bindValue('empresa',$oferta->getEmpresa());
        $update->bindValue('cargo',$oferta->getCargo());
        $update->bindValue('vacantes',$oferta->getVacantes());
		$update->bindValue('usuario',$oferta->getUsuario());
		$update->bindValue('fecha',$oferta->getFecha());
		$update->execute();
	}
 
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM oferta WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
    
}
?>