<?php

namespace App\Component\Post\Model;

/**
 * @Entity
 * @Table(name="post")
 */
class Post
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
}
