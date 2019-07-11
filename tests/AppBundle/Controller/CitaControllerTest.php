<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Entity\Cita;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use JMS\Serializer\SerializerBuilder;
class CitaControllerTest extends WebTestCase
{
    const RUTA_API1 = 'api/v1/cita';
    public function testCreateCita(){
        $data = array(
            'CONTENT_TYPE' => 'application/json'
        );
        $client = static::createClient();
        $cita=new Cita();
        $cita->setFecha("2019-05-11");
        $serializer = SerializerBuilder::create()->build();
        $content=$serializer->serialize($cita,"json");
        $client->request('POST', self::RUTA_API1."/1",array(),array(), $data,$content);
        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }
}
