<?php

// src/Acme/StoreBundle/Repository/ProductRepository.php

namespace Acme\StoreBundle\Repository ;

use Doctrine\ORM\EntityRepository ;

class ProductRepository extends EntityRepository {

  public function findAllOrderedByName () {
    return $this -> getEntityManager ()
                    -> createQuery ( 'SELECT p FROM AcmeStoreBundle:Product p ORDER BY p.name ASC' )
                    -> getResult () ;

    $em       = $this -> getDoctrine () -> getManager () ;
    $products = $em -> getRepository ( 'AcmeStoreBundle:Product' )
            -> findAllOrderedByName () ;
  }

  public function findOneByIdJoinedToCategory ( $id ) {
    $query = $this -> getEntityManager ()
                    -> createQuery ( '
            SELECT p, c FROM AcmeStoreBundle:Product p
            JOIN p.category c
            WHERE p.id = :id'
                    ) -> setParameter ( 'id' , $id ) ;

    try {
      return $query -> getSingleResult () ;
    }
    catch ( \Doctrine\ORM\NoResultException $e ) {
      return null ;
    }
  }

}
