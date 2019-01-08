<?php

class Category {
    /**
     * @var string
     */
	private $name;

    /**
     * @var array
     */
	private $children;

    /**
     * Gender constructor.
     * @param $name
     */
	public function __construct($name){
		$this->name = $name;
	}
    /**
     * @return string
     */
	public function getName(){
		return $this->name;
	}
    /**
     * @param $name
     */
	public function setName($name){
		$this->name = $name;
	}
    /**
     * @param Gender $gender
     */
	public function addChildren(Category $gender){
		$this->children[] = $gender;
	}

    /**
     * @return null
     */
	public function getChildren(){
		return ($this->children) ? $this->children : [];
	}
}