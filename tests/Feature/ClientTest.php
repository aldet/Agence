<?php

namespace Tests\Feature;

use App\Client;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ClientTest extends TestCase
{
    use DatabaseMigrations;

    /** @var Client $client */
    private $client;

    public function setUp(): void
    {
        parent::setUp();

        $this->client = factory(Client::class)->create();
    }

    /**
     * @test
     */
    public function canBrowseClients()
    {
        $this->get(route('client.index'))
            ->assertSee($this->client->nom_client);
    }

    /**
     * @test
     */
    public function canShowClient()
    {
        $this->get(route('client.show', $this->client))
            ->assertSee($this->client->nom_client);
    }
}
