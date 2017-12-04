<?php


namespace App\Controller;


use Liip\FunctionalTestBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->loadFixtureFiles([
            __DIR__.'/../fixtures/task.yml',
        ]);
    }

    public function test()
    {
        $client = static::createClient();
        $client->request('GET', '/task/1');

        $this->assertEquals('task: test1', $client->getResponse()->getContent());
    }
}
