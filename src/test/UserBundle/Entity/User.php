<?php

namespace test\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="CATU\UserBundle\Entity\UserRepository")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User extends BaseUSer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    private $role;

    public function getRoles()
    {
        return $this->roles;
    }
    
    /**
     * Set roles
     *
     * @param array $roles
     * @return User
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }
    
    
    public function setRole($role){
        $this->role = $role;
        return $this;
    }

    public function getRole(){
        return $this->role;
    }
}