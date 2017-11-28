<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function contactAction(Request $request, \Swift_Mailer $mailer)
    {
        if($request->isMethod('POST')) {
            $lastname = $request->request->get('lastname');
            $firstname = $request->request->get('firstname');
            $object = $request->request->get('object');
            $message = $request->request->get('message');

            $message = (new \Swift_Message('Demande de contact'))
                ->setFrom('pierre.baumes@epsi.fr')
                ->setTo('pierre.baumes@epsi.fr')
                ->setBody(
                    $this->renderView(
                        'contact/emailContact.html.twig',
                        array(
                            'lastname' => $lastname,
                            'firstname' => $firstname,
                            'object' => $object,
                            'message' => $message,
                        )
                    ),
                    'text/html'
                );

            $mailer->send($message);

            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Votre message a bien été envoyé!')
            ;
        }

        return $this->render('contact/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR
        ]);
    }
}
