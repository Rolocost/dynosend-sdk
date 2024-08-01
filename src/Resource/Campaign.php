<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Campaign extends Base {
    public function getSubject()
    {
        return 'campaigns';
    }
    
    public function getAll() {
        return $this->makeRequest(null, 'GET', null, null);
    }

    public function find($uid) {
        $params = ["campaign_uid" => $uid];
        return $this->makeRequest(null, 'GET', $params, null);
    }

	public function start($uid)
    {
        $params = ["campaign_uid" => $uid];
        return $this->makeRequest('start' ,'POST', $params, null);
    }
	
	public function pause($uid)
    {
        $params = ["campaign_uid" => $uid];
        return $this->makeRequest('pause' ,'POST', $params, null);
    }
	
	public function resume($uid)
    {
        $params = ["campaign_uid" => $uid];
        return $this->makeRequest('resume' ,'POST', $params, null);
    }


}