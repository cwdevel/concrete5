<?php

namespace Concrete\Core\Entity\User;

use Doctrine\ORM\EntityRepository;

class AttributeRepository extends EntityRepository
{

    public function getRegistrationList()
    {
        return $this->findBy(
            array('uakRegisterEdit' => true)
        );
    }




}
