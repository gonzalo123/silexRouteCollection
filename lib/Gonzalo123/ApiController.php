<?php
// lib/Gonzalo123/ApiController.php

namespace Gonzalo123;

use Symfony\Component\HttpFoundation\Response;

class ApiController
{
    public function listAction()
    {
        return new Response("AppController::listAction");
    }
}