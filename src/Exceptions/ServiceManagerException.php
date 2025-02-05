<?php

declare(strict_types=1);

namespace EchoFusion\ServiceManager\Exceptions;

use Exception;
use Psr\Container\ContainerExceptionInterface;

class ServiceManagerException extends Exception implements ContainerExceptionInterface
{
}
