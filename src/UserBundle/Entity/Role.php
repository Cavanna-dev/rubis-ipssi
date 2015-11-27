<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;

/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserBundle\Entity\RoleRepository")
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $roleId;

    /**
     * @var string
     * @ORM\Column(name="role_name", type="string")
     */
    private $roleName;

    /**
     * @var string
     * @ORM\Column(name="role_description", type="string")
     */
    private $roleDescription;

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="role")
     **/
    private $role;



}
