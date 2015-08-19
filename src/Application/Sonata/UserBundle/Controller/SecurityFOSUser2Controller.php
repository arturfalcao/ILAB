<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Controller;

use Sonata\UserBundle\Controller\SecurityFOSUser1Controller as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityFOSUser2Controller extends BaseController
{

    public function loginAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if ( $this->container->get('security.context')->isGranted('ROLE_USER')) {
            $this->container->get('session')->getFlashBag()->set('sonata_user_error', 'sonata_user_already_authenticated');
            return $this->container->get('templating')->renderResponse('default/calendar.html.twig',array('user'=>$user));
        }
        return parent::loginAction();
    }
}