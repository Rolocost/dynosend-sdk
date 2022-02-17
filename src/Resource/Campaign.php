<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Campaign extends Base {
    public function getSubject()
    {
        return 'campaigns';
    }
    
	public function start($uid)
    {
        return $this->makeRequest($uid . '/start', 'POST');
    }
	
	public function pause($uid)
    {
        return $this->makeRequest($uid . '/pause', 'POST');
    }
	
	public function resume($uid)
    {
        return $this->makeRequest($uid . '/resume', 'POST');
    }


}