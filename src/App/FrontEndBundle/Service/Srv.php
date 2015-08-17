<?php
namespace App\FrontEndBundle\Service;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.06.15
 * Time: 8:43
 */
class Srv
{

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function showAct()
    {
        $doctrine = $this->container->get('doctrine')->getManager();
        $req=$this->container->get('request');
         return ("111");
    }

    public function init()
    {
        $em = $this->container->get('doctrine')->getManager();
        $users=$em->getRepository("BundlesStoreBundle:User2")->findAll();
    }

    public function prepareDate($keys)
    {
        $em = $this->container->get('doctrine')->getManager();
        $repo=$em->getRepository("BundlesStoreBundle:Orders");
        $orders=null;
        foreach($keys as $key =>$value)
        {
            if($repo->findByPhoto($value))
            {
                $orders[]=$repo->findByPhoto($value);
            }

        }
        return $orders;
    }
}