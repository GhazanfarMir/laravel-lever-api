<?php

namespace GhazanfarMir\Lever\Api;

use GuzzleHttp;

/**
 * Class Client
 * @package GhazanfarMir\Lever\Api
 */
class Client
{
    /**
     * @var
     */
    protected $site;

    /**
     * @var string
     */
    protected $base = 'https://api.lever.co/v0/postings/';

    /**
     * @var
     */
    protected $httpClient;

    /**
     * Client constructor.
     * @param $site
     */
    public function __construct($site)
    {
        $this->site = $site;

        $this->httpClient = new GuzzleHttp\Client();
    }

    /**
     * @param null $params
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function get($params = null)
    {
        return $this->request('GET', $params);
    }

    /**
     * @param $params
     */
    public function post($params)
    {
        // silence is power
    }

    /**
     * @param $method
     * @param $params
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function request($method, $params)
    {

        $url = $this->buildUrl($params);

        return $this->httpClient->request($method, $url)->getBody();

    }

    /**
     * @param $params
     * @return string
     */
    public function buildUrl($params)
    {

        $url = $this->base . $this->site;

        $url .= isset($params)? ('/?' . http_build_query($params)):null;

        return $url;

    }
}