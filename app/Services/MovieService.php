<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class MovieService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('omdb.base_url'),
        ]);

        $this->apiKey = config('omdb.api_key');
    }

    public function search($query, $page = 1)
    {
        try {

            $response = $this->client->get('/', [
                'query' => [
                    'apikey' => $this->apiKey,
                    's'       => $query,
                    'page'    => $page,
                ]
            ]);

            $data = json_decode(
                $response->getBody()->getContents(),
                true
            );

            return [
                'movies' => $data['Search'] ?? [],
                'total'  => $data['totalResults'] ?? 0,
                'error'  => $data['Error'] ?? null,
            ];

        } catch (GuzzleException $e) {

            Log::error($e->getMessage());

            return [
                'movies' => [],
                'total'  => 0,
                'error'  => 'Failed to fetch movies'
            ];
        }
    }
    public function detail($id)
{
    try {

        $response = $this->client->get('/', [
            'query' => [
                'apikey' => $this->apiKey,
                'i'      => $id,
            ]
        ]);

        return json_decode(
            $response->getBody()->getContents(),
            true
        );

    } catch (GuzzleException $e) {

        Log::error($e->getMessage());

        return [];
    }
}
}