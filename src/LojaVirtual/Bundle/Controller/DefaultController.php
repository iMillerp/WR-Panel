<?php

namespace LojaVirtual\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller {

  /**
   * @Route("/" ,name="home_Pagina_Principal")
   * @Template()
   */
  public function indexAction() {
    return $this->render('LojaBundle:Default:index.html.twig'); //Página Principal
  }

  /**
   * @Route("/aradio.html", name="Informacoes_da_radio")
   * @Template()
   */
  public function aradioAction() {
    return $this->render('LojaBundle:Paginas:aradio.html.twig');
  }

  /**
   * @Route("/chat.html", name="Chat_da_radio_xat.com")
   * @Template()
   */
  public function chatAction() {
    return $this->render('LojaBundle:Paginas:chat.html.twig');
  }

  /**
   * @Route("/noticias.html", name="Noticias_da_Radio")
   * @Template()
   */
  public function noticiasAction() {
    return $this->render('LojaBundle:Paginas:noticias.html.twig');
  }

  /**
   * @Route("/clube.html", name="Clube_de_ouvintes")
   * @Template()
   */
  public function clubeAction() {
    return $this->render('LojaBundle:Paginas:clube.html.twig');
  }

  /**
   * @Route("/promocoes.html", name="Promocoes_da_radio")
   * @Template()
   */
  public function promocoesAction() {
    return $this->render('LojaBundle:Paginas:promocoes.html.twig');
  }

  /**
   * @Route("/publicidade.html", name="Pagina_de_publicidade")
   * @Template()
   */
  public function publicidadeAction() {
    return $this->render('LojaBundle:Paginas:publicidade.html.twig');
  }

  /**
   * @Route("/contato.html", name="Pagina_com_formulario_de_contato")
   * @Template()
   */
  public function contatoAction() {
    return $this->render('LojaBundle:Paginas:contato.html.twig');
  }

  /**
   * @Route("/players.html", name="Pagina_dos_players")
   * @Template()
   */
  public function playersAction() {
    return $this->render('LojaBundle:Paginas:players.html.twig');
  }

  /**
   * @Route("/forum.html", name="Pagina_do_Forum")
   * @Template()
   */
  public function forumAction() {
    return new Response('
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
          <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta HTTP-EQUIV = "Refresh" CONTENT = "1; URL = http://forum.zonegames.com.br">
        <title>Carregando</title>
          </head>
          <body>
          Redirecionando para o forum. Aguarde...
          </body>
        </html>'
    );
  }

  /**
   * @Route("/painel/")
   * @Template()
   */
  public function painelAction() {
    if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
      throw new AccessDeniedException();
    }
    return $this->redirect('/');
  }

  public function showAction() {
    return $this->render('LojaBundle:Default:error404.html.twig');
  }

}
