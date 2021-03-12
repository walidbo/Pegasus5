<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 *
 * @ORM\Table(name="data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DataRepository")
 */
class Data
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var float
     *
     * @ORM\Column(name="hum", type="float")
     */
    private $hum;

    /**
     * @var float
     *
     * @ORM\Column(name="temp", type="float")
     */
    private $temp;

    /**
     * @var string
     *
     * @ORM\Column(name="len", type="string", length=255)
     */
    private $len;

    /**
     * @var string
     *
     * @ORM\Column(name="lot", type="string", length=255)
     */
    private $lot;

    /**
     * @var int
     *
     * @ORM\Column(name="bat", type="integer")
     */
    private $bat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadd", type="datetime")
     */
    private $dateadd;

    /**
     * @var int
     *
     * @ORM\Column(name="car", type="integer")
     */
    private $car;

    /**
     * @var string
     *
     * @ORM\Column(name="opt", type="string", length=255)
     */
    private $opt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Data
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set hum
     *
     * @param float $hum
     *
     * @return Data
     */
    public function setHum($hum)
    {
        $this->hum = $hum;

        return $this;
    }

    /**
     * Get hum
     *
     * @return float
     */
    public function getHum()
    {
        return $this->hum;
    }

    /**
     * Set temp
     *
     * @param float $temp
     *
     * @return Data
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return float
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set len
     *
     * @param string $len
     *
     * @return Data
     */
    public function setLen($len)
    {
        $this->len = $len;

        return $this;
    }

    /**
     * Get len
     *
     * @return string
     */
    public function getLen()
    {
        return $this->len;
    }

    /**
     * Set lot
     *
     * @param string $lot
     *
     * @return Data
     */
    public function setLot($lot)
    {
        $this->lot = $lot;

        return $this;
    }

    /**
     * Get lot
     *
     * @return string
     */
    public function getLot()
    {
        return $this->lot;
    }

    /**
     * Set bat
     *
     * @param integer $bat
     *
     * @return Data
     */
    public function setBat($bat)
    {
        $this->bat = $bat;

        return $this;
    }

    /**
     * Get bat
     *
     * @return int
     */
    public function getBat()
    {
        return $this->bat;
    }

    /**
     * Set dateadd
     *
     * @param \DateTime $dateadd
     *
     * @return Data
     */
    public function setDateadd($dateadd)
    {
        $this->dateadd = $dateadd;

        return $this;
    }

    /**
     * Get dateadd
     *
     * @return \DateTime
     */
    public function getDateadd()
    {
        return $this->dateadd;
    }

    /**
     * Set car
     *
     * @param integer $car
     *
     * @return Data
     */
    public function setCar($car)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return int
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set opt
     *
     * @param string $opt
     *
     * @return Data
     */
    public function setOpt($opt)
    {
        $this->opt = $opt;

        return $this;
    }

    /**
     * Get opt
     *
     * @return string
     */
    public function getOpt()
    {
        return $this->opt;
    }
}

