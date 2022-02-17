<?php

namespace DynosendSDK\Resource;

use DynosendSDK\Resource\Base;

class Contact extends Base {
    public function getSubject()
    {
        return 'contacts';
    }

    public function findInAudiences($email)
    {
        return $this->makeRequest('email/' . $email, 'GET');
    }
	
	public function identify($email, $params)
    {
        return $this->makeRequest($email, 'GET', $params);
    }
	
	public function update($email, $params)
    {
        return $this->makeRequest($email, 'PATCH', $params);
    }
	
	public function create($params)
    {
        return $this->makeRequest('','POST', $params);
    }

    public function subscribe($email, $params)
    {
        return $this->makeRequest($email . '/subscribe', 'PATCH', $params);
    }

    public function unsubscribe($email, $params)
    {
        return $this->makeRequest($email . '/unsubscribe', 'PATCH', $params);
    }
	
	public function deletecontact($email, $params)
    {
        return $this->makeRequest($email, 'DELETE', $params);
    }
	

}