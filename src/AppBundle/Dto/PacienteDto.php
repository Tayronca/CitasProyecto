<?php


namespace AppBundle\Dto;

use AppBundle\Entity\Paciente;
use JMS\Serializer\Annotation\Type;

class PacienteDto
{

    /**
     * @Type("int")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $nombre;

    /**
     * @Type("string")
     */
    private $ci;

    /**
     * @Type("string")
     */
    private $historiaClinica;

    /**
     * PacienteDto constructor.
     */
    public function __construct(Paciente $paciente)
    {
        $this->id = $paciente->getId();
        $this->nombre = $paciente->getNombre();
        $this->ci = $paciente->getCi();
        $this->historiaClinica = $paciente->getHistoriaClinica();
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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * @param mixed $ci
     */
    public function setCi($ci)
    {
        $this->ci = $ci;
    }

    /**
     * @return mixed
     */
    public function getHistoriaClinica()
    {
        return $this->historiaClinica;
    }

    /**
     * @param mixed $historiaClinica
     */
    public function setHistoriaClinica($historiaClinica)
    {
        $this->historiaClinica = $historiaClinica;
    }


}