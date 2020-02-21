<?php

namespace JournaleBundle\Repository;

/**
 * TrophyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrophyRepository extends \Doctrine\ORM\EntityRepository
{
    public function Finddql($id){
        $qb=$this->getEntityManager()
            ->createQuery("select j from JournaleBundle:Trophy j where j.user=?1 ")
            ->setParameters(array(1=>$id));
        return $qb->getResult();
    }

}
