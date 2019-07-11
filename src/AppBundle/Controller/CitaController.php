<?php

namespace AppBundle\Controller;

use AppBundle\Dto\CitaDto;
use AppBundle\Entity\Cita;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use JMS\Serializer\SerializerBuilder;

/**
 * @Rest\Route("api/v1/cita")
 */
class CitaController extends AbstractFOSRestController
{
    /**
     * @Rest\Post("/{id}")
     * @SWG\Tag(name="cita")
     * @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="JSON Payload",
     *          required=true,
     *          format="application/json",
     *          @SWG\Schema(
     *              @Model(type=CitaDto::class)
     *          )
     *
     *      )
     * @SWG\Response(
     *     response=201,
     *     description="Return account create ",
     * )
     */
    public function createCita(Request $request, $id)
    {
        $paciente = $this->getDoctrine()->getRepository('AppBundle:Paciente')->find($id);
        if ($paciente !== null) {
            $serializer = SerializerBuilder::create()->build();
            try {
                $citaDto = $serializer->deserialize($request->getContent(), 'AppBundle\Dto\CitaDto', 'json');
                $cita = new Cita();
                $cita->setFecha(new \DateTime($citaDto->getFecha()));
                $cita->setPaciente($paciente);
                $em = $this->getDoctrine()->getManager();
                $em->persist($cita);
                $em->flush();
                return new View("cita created", Response::HTTP_CREATED);
            } catch (\Exception $e) {
                return new View("object json incorrect", Response::HTTP_BAD_REQUES);
            }
        } else {
            return new View("paciente no encontrado", Response::HTTP_BAD_REQUEST);
        }

    }
}
