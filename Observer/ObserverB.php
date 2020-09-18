<?php

class ObserverB extends ObserverAbstract
{
	
	protected $name;
	protected $secretary;
	public function __construct(string $name, SubjectInterface $secretary) {
		$this->name = $name;
		$this->secretary = $secretary;
	}
	public function update($news) {
		echo $this->name.$news."guanchazheB".'</br>';
	}
	
}


?>