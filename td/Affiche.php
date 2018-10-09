<?php
/**
 * Created by PhpStorm.
 * User: Arisa
 * Date: 09/10/2018
 * Time: 10:04
 */

namespace td;

use DOMDocument;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class Affiche
{
    protected $container;

    public function __construct(ContainerInterface $container) // this is @service_container
    {
        $this->container = $container;
    }


    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();

        if ($response->headers->get("content-type") == "text/html; charset=UTF-8") {
            $dom = new DOMDocument;
            $dom->loadHTML($response->getContent());
            $tags = $dom->getElementsByTagName('body');
            foreach ($tags as $tag) {
                echo "ok";
            }
        }
    }

}