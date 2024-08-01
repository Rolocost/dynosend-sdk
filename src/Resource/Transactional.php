<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Transactional extends Base {
    public function getSubject()
    {
        return 'transactional';
    }

    public function sendmessage($params) {
        return $this->makeRequest(null, 'POST', $params, null);
    }
}