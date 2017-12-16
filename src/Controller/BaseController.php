<?php
/**
 * Created by PhpStorm.
 * User: Elie
 * Date: 16/12/2017
 * Time: 17:45
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    /**
     * @Route("/home/")
     */
    public function home() {

        return $this->render('Base/home.html.twig');

    }

}