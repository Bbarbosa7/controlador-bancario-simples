<?php

namespace Source\App;

class User
{
    private $firstName;
    private $lastName;

    /**
     * __construct
     *
     * @param  $firstName
     * @param  $lastName
     */
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}
