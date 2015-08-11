<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var integer
     */
    public function __construct()
    {
        $this->setDate(new \DateTime());
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \Bundles\StoreBundle\Entity\Users
     */
    private $users;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photo;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Orders
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set users
     *
     * @param \Bundles\StoreBundle\Entity\Users $users
     * @return Orders
     */
    public function setUsers(\Bundles\StoreBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \Bundles\StoreBundle\Entity\Users 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     * @return Orders
     */
    public function addPhoto(\Bundles\StoreBundle\Entity\Photo $photo)
    {
        $this->photo[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     */
    public function removePhoto(\Bundles\StoreBundle\Entity\Photo $photo)
    {
        $this->photo->removeElement($photo);
    }

    /**
     * Get photo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     * @return Orders
     */
    public function setPhoto(\Bundles\StoreBundle\Entity\Photo $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }
    /**
     * @var \Bundles\StoreBundle\Entity\User2
     */
    private $user2;


    /**
     * Set user2
     *
     * @param \Bundles\StoreBundle\Entity\User2 $user2
     * @return Orders
     */
    public function setUser2(\Bundles\StoreBundle\Entity\User2 $user2 = null)
    {
        $this->user2 = $user2;

        return $this;
    }

    /**
     * Get user2
     *
     * @return \Bundles\StoreBundle\Entity\User2 
     */
    public function getUser2()
    {
        return $this->user2;
    }
    /**
     * @var string
     */
    private $status;


    /**
     * Set status
     *
     * @param string $status
     * @return Orders
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
