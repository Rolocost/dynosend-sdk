<?php

namespace Dynosend;

use Dynosend\Resource\Base;
use Dynosend\Resource\Campaign;
use Dynosend\Resource\MailList;
use Dynosend\Resource\Subscriber;
use Dynosend\Resource\Notification;
use Dynosend\Resource\File;

class Client {
    private $token;
    private $uri;

    public function __construct($uri, $token)
    {
        $this->uri = $uri;
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

    public function list() {
        return new MailList([], $this);
    }

    public function subscriber() {
        return new Subscriber([], $this);
    }


    public function notification() {
        return new Notification([], $this);
    }

    public function loginToken() {
        $base = new Base([], $this);
        return $base->makeRequest('login-token', 'POST');
    }
}