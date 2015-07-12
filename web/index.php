<?php

require_once 'app/bootstrap.php';

use Doctrine\ORM\EntityManager;
use App\Component\User\Model\User;

/* @var $em EntityManager */
$em = $services['em'];


var_dump(User::class);die;
var_dump($em->getRepository(User::class)->find(2));die;
