<?php

namespace GhazanfarMir\Lever\Api;

use GuzzleHttp;

/**
 * Class Client.
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
     * @param null $site
     */
    public function __construct($site = null)
    {
        if (! empty($site)) {
            $this->site = $site;
        }

        $this->httpClient = new GuzzleHttp\Client();
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @param null $params
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    public function get($params = null)
    {
        return $this->request('GET', $params);
    }

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    public function getJson()
    {
        return $this->request('GET', ['mode' => 'json']);
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
     * @throws \Exception
     */
    public function request($method, $params)
    {
        $url = $this->buildUrl($params);

        $response = $this->httpClient->request($method, $url);

        return $response->getBody();
    }

    /**
     * @param $params
     * @return string
     * @throws \Exception
     */
    public function buildUrl($params)
    {
        if (empty($this->site)) {
            throw new \Exception('Error: no employer/site is configured for Lever Api..');
        }

        $url = $this->base.$this->site;

        $url .= isset($params) ? ('/?'.http_build_query($params)) : null;

        return $url;
    }
}
