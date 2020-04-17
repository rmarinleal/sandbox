<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class defaultController
 * @package App\Controller\Form
 */
class DefaultController extends AbstractDefaultController
{
    /**
     * @param Request $request
     *
     * @Route("/getRequest", methods={"GET"}, name="get_action")
     * @Route("/getRequest/", methods={"GET"}, name="get_action_slash")
     *
     * @return Response
     *
     * @throws BadRequestHttpException
     */
    public function getRequestAction(Request $request)
    {
        try {
            $fields = $request->query->all();
            return new JsonResponse($fields);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException('Get error exception');
        }
    }

    /**
     * @param Request $request
     *
     * @Route("/postRequest", methods={"POST"}, name="post_action")
     * @Route("/postRequest/", methods={"POST"}, name="post_action_slash")
     *
     * @return Response
     *
     * @throws BadRequestHttpException
     */
    public function postRequestAction(Request $request)
    {
        try {
            $fields = $request->request->all();
            return new JsonResponse($fields);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException('Post error exception');
        }
    }
}
