<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


use AppBundle\Entity\HistChat;
use AppBundle\Entity\FosUserUser;

/**
 * Agenda controller.
 *
 * @Route("/chat")
 */
class ChatController extends Controller
{

  /**
     * Todos os utilizadores diferentes do utilizador autenticado
     *
     * @Route("chat/getusers", name="utilizadores")
     */
    public function getusersAction()
    {

        $parameter = $this->get("request")->getContent();
        $arr1 = explode("=", $parameter);
        $nid = intval($arr1[1]);

        $em = $this->getDoctrine()->getManager();

        $result = $em->createQueryBuilder();

        $dql = $result->select('f')
                      ->from('AppBundle:FosUserUser', 'f')
                      ->andWhere('f.id != :id')
                      ->setParameter('id', $nid)
                      ->getQuery()
                      ->getResult();

    $info = [];
    $i=0;
    foreach ($dql as $fosuseruser)
    {
      $info[$i]['id'] = $fosuseruser->getId();
      $info[$i]['firstname'] = $fosuseruser->getFirstname();
      $info[$i]['imagem'] = $fosuseruser->getImagem();
      $i++;

    }

        return new Response(json_encode($info));
    }



    /**
     * Todos os utilizadores diferentes do utilizador autenticado
     *
     * @Route("chat/getdusers", name="utilizadores")
     */
    public function getdusersAction()
    {

        $parameter = $this->get("request")->getContent();
        $arr1 = explode("=", $parameter);
        $nid = intval($arr1[1]);

        $em = $this->getDoctrine()->getManager();

        $result = $em->createQueryBuilder();

        $dql = $result->select('f')
                      ->from('AppBundle:FosUserUser', 'f')
                      ->andWhere('f.id = :id')
                      ->setParameter('id', $nid)
                      ->getQuery()
                      ->getResult();

    $info = [];
    $i=0;
    foreach ($dql as $fosuseruser)
    {
      $info[$i]['id'] = $fosuseruser->getId();
      $info[$i]['firstname'] = $fosuseruser->getFirstname();
      $info[$i]['imagem'] = $fosuseruser->getImagem();
      $info[$i]['morada'] = $fosuseruser->getMorada();
      $info[$i]['telemovel'] = $fosuseruser->getTelemovel();
      $info[$i]['codigopostal'] = $fosuseruser->getCodigopostal();
      $info[$i]['cidade'] = $fosuseruser->getCidade();
      $info[$i]['data'] = $fosuseruser->getDateOfBirth();
      $i++;

    }

        return new Response(json_encode($info));
    }

    /**
     * Mensagens novas do utilizado clicado para o utilizador autenticado
     *
     * @Route("/sucesso", name="sucesso")
     */

  public function profilehandlerAction(Request $request)
  {
      $ficheiro = $request->files->get('file-input');
      $target_file = "";
      if($ficheiro)
        {
          $uploadedFile = $ficheiro->getClientOriginalName();
          $target_dir = $this->container->getParameter('kernel.root_dir') . "\Resources\public\images\\";
          $target_file = $target_dir . basename($uploadedFile);
          $uploadOk = 1;
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          // Check if image file is a actual image or fake image
          $check = getimagesize($ficheiro->getPathname());

          if($check !== false) {
              $uploadOk = 1;
          } else {
              $uploadOk = 0;
          }
          // Check if file already exists
          if (file_exists($target_file)) {
              $uploadOk = 0;
          }

          // Allow certain file formats
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
              $uploadOk = 0;
          }
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
          } else {
              if (move_uploaded_file($ficheiro->getPathname(), $target_file)) {
              }
          }

          $data = file_get_contents($target_file);
          $target_file = 'data:image/' . $imageFileType . ';base64,' . base64_encode($data);
      }

      $user_logado = intval($request->request->get('util'));
      $primeiro_nome = $request->request->get('primeiro_nome');
      $ultimo_nome = $request->request->get('ultimo_nome');
      $cargo = $request->request->get('cargo');
      $genero = $request->request->get('genero');
      $email = $request->request->get('email');
      $data_dia = $request->request->get('data_dia');
      $data_mes = $request->request->get('data_mes');
      $data_ano = $request->request->get('data_ano');
      $morada = $request->request->get('morada');
      $telefone = $request->request->get('telefone');
      $telemovel = $request->request->get('telemovel');
      $cp1 = $request->request->get('cp_1');
      $cp2 = $request->request->get('cp_2');
      $cidade = $request->request->get('cidade');

      $cp = "";

      if($cp1 && $cp2)
      {
        $cp = $cp1 . "-" . $cp2;
      }
      $data_nasc = null;

      if($data_dia && $data_mes && $data_ano)
      {
        $d_n = $data_ano . "-" . $data_mes . "-" . $data_dia;
        $data_nasc = new \DateTime($d_n);
      }

      $repository = $this->getDoctrine()->getRepository('AppBundle:FosUserUser');

      $utilizador = $repository->find($user_logado);
      $utilizador->setFirstname($primeiro_nome);
      $utilizador->setLastname($ultimo_nome);
      $utilizador->setCargo($cargo);
      $utilizador->setGender($genero);

      $utilizador->setEmail($email);
      $utilizador->setEmailCanonical($email);
      if($data_nasc)
        $utilizador->setDateOfBirth($data_nasc);
      if($morada)
        $utilizador->setMorada($morada);
      if($telefone)
        $utilizador->setPhone($telefone);
      if($telemovel)
        $utilizador->setTelemovel($telemovel);
      if($cp)
        $utilizador->setCodigopostal($cp);
      if($cidade)
        $utilizador->setCidade($cidade);
      if($target_file)
        $utilizador->setImagem($target_file);

      $em = $this->getDoctrine()->getManager();
      $em->flush();

      return $this->redirectToRoute('calendar');
  }

  public function gethistoriconovoAction()
    {

        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $user_clicado = intval($arr1[1]);

        $arr2 = explode("=", $parameter[1]);

        $user_logado = intval($arr2[1]);

        $em = $this->getDoctrine()->getManager();

        $result = $em->createQueryBuilder();

        $dql = $result->select('h')
                      ->from('AppBundle:HistChat', 'h')
                      ->andWhere('h.lida = 1')
                      ->andWhere('h.id_emissor = :user AND h.id_receptor = :ntuser')
                      ->setParameter('user', $user_clicado)
                      ->setParameter('ntuser',$user_logado)
                      ->orderBy('h.data_escrita_mensagem', 'ASC')
                      ->getQuery()
                      ->getResult();

        $info = [];
        $i = 0;

    $repository = $this->getDoctrine()->getRepository('AppBundle:FosUserUser');

        foreach ($dql as $histchat) {
            $nid=$histchat->getIdEmissor();
            $info[$i]['id_emissor'] = $histchat->getIdEmissor();
            $info[$i]['mensagem'] = $histchat->getMensagem();
            $utilizador = $repository->find($nid);
            $info[$i]['firstname'] = $utilizador->getFirstname();
            $info[$i]['imagem'] = $utilizador->getImagem();
            $i++;
        }


        return new Response(json_encode($info));
    }

    /**
     * Mensagens entre o utilizador clicado e o utilizador autenticado
     *
     * @Route("chat/gethistorico", name="historico")
     */

  public function gethistoricoAction()
    {

        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $user_clicado = intval($arr1[1]);

        $arr2 = explode("=", $parameter[1]);

        $user_logado = intval($arr2[1]);

        $em = $this->getDoctrine()->getManager();

        $result = $em->createQueryBuilder();

        $dql = $result->select('h')
                      ->from('AppBundle:HistChat', 'h')
                      ->andWhere('h.lida = 0')
                      ->andWhere('h.id_emissor = :user AND h.id_receptor = :ntuser')
                      ->setParameter('user', $user_clicado)
                      ->setParameter('ntuser',$user_logado)
                      ->orWhere('h.id_emissor = :user2 AND h.id_receptor = :ntuser2')
                      ->setParameter('user2', $user_logado)
                      ->setParameter('ntuser2',$user_clicado)
                      ->orderBy('h.data_escrita_mensagem', 'ASC')
                      ->getQuery()
                      ->getResult();

        $info = [];
        $i = 0;
        $conn = $em->getConnection();
        $repository = $this->getDoctrine()->getRepository('AppBundle:FosUserUser');

        foreach ($dql as $histchat) {
            $nid=$histchat->getIdEmissor();
            $info[$i]['id_emissor'] = $histchat->getIdEmissor();
            $info[$i]['mensagem'] = $histchat->getMensagem();
            $utilizador = $repository->find($nid);
            $info[$i]['firstname'] = $utilizador->getFirstname();
            $info[$i]['imagem'] = $utilizador->getImagem();
            $i++;
        }


        return new Response(json_encode($info));
    }

    /**
     * Atualizador o histórico com as mensagens enviadas pelo utilizador autenticado
     *
     * @Route("chat/inserthistorico", name="inserehistorico")
     */
    public function inserthistoricoAction()
    {
        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $id_emissor = intval($arr1[1]);
        $arr2 = explode("=", $parameter[1]);

        $id_receptor = intval($arr2[1]);

        $arr3 = explode("=", $parameter[2]);

        $mensagem = urldecode(trim($arr3[1]));

        $data_mensagem = new \DateTime();

        $n_lida = 1;

        $histchat = new HistChat();
      $histchat->setIdEmissor($id_emissor);
      $histchat->setIdReceptor($id_receptor);
      $histchat->setDataEscritaMensagem($data_mensagem);
      $histchat->setLida($n_lida);
      $histchat->setMensagem($mensagem);

      $em = $this->getDoctrine()->getManager();

      $em->persist($histchat);

      $em->flush();


    return new Response(json_encode($mensagem));
    }


    /**
     * Atualizar as mensagens não lidas como lidas entre o utilizador clicaodo e o autenticado
     *
     * @Route("chat/updatehistorico", name="atualizahistorico")
     */
    public function updatehistoricoAction()
    {

        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $user_clicado = intval($arr1[1]);

        $arr2 = explode("=", $parameter[1]);

        $user_logado = intval($arr2[1]);


        $em2 = $this->getDoctrine()->getManager();

        $result2 = $em2->createQueryBuilder();

        $dql2 = $result2->select('h')
                      ->from('AppBundle:HistChat', 'h')
                      ->andWhere('h.id_emissor = :user AND h.id_receptor = :ntuser')
                      ->setParameter('user', $user_clicado)
                      ->setParameter('ntuser',$user_logado)
                      ->andWhere('h.lida = 1')
                      ->getQuery()
                      ->getResult();

        foreach ($dql2 as $histchat2) {
          $histchat2->setLida(0);
          $em2->flush();
        }


        return new Response(json_encode($user_logado));
    }

    /**
     * Mensagens não lidas que tem como destinatário o utilizador autenticado
     *
     * @Route("chat/mens_nao_lidas", name="mensagens_nao_lidas")
     */
    public function mens_nao_lidasAction()
    {
        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $user_logado = intval($arr1[1]);

        $arr2 = explode("=", $parameter[1]);

        $user_clicado = intval($arr2[1]);
        $conta = 0;
        if($user_clicado == 0)
        {
          $em = $this->getDoctrine()->getManager();

          $result = $em->createQueryBuilder();

          $dql = $result->select('h')
                        ->from('AppBundle:HistChat', 'h')
                        ->where('h.id_receptor = :ntuser')
                        ->setParameter('ntuser',$user_logado)
                        ->andWhere('h.lida = 1')
                        ->getQuery()
                        ->getResult();

          $mens_nao_lidas = count($dql);
          $mens_nao_lidas = $mens_nao_lidas . "_0";
        }
      else{

          $em2 = $this->getDoctrine()->getManager();
          $result2 = $em2->createQueryBuilder();
          $dql2 = $result2->select('h')
                        ->from('AppBundle:HistChat', 'h')
                        ->where('h.id_receptor = :ntuser AND h.id_emissor != :uc')
                        ->setParameter('ntuser',$user_logado)
                        ->setParameter('uc',$user_clicado)
                        ->andWhere('h.lida = 1')
                        ->getQuery()
                        ->getResult();
          $mens_nao_lidas = count($dql2);


          $em2 = $this->getDoctrine()->getEntityManager();
          $connection = $em2->getConnection();
          $statement = $connection->prepare('SELECT COUNT(DISTINCT id_emissor) AS utilizadores
            FROM histchat WHERE id_receptor = :id AND lida = 1
            AND id_emissor != :uc AND id_emissor != :ul');
          $statement->bindValue('id', $user_logado);
          $statement->bindValue('uc', $user_clicado);
          $statement->bindValue('ul', $user_logado);
          $statement->execute();
          $results = $statement->fetchAll();

          $nutilizadores=0;
          for($j=0;$j < count($results); $j++)
          {
          $nutilizadores += intval($results[$j]['utilizadores']);
          }

          $mens_nao_lidas = $mens_nao_lidas . "_" . $nutilizadores;
      }



       return new Response(json_encode($mens_nao_lidas));

    }



    /**
     * Todos os utilizadores diferentes do utilizador autenticado
     *
     * @Route("chat/getimagem", name="imagens")
     */
    public function getimagemAction()
    {

        $parameter = $this->get("request")->getContent();
        $arr1 = explode("=", $parameter);
        $user_logado = intval($arr1[1]);

        $repository = $this->getDoctrine()->getRepository('AppBundle:FosUserUser');

        $utilizador = $repository->find($user_logado);

        $imagem = $utilizador->getImagem();

        return new Response(json_encode($imagem));
    }

    /**
     * Todos os utilizadores diferentes do utilizador autenticado
     *
     * @Route("chat/chat_validapass", name="vpass")
     */
    public function chat_validapassAction()
    {

        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $user_logado = intval($arr1[1]);

        $arr2 = explode("=", $parameter[1]);

        $pass = $arr2[1];

        $repository = $this->getDoctrine()->getRepository('AppBundle:FosUserUser');

        $utilizador = $repository->find($user_logado);

        $encoder = $this->container->get('security.encoder_factory')->getEncoder($utilizador);
        $ok = $encoder->isPasswordValid($utilizador->getPassword(), $pass, $utilizador->getSalt());
        //$ok = $encoder->encodePassword($pass, $utilizador->getSalt());

        if($ok){
          $ok=1;
        }
        else {
          $ok=0;
        }

        return new Response(json_encode($ok));
    }


    /**
     * Todos os utilizadores diferentes do utilizador autenticado
     *
     * @Route("chat/chat_validapass", name="vpass")
     */
    public function chat_mudapassAction()
    {

        $parameter = $this->get("request")->getContent();
        $parameter = explode("&", $parameter);
        $arr1 = explode("=", $parameter[0]);

        $user_logado = intval($arr1[1]);

        $arr2 = explode("=", $parameter[1]);

        $pass = $arr2[1];

        $repository = $this->getDoctrine()->getRepository('AppBundle:FosUserUser');

        $utilizador = $repository->find($user_logado);

        $encoder = $this->container->get('security.encoder_factory')->getEncoder($utilizador);
        $pass_encoded =  $encoder->encodePassword($pass,$utilizador->getSalt());
        $utilizador->setPassword($pass_encoded);

        $em = $this->getDoctrine()->getManager();

        $em->flush();

        return new Response(json_encode($pass));
    }


}
