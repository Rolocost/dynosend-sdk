<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Blacklist extends Base {
    public function getSubject()
    {
        return 'blacklist';
    }
    
    public function check($email) {
        $params = ["email" => $email];
        return $this->makeRequest(null, 'POST', $params, null);
    }
    
    public function add($email) {
        $params = ["email" => $email];
        return $this->makeRequest(null, 'POST', $params, null);
    }


}