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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set roleName
     *
     * @param string $roleName
     *
     * @return Role
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Get roleName
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Set roleDescription
     *
     * @param string $roleDescription
     *
     * @return Role
     */
    public function setRoleDescription($roleDescription)
    {
        $this->roleDescription = $roleDescription;

        return $this;
    }

    /**
     * Get roleDescription
     *
     * @return string
     */
    public function getRoleDescription()
    {
        return $this->roleDescription;
    }


    /**
     * Set role
     *
     * @param \UserBundle\Entity\User $role
     *
     * @return Role
     */
    public function setRole(\UserBundle\Entity\User $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \UserBundle\Entity\User
     */
    public function getRole()
    {
        return $this->role;
    }

}
