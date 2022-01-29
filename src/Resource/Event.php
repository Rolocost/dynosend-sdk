<?php

namespace Dynosend\Resource;

use Dynosend\Resource\Base;

class Event extends Base {
    public function getSubject()
    {
        return 'events';
    }

    public function sendevent($params) {
        return $this->makeRequest('/' . 'events', 'POST', $params);
    }
}