<?php
// lib/Gonzalo123/BlogController.php

namespace Gonzalo123;

use Symfony\Component\HttpFoundation\Response;

class BlogController
{
    public function homeAction()
    {
        return new Response("BlogController::homeAction");
    }
}