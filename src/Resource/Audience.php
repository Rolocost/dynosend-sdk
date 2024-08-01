<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Audience extends Base {
    public function getSubject()
    {
        return 'audiences';
    }

    public function getAll() {
        return $this->makeRequest(null, 'GET', null, null);
    }

    public function find($uid) {
        $params = ["audience_uid" => $uid];
        return $this->makeRequest(null, 'GET', $params, null);
    }

    public function addCustomField($uid, $params) {
        return $this->makeRequest("add-field", 'POST', array_merge(["audience_uid" => $uid], $params), null);
    }
	
    

}