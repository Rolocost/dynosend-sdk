<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Contact extends Base {
    public function getSubject()
    {
        return 'contacts';
    }

    public function getAll($params)
    {
        return $this->makeRequest(null, 'GET', $params, null);
    }
	
    public function create($params)
    {
        return $this->makeRequest( null,'POST', $params, null);
    }

	public function identify($params)
    {
        return $this->makeRequest( null,'GET', $params, null);
    }
	
    public function findDuplicates($params)
    {
        return $this->makeRequest('duplicate' ,'GET', $params, null);
    }

    public function update($params)
    {
        return $this->makeRequest('update' ,'PATCH', $params, null);
    }

	public function addtag($params)
    {
        return $this->makeRequest('addtag' ,'PATCH', $params, null);
    }

	public function subscribe($params)
    {
        return $this->makeRequest('subscribe' ,'PATCH', $params, null);
    }
	
	public function unsubscribe($params)
    {
        return $this->makeRequest('unsubscribe' ,'PATCH', $params, null);
    }

	public function deletecontact($params)
    {
        return $this->makeRequest(null ,'DELETE', $params, null);
    }
}