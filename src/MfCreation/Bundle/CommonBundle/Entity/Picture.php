<?php

namespace MfCreation\Bundle\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Picture
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Picture
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
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowedByUser", type="boolean")
     */
    private $allowedByUser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasLegalRights", type="boolean")
     */
    private $hasLegalRights;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;
    
    
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
     * Set path
     *
     * @param string $path
     * @return Picture
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Picture
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Picture
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set allowedByUser
     *
     * @param boolean $allowedByUser
     * @return Picture
     */
    public function setAllowedByUser($allowedByUser)
    {
        $this->allowedByUser = $allowedByUser;

        return $this;
    }

    /**
     * Get allowedByUser
     *
     * @return boolean 
     */
    public function getAllowedByUser()
    {
        return $this->allowedByUser;
    }

    /**
     * Set hasLegalRights
     *
     * @param boolean $hasLegalRights
     * @return Picture
     */
    public function setHasLegalRights($hasLegalRights)
    {
        $this->hasLegalRights = $hasLegalRights;

        return $this;
    }

    /**
     * Get hasLegalRights
     *
     * @return boolean 
     */
    public function getHasLegalRights()
    {
        return $this->hasLegalRights;
    }
    
    /**
     * Get created
     * 
     * @return datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Get updated
     * 
     * @return datetime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

}
