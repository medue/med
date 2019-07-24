<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/24/19
 * Time: 15:32
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = rand(0, 100);
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}