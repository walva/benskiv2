<?php

namespace Benski\CatalogueBundle\Controller\noadmin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Benski\CatalogueBundle\Entity\Destination;
use Benski\CatalogueBundle\Form\DestinationType;

/**
 * Destination controller.
 *
 */
class PublicController extends Controller {

   /**
    * Lists all Destination entities.
    *
    */
   public function indexAction() {
      return $this->render('BenskiCatalogueBundle:Public:index.html.twig', array(
              ));
   }

   /**
    * Lists all Destination entities.
    *
    */
   public function afficherSejourAction($destination) {

      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('BenskiCatalogueBundle:Destination')
              ->find($destination);

      $sejours = $em->getRepository('BenskiCatalogueBundle:Sejour')
              ->findAll();

      if (!$entity) {
         throw $this->createNotFoundException('Unable to find Destination entity.');
      }


      return $this->render('BenskiCatalogueBundle:Public:sejour.html.twig', array(
                  'destination' => $entity,
                  'sejours' => $sejours
              ));
   }

   public function afficherLogementAction($destination, $sejour) {

      $em = $this->getDoctrine()->getManager();

      $destination = $em->getRepository('BenskiCatalogueBundle:Destination')
                      ->find($destination);
      $sejours = $em->getRepository('BenskiCatalogueBundle:Sejour')
              ->findAll();
      $sejour = $em->getRepository('BenskiCatalogueBundle:Sejour')
              ->find($sejour);
      $appartements = $sejour->getAllAppartementsByDestination($destination);

      if (!$destination OR !$sejour) {
         throw $this->createNotFoundException('Unable to find Destination entity.');
      }


      return $this->render('BenskiCatalogueBundle:Public:logement.html.twig', array(
                  'destination' => $destination,
                  'sejours' => $sejours,
                  'sejour' => $sejour,
                  'appartements' => $appartements
              ));
   }

   public function afficherPrixLogementAction($destination, $sejour, $appartement) {

      $em = $this->getDoctrine()->getManager();

      $destination = $em->getRepository('BenskiCatalogueBundle:Destination')
                      ->find($destination);
      $sejour = $em->getRepository('BenskiCatalogueBundle:Sejour')
              ->find($sejour);
      $appartement = $em->getRepository('BenskiCatalogueBundle:Appartement')
              ->find($appartement);
      $appartements = $sejour->getAllAppartementsByDestination($destination);
      $sejourAppartement = $sejour->getSejourAppartementByAppartement($appartement);

      if (!$destination OR !$sejour OR !$appartement) {
         throw $this->createNotFoundException('Unable to find Destination entity.');
      }


      return $this->render('BenskiCatalogueBundle:Public:prix_logement.html.twig', array(
                  'destination' => $destination,
                  'sejour' => $sejour,
                  'appartement' => $appartement,
                  'sejourAppartement' => $sejourAppartement,
                  'appartements' => $appartements
              ));
   }

   public function afficherOptionAction($destination, $sejour, $appartement, $nbrPersonnes) {

      $em = $this->getDoctrine()->getManager();

      $destination = $em->getRepository('BenskiCatalogueBundle:Destination')
                      ->find($destination);
      $sejour = $em->getRepository('BenskiCatalogueBundle:Sejour')
              ->find($sejour);
      $appartement = $em->getRepository('BenskiCatalogueBundle:Appartement')
              ->find($appartement);
      $appartements = $sejour->getAllAppartementsByDestination($destination);
      $sejourAppartement = $sejour->getSejourAppartementByAppartement($appartement);
      /* @var $sejourAppartement \Benski\CatalogueBundle\Entity\SejourAppartement */
      
      $prixLogement = $sejourAppartement->prixParPersonne($nbrPersonnes);

      if (!$destination OR !$sejour OR !$appartement) {
         throw $this->createNotFoundException('Unable to find Destination entity.');
      }


      return $this->render('BenskiCatalogueBundle:Public:options.html.twig', array(
                  'destination' => $destination,
                  'sejour' => $sejour,
                  'appartement' => $appartement,
                  'sejourAppartement' => $sejourAppartement,
                  'prixLogement' => $prixLogement,
                  'nombrePersonnes' => $nbrPersonnes,
              ));
   }

}
