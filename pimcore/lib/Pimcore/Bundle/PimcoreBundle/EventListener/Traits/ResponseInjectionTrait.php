<?php

namespace Pimcore\Bundle\PimcoreBundle\EventListener\Traits;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;

trait ResponseInjectionTrait
{
    /**
     * @param Response $response
     * @return bool
     */
    protected function isHtmlResponse(Response $response)
    {
        if($response instanceof BinaryFileResponse) {
            return false;
        }

        if (strpos($response->getContent(), "<html")) {
            return true;
        }

        return false;
    }
}
