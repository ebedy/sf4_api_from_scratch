<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiDefaultController
 * @package App\Controller
 */
class ApiDefaultController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/api",name="api.default")
     */
    public function index(Request $request):View
    {
        $data = ['hello' => 'world'];

        return $this->view($data, Response::HTTP_OK);
    }
}
