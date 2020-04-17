<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class AbstractDefaultController
 * @package App\Controller\Form
 */
class AbstractDefaultController extends AbstractController
{
    /**
     * Ko, rejected order
     */
    const SCOPE = 'DEFAULT';

    /**
     * FormController constructor
     */
    public function __construct() {

    }

}
