<?php
class seccion {
	private $id;
	private $nombre;
	private $escuela;

	public function getId(){
         return $this->id;
	}	

	public function setId($id){
            $this->id = $id;
	}	

	public function getNombre(){
         return $this->nombre;
	}	

	public function setNombre($nombre){
            $this->nombre = $nombre;
	}	
	public function getEscuela(){
         return $this->escuela;
	}	

	public function setEscuela($escuela){
            $this->escuela = $escuela;
	}	
	}