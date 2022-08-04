<?php

namespace App\Enums;

enum FormMethods: string
{
    case POST = "POST";
    case GET = "GET";
    case PUT = "PUT";
    case PATCH = "PATCH";
    case DELETE = "DELETE";
}
