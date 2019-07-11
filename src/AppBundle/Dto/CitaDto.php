<?php


namespace AppBundle\Dto;

use AppBundle\Entity\Cita;
use AppBundle\Entity\Paciente;
use JMS\Serializer\Annotation\Type;
class CitaDto
{

    /**
     * @Type("int")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $fecha;

    /**
     * @Type("AppBundle\Dto\PacienteDto")
     */
    private $paciente;

    /**
     * CitaDto constructor.
     */
    public function __construct(Cita $cita)
    {
        $this->id=$cita->getId();
        $this->fecha=$cita->getFecha();
        $this->paciente=new PacienteDto($cita->getPaciente());
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
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * @param mixed $paciente
     */
    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;
    }


}