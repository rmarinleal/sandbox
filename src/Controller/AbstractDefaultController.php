<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class AbstractDefaultController
 * @package App\Controller
 */
class AbstractDefaultController extends AbstractController
{
    /**
     * Scope
     */
    const SCOPE = 'ABSTRACT';

    /**
     * AbstractController constructor
     */
    public function __construct() {

    }

}
