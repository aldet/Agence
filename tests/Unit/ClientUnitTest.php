<?php

namespace Tests\Unit;

use App\Client;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ClientUnitTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function canCreateClient()
    {
        /** @var Client $client */
        $client = factory(Client::class)->create();

        $this->assertNotNull($client->id);
    }
}
