<?php

namespace Dynosend;

use Dynosend\Resource\Base;
use Dynosend\Resource\Campaign;
use Dynosend\Resource\Audience;
use Dynosend\Resource\Subscriber;
use Dynosend\Resource\Event;


class Client {
    private $token;
    public $uri = "https://app.dynosend.com";

    public function __construct($token)
    {

        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function campaign() {
        return new Campaign([], $this);
    }

    public function audience() {
        return new Audience([], $this);
    }

    public function subscriber() {
        return new Subscriber([], $this);
    }

    public function event() {
        return new Event([], $this);
    }

    public function loginToken() {
        $base = new Base([], $this);
        return $base->makeRequest('login-token', 'POST');
    }
}