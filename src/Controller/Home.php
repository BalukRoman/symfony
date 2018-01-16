<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 1/16/18
 * Time: 8:45 PM
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Home extends Controller
{
    /**
     * @Route("/")
     */
    public function init()
    {
        $title = 'Home page';
        $content = 'Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
        Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada.';

        return $this->render('home.html.twig', array(
            'title' => $title,
            'content' => $content,
        ));
    }
}