<?php
   class Tipo{
    private $id;
    private $descripcion;
    
    
       
    function __construct($id,$descripcion)
	{
		$this->setId($id);
		$this->setDescripcion($descripcion);
		
	} 
       
    public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}
    
    public function getDescripcion(){
		return $this->descripcion;
	}
 
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
    
    
       
    public static function save($tipo){
		$db=Db::getConnect();
		
		$insert=$db->prepare('INSERT INTO tipo VALUES (:id, :descripcion)');
        $insert->bindValue('id',$tipo->getId());
		$insert->bindValue('descripcion',$tipo->getDescripcion());
		
		$insert->execute();
	}
 
	public static function all(){
		$db=Db::getConnect();
		$listaTipo=[];
 
		$select=$db->query('SELECT * FROM tipo order by id');
 
		foreach($select->fetchAll() as $tipo){
			$listaTipo[]=new Tipo($tipo['id'],$tipo['descripcion']);
		}
		return $listaTipo;
	}
 
	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM tipo WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();
 
		$tipoDb=$select->fetch();
 
 
		$tipo = new Tipo ($tipoDb['id'],$tipoDb['descripcion']);
		
		return $tipo;
 
	}
 
	public static function update($tipo){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE tipo SET descripcion=:descripcion');
		$update->bindValue('id', $tipo->getId());
		$update->bindValue('descripcion', $tipo->getTipo());
		
		$update->execute();
	}
 
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM tipo WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}
?>