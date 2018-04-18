<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;

class BackendTest extends WebTestCase
{
    /**
     * @dataProvider queryParametersProvider
     */
    public function testBackendPagesLoadCorrectly($queryParameters)
    {
        $client = static::createClient();
        $client->request('GET', '/admin/?'.http_build_query($queryParameters));

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function queryParametersProvider()
    {
        return array(
            array(
                array('action' => 'list', 'entity' => 'Variety'),
            ),
            array(
                array('action' => 'list', 'entity' => 'Variety', 'page' => 2),
            ),
            array(
                array('action' => 'search', 'entity' => 'Variety', 'query' => 'cat'),
            ),
            array(
                array('action' => 'show', 'entity' => 'Variety', 'id' => 1),
            ),
            array(
                array('action' => 'edit', 'entity' => 'Variety', 'id' => 1),
            ),

            array(
                array('action' => 'list', 'entity' => 'Plant'),
            ),
            array(
                array('action' => 'list', 'entity' => 'Plant', 'page' => 2),
            ),
            array(
                array('action' => 'search', 'entity' => 'Plant', 'query' => 'lorem'),
            ),
            array(
                array('action' => 'show', 'entity' => 'Plant', 'id' => 1),
            ),
            array(
                array('action' => 'edit', 'entity' => 'Plant', 'id' => 1),
            ),
        );
    }
}
