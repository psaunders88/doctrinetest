<?php

namespace App\Component;

/**
 * @Entity
 * @Table(name="users")
 */
class User
{
    /**
     * Id
     * 
     * @var integer
     * 
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;
    
    /**
     * Name
     * 
     * @var string
     * 
     * @Column(length=140)
     */
    protected $name;
    
    /**
     * Class constructor
     * 
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
