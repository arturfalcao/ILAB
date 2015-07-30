<?php

namespace AppBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\RouteRedirectView;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use AppBundle\Entity\TMetodos;
use AppBundle\Form\TMetodosType;
use AppBundle\Entity\TParametros;
use AppBundle\Form\TParametrosType;


/*

f = {
    "ftDescricao": "d",
    "fdLimiterealizacao": {
      date : {
        year : 2015,
        month : 12,
        day : 12
      },
      time : {
        hour : 01,
        minute : 01
      }
    },
    "fdConclusao": {
      date : {
        year : 2015,
        month : 12,
        day : 12
      },
      time : {
        hour : 01,
        minute : 01
      }
    },
    "ftCumpreespecificacao": "a",
    "ftConclusao": "a",
    "ftObservacao": "a",
    "fdCriacao": {
      date : {
        year : 2015,
        month : 12,
        day : 12
      },
      time : {
        hour : 01,
        minute : 01
      }
    },
    "fdConclusao": {
      date : {
        year : 2015,
        month : 12,
        day : 12
      },
      time : {
        hour : 01,
        minute : 01
      }
    },
    "fdAutorizacao": {
      date : {
        year : 2015,
        month : 12,
        day : 12
      },
      time : {
        hour : 01,
        minute : 01
      }
    },
    "fnPrecocompra": 0,
    "fnPrecovenda": 0,
    "fnFactorcorreccao": 0,
    "fbAcreditado": true,
    "fnLimitelegal": 0,
    "ftFormulaquimica": "0",
    "fnVolumeminimo": 0,
    "fbConfirmacao": true,
    "fbContraanalise": true,
    "fdRealizacao": {
      date : {
        year : 2015,
        month : 12,
        day : 12
      },
      time : {
        hour : 01,
        minute : 01
      }
    }
}

$.ajax({
  type: "POST",
  url: "/ILAB/web/app_dev.php/api/v1/parametros",
  data : f
  //data: JSON.stringify($("form").serializeArray()),
  success: function(){console.log("done", arguments)},
  error: function(){console.error("error", arguments)},
  dataType: "json",
  contentType : "application/json"
});
*/

/**
 * TParametros Api controller.
 *
 */
class TParametrosApiController extends FOSRestController
{
  /**
   * Lists all TParametros entities.
   *
   * @Annotations\View(
   *   template = "AppBundle:TParametros:index.html.twig",
   *   templateVar = "entities",
   *   statusCode = Codes::HTTP_OK
   * )
   */
   public function getParametrosAction()
   {
     $data = $this->getRepo('AppBundle:TParametros')->findAll();
     return View::create($data);
   }

   /**
    * Update existing page from the submitted data or create a new page at a specific location.
    *
    * @ApiDoc(
    *   resource = true,
    *   input = "AppBundle\Form\TParametrosType",
    *   statusCodes = {
    *     201 = "Returned when the Page is created",
    *     204 = "Returned when successful",
    *     400 = "Returned when the form has errors"
    *   }
    * )
    *
    * @Annotations\View(
    *  template = "AppBundle:TParametros:new.html.twig",
    *  templateVar = "entities"
    * )
    *
    * @param Request $request the request object
    * @param int     $id      the page id
    *
    * @return FormTypeInterface|View
    *
    * @throws NotFoundHttpException when page not exist
    */
    public function postParametrosAction()
    {
      $entity = new TParametros();
      $form = $this->createForm(new TParametrosType(), $entity);
      //$form->handleRequest($this->getRequest()); // requer que o objecto root seja o nome do form
      $form->submit($this->getRequest()->request->all());
      //return $form->getData();
      if ($form->isValid()) {
          //exit(\Doctrine\Common\Util\Debug::dump($entity));
          $em = $this->getDoctrine()->getManager();
          $em->persist($entity);
          $em->flush();
          return $this->redirect($this->generateUrl('tparametros_show', array('id' => $entity->getFnId())));
      }
      //return $form->getErrorsAsString();
      return View::create($form->getErrorsAsString(), 400); // getErrorsAsString
    }

  /**
   * Update existing page from the submitted data or create a new page at a specific location.
   *
   * @ApiDoc(
   *   resource = true
   * )
   *
   * @Annotations\View(
   *  template = "AppBundle:TParametros:show.html.twig",
   *  templateVar = "entity"
   * )
   *
   * @param int     $id      the page id
   *
   * @return FormTypeInterface|View
   *
   * @throws NotFoundHttpException when page not exist
   */
    public function getParametroAction($id)
    {
      $data = $this->getRepo('AppBundle:TParametros')->find($id);
      return View::create($data);
    }

    private function getRepo($location){
      $em = $this->getDoctrine()->getManager();
      return $em->getRepository($location);
    }
}
