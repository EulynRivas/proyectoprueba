<?php

namespace Sistema\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\MainBundle\Entity\ProductosRepository")
 */
class Productos
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
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="fkcategoria", type="integer", nullable=false)
     */
    private $fkcategoria;


    /**
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="Productos")
     * @ORM\JoinColumn(name="fkcategoria", referencedColumnName="id")
     */
    protected $category;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Productos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fkcategoria
     *
     * @param integer $fkcategoria
     *
     * @return Productos
     */
    public function setFkcategoria($fkcategoria)
    {
        $this->fkcategoria = $fkcategoria;

        return $this;
    }

    /**
     * Get fkcategoria
     *
     * @return integer
     */
    public function getFkcategoria()
    {
        return $this->fkcategoria;
    }

    /**
     * Set category
     *
     * @param \Sistema\MainBundle\Entity\Categoria $category
     *
     * @return Productos
     */
    public function setCategory(\Sistema\MainBundle\Entity\Categoria $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Sistema\MainBundle\Entity\Categoria
     */
    public function getCategory()
    {
        return $this->category;
    }
}
