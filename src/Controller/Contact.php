<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 1/15/18
 * Time: 10:25 PM
 */

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Contact extends Controller
{
    /**
     * @Route("/contact")
     */
    public function init()
    {
        $title = 'Contact page';
        $content = 'Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
        Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada.';

        return $this->render('contact/contact.html.twig', array(
            'title' => $title,
            'content' => $content,
        ));
    }



}