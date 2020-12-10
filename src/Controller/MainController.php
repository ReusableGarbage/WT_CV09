<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController {
/**
*@Route("/getter", name="getter")
*/

public function GetterAction(Request $request)
{
  $jmeno = $request->get('jmeno');
  $prijmeni = $request->get('prijmeni');
  return new Response("(kdyztak dej za getter tohle: ?jmeno=Tana&prijmeni=izajova ) <br> Ahojky, pry se jmenujes ".$jmeno." ".$prijmeni);
}

/**
*@Route("/", name="MainPage")
*@Method({"GET"})
*/
public function sendAction(Request $request)
{
  $foo = array("Povedlo se?","Povedlo se ted?");
  dump($foo);

  $session = $request->getSession();
  $zvolani = $session->get("zvolani", "JUJKY HEJHLE");
  return $this->render('default/index.html.twig', array("zvolani"=>$zvolani));
}


}
