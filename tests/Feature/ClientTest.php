<?php

namespace Tests\Feature;

use App\Client;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

use function Psy\debug;

class ClientTest extends TestCase
{
    use DatabaseMigrations;

    /** @var Client $client */
    private $client;

    public function setUp(): void
    {
        parent::setUp();

        $this->client = factory(Client::class)->create();
        $this->followingRedirects();
    }

    /**
     * @test
     */
    public function browseClients()
    {
        $this->get(route('client.index'))
            ->assertSee($this->client->nom_client);
    }

    /**
     * @test
     */
    public function addClient()
    {
        /** @var Client $client */
        $client   = factory(Client::class)->make();
        $response = $this->post(route('client.store'), $client->toArray());

        dump($response->header());
        $response->assertSee($client->nom_client);
    }

    /**
     * @test
     */
    public function showClient()
    {
        $this->get(route('client.show', $this->client))
            ->assertSee($this->client->nom_client);
    }

    /**
     * @test
     */
    public function editClient()
    {
        $newInfosClient = factory(Client::class)->raw();
        $this->post(route('client.update', $newInfosClient))
            ->assertStatus(200)
            ->assertSee($newInfosClient['nom_client'])
        ;
    }
}
