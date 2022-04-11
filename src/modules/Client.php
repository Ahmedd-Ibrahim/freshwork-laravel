<?php
namespace Freshwork\modules;

use Exception;
use GuzzleHttp\Psr7\Uri;

class Client extends \GuzzleHttp\Client
{
    private $response;

    /**
     * Set up Guzzle client
     */
    public function __construct($type = 'api')
    {
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
        if ($type == 'api') {
            $headers['Authorization'] = 'Token token=' . config('freshwork.api_key');
        }

        $uri = new Uri(sprintf('https://%s.myfreshworks.com/crm/sales/%s/', config('freshwork.domain'), $type));

        parent::__construct([
            'base_uri' => $uri,
            'headers' => $headers
        ]);
    }

    public function handelRequest(string $method, $uri = '', array $options = [])
    {
        try {
            $this->response = parent::request($method, $uri, $options);
        } catch (\Exception $e) {
            throw new Exception($e->getResponse()->getBody()->getContents());
        }

        return $this->toObject();
    }

    /**
     * Return the JSON response as an object
     * @return Object
     */
    public function toObject(): Object
    {
        return json_decode($this->response->getBody());
    }

    /**
     * Return the JSON response as an array
     * @return Array
     */
    public function toArray(): array
    {
        return json_decode($this->response->getBody(), true);
    }
}
