<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;

/**
 * Address
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserBundle\Entity\AddressRepository")
 */
class Address
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
     * @var string
     * @ORM\Column(name="street", type="string")
     */
    private $street;

    /**
     * @var integer
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var integer
     * @ORM\Column(name="zipcode", type="integer")
     */
    private $zipcode;

    /**
     * @var string
     * @ORM\Column(name="city", type="string")
     */
    private $city;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="address")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     **/
    private $address;


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
     * Set street
     *
     * @param string $street
     *
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set address
     *
     * @param \UserBundle\Entity\User $address
     *
     * @return Address
     */
    public function setAddress(\UserBundle\Entity\User $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \UserBundle\Entity\User
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Address
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set zipcode
     *
     * @param integer $zipcode
     *
     * @return Address
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return integer
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
}
