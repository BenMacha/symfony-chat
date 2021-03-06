<?php

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{

    public function all(){
        return $this->createQueryBuilder('u')
            ->select('u.id,u.firstname, u.lastname')
            ->getQuery()->getArrayResult();
    }
}
