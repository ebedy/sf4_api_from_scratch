<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UserApiController
 * @package App\Controller
 */
class UserApiController extends AbstractFOSRestController
{

    /**
     * @Rest\Get("/users")
     * @param Request $request
     * @return View
     */
    public function getUsersAction(Request $request):View
    {
        $data = ['getUsersAction' => 'not implemented yet'];
        return $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);

    }

    /**
     * @Rest\Get("/users/{userId}")
     * @param Request $request
     * @return View
     */
    public function getUsersByIdAction(Request $request):View
    {
        $userId = $request->get('userId');
        $data = ['getUsersByIdAction' => 'not implemented yet'];
        return $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @Rest\Post("/users")
     * @return View
     */
    public function postUsersAction():View
    {
        $data = ['postUsersAction' => 'not implemented yet'];
        return $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @Rest\Put("/users/{userId}")
     * @param Request $request
     * @return View
     */
    public function putUsersByIdAction(Request $request):View
    {
        $userId = $request->get('userId');
        $data = ['putUsersByIdAction' => 'not implemented yet'];
        return $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @Rest\Delete("/users/{userId}")
     * @param Request $request
     * @return View
     */
    public function deleteUsersByIdAction(Request $request):View
    {
        $userId = $request->get('userId');
        $data = ['deleteUsersByIdAction' => 'not implemented yet'];
        return $this->view($data, Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
