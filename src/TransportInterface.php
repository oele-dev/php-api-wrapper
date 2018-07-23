<?php

namespace Starif\ApiWrapper;

interface TransportInterface
{
    public function rawRequest($endpoint, array $data = [], $method = 'get');

    public function request($endpoint, array $data = [], $method = 'get'): array;
}