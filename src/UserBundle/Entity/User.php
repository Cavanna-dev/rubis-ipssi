<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\Address;
use UserBundle\Entity\Role;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="first_name", type="string")
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column(name="last_name", type="string")
     */
    private $lastName;


    /**
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="role")
     * @ORM\JoinColumn(name="user_id")
     **/
    private $address;

    /**
    * @ORM\OneToMany(targetEntity="Address", mappedBy="address")
     * **/
    private $role;

    public function __construct() {
        $this->address = new ArrayCollection();
        $this->role = new ArrayCollection();
    }

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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Add address
     *
     * @param \UserBundle\Entity\Address $address
     *
     * @return User
     */
    public function addAddress(\UserBundle\Entity\Address $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \UserBundle\Entity\Address $address
     */
    public function removeAddress(\UserBundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * Add role
     *
     * @param \UserBundle\Entity\Role $role
     *
     * @return User
     */
    public function addRole(\UserBundle\Entity\Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \UserBundle\Entity\Role $role
     */
    public function removeRole(\UserBundle\Entity\Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRole()
    {
        return $this->role;
    }
}
