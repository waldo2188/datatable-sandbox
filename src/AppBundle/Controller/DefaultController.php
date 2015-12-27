<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $this->datatableProduct();
        
        return $this->render('default/index.html.twig', array());
    }
    
    /**
     * @Route("/list", name="product_list")
     */
    public function productListAction()
    {
        return $this->datatableProduct()->execute();
    }
    
    private function datatableProduct()
    {
        return $this->get('datatable')
                ->setEntity("AppBundle:Product", "p")
                ->setFields(
                        array(
                            "Name"          => 'p.name',
                            "Description"       => 'p.description',
                            "Price"         => 'p.price',
                            "_identifier_"  => 'p.id')
                        )
                ->setSearch(true)
                ;
    }
    
    
    /**
     * @Route("/multiple", name="multiple")
     */
    public function multipleAction()
    {
        $this->datatableMultipleProduct();
        
        return $this->render('default/multiple.html.twig', array());
    }
    
    /**
     * @Route("/multiple/list", name="multiple_product_list")
     */
    public function multipleProductListAction()
    {
        return $this->datatableMultipleProduct()->execute();
    }
    
    private function datatableMultipleProduct()
    {
        return $this->get('datatable')
                ->setEntity("AppBundle:Product", "p")
                ->setFields(
                        array(
                            "Name"          => 'p.name',
                            "Description"       => 'p.description',
                            "Price"         => 'p.price',
                            "_identifier_"  => 'p.id')
                        )
                ->setSearch(true)
                ->setMultiple(
                                array(
                                    'delete' => array(
                                        'title' => 'Delete',
                                        'route' => 'multiple'
                                    ),
                                    'move' => array(
                                        'title' => 'Move',
                                        'route' => 'multiple'
                                    ),
                                )
                        )
                ;
    }
}
