<?php

namespace Sistema\MainBundle\Controller;

use Sistema\MainBundle\Entity\Productos;
use Sistema\MainBundle\Form\ProductosType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductoController extends Controller
{
    public function indexAction()
    {
    }

    public function agregarAction(Request $request)
    {

        $p = new Productos();
        $form = $this->createForm(new ProductosType(),$p);
        $form->handleRequest($request);

        if($form->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            /*$idfkcategoria = $request->request->get('sistema_mainbundle_productos')['fkcategoria'];
            $p->setFkcategoria($idfkcategoria);*/
            $em->persist($p);
            $em->flush();
            /*$this->get('session')->getFlashBag()->add(
                'mensaje',
                'Se ha agregado el registro exitosamente'
            );*/
            return $this->redirect($this->generateUrl('sistema_product_add'));
        }

        return $this->render('SistemaMainBundle:Default:productoadd.html.twig',array("form"=>$form->createView()));
    }

}
