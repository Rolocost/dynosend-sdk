<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Event extends Base {
    public function getSubject()
    {
        return '';
    }

    public function sendevent($params) {
        return $this->makeRequest('events', 'POST', $params);
    }
}