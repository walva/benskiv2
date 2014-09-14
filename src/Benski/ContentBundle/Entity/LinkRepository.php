<?php

namespace Benski\ContentBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * LinkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LinkRepository extends EntityRepository
{
    public function findByClassAndId($class, $id){
        $query = $this->_em->createQuery(' 
            SELECT l FROM BenskiContentBundle:Link l
            WHERE l.className = :class
            AND l.ownerId = :id
            ')
                ->setParameter('class', $class)
                ->setParameter('id', $id);

        return $query->getResult();
    }
}