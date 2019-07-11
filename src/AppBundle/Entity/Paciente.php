<?php

namespace AppBundle\Entity;

/**
 * Paciente
 */
class Paciente
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var int
     */
    private $ci;

    /**
     * @var string
     */
    private $historiaClinica;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Paciente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ci
     *
     * @param integer $ci
     *
     * @return Paciente
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return int
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set historiaClinica
     *
     * @param string $historiaClinica
     *
     * @return Paciente
     */
    public function setHistoriaClinica($historiaClinica)
    {
        $this->historiaClinica = $historiaClinica;

        return $this;
    }

    /**
     * Get historiaClinica
     *
     * @return string
     */
    public function getHistoriaClinica()
    {
        return $this->historiaClinica;
    }
}

