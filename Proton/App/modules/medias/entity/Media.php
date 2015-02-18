<?php 
namespace App\modules\medias\entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="media")
 * @ORM\Entity
 */
class Media
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;




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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return htmlentities($this->name);
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Product
     */
    public function setPath($path)
    {
        $this->path = path;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getPath()
    {
        return htmlentities($this->path);
    }


}

 ?>