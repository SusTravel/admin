<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Place
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="available_from_points")
     *
     * @var int
     */
    private $availableFromPoints;

    /**
     * @ORM\Column(type="integer", name="cost_in_points")
     *
     * @var int
     */
    private $costInPoints;

    /**
     * @ORM\Column(type="string", name="description")
     *
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="string", name="image_id")
     *
     * @var string
     */
    private $imageId;

    /**
     * @ORM\Column(type="blob", name="location")
     *
     * @var string
     */
    private $location;

    /**
     * @ORM\Column(type="string", name="name")
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", name="qrcode_id")
     *
     * @var string
     */
    private $qrCodeId;

    /**
     * @ORM\Column(type="string", name="region_code")
     *
     * @var string
     */
    private $regionCode;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getAvailableFromPoints()
    {
        return $this->availableFromPoints;
    }

    /**
     * @param int $availableFromPoints
     */
    public function setAvailableFromPoints($availableFromPoints)
    {
        $this->availableFromPoints = $availableFromPoints;
    }

    /**
     * @return int
     */
    public function getCostInPoints()
    {
        return $this->costInPoints;
    }

    /**
     * @param int $costInPoints
     */
    public function setCostInPoints($costInPoints)
    {
        $this->costInPoints = $costInPoints;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
    public function getQrCodeId()
    {
        return $this->qrCodeId;
    }

    /**
     * @param string $qrCodeId
     */
    public function setQrCodeId($qrCodeId)
    {
        $this->qrCodeId = $qrCodeId;
    }

    /**
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
    }
}