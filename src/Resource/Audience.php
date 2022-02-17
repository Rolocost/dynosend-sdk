<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Audience extends Base {
    public function getSubject()
    {
        return 'audiences';
    }

    public function addCustomField($uid, $params) {
        return $this->makeRequest($uid . '/' . 'add-field', 'POST', $params);
    }
	
	public function create($params) {
        return $this->makeRequest('', 'POST', $params);
    }
}