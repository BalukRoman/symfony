<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 1/15/18
 * Time: 10:21 PM
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class About extends Controller
{
    /**
     * @Route("/about")
     */
    public function init()
    {
        $title = 'About page';
        $content = 'Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
        Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada.';

        return $this->render('about/about.html.twig', array(
            'title' => $title,
            'content' => $content,
        ));
    }
}