<?php


namespace projetophp\src\model\vo;


class FilePrivVO
{
    private $id;
    private $name;
    private $type;
    private $author;
    private $area;

    /**
     * FilePrivVO constructor.
     * @param $id
     * @param $name
     * @param $type
     * @param $author
     * @param $area
     */
    public function __construct($id, $name, $type, $author, $area)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->author = $author;
        $this->area = $area;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

/*Ciências Exatas e da Terra, Ciências Biológicas, Engenharia / Tecnologia
, Ciências da Saúde, Ciências Agrárias, Ciências Sociais, Ciências Humanas, Lingüística, Letras e Artes.*/

}