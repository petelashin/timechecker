<?php

namespace TimeCheckerPackage;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TimeChecker
{
    private HttpClientInterface $client;

    public function fetchTime(string $ip = null) {
        $response = $this->client->request(
            'GET',
            'http://worldtimeapi.org/api/ip'
        );
    }


}