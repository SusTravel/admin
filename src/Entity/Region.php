<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Region
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $code;

    /**
     * @ORM\Column(type="string", name="image_id")
     *
     * @var string
     */
    private $imageId;

    /**
     * @ORM\Column(type="string", name="name")
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", name="continent_code")
     *
     * @var string
     */
    private $continentCode;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getContinentCode()
    {
        return $this->continentCode;
    }

    /**
     * @param string $continentCode
     */
    public function setContinentCode($continentCode)
    {
        $this->continentCode = $continentCode;
    }

}