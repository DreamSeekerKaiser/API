<?php
declare(strict_types = 1);
namespace User\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class LoginHandler implements RequestHandlerInterface
{

    /**
     *
     * {@inheritdoc}
     *
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        // Create and return a response
        return new JsonResponse([
            'time' => time()
        ]);
    }
}
