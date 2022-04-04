<?php
/**
 * Created by PhpStorm.
 * User: jgagnot
 * Date: 19/04/2019
 * Time: 10:48
 */

namespace entity;


class shoppingOrder
{

    private $_id;
    private $_storeId;
    private $_userId;
    private $_userAdressId;
    private $_blocked;
    private $_timestamp;


    public function __construct($array)
    {
        $this->hydrate($array);
    }

    public function hydrate(array $array)
    {
        foreach ($array as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function getId() { return $this->_id;}
    public function setId($id) { $this->_id = $id; }
    public function getStoreId() { return $this->_storeId;}
    public function setStoreId($storeId) { $this->_storeId = $storeId; }
    public function getUserId() { return $this->_userId;}
    public function setUserId($userId) { $this->_userId = $userId; }
    public function getUserAdressId() { return $this->_userAdressId;}
    public function setUserAdressId($userAdressId) { $this->_userAdressId = $userAdressId; }
    public function getBlocked() { return $this->_blocked;}
    public function setBlocked($blocked) { $this->_blocked = $blocked; }
    public function getTimestamp() { return $this->_timestamp;}
    public function setTimestamp($timestamp) { $this->_timestamp = $timestamp; }


    function getClassArray() {
        $array = array();
        foreach($this as $key => $value) {
            $array[$key]=$value;
        }
        return $array;
    }
}