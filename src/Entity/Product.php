<?php


namespace App\Entity;

use App\Event\ProductActivated;
use Broadway\EventSourcing\EventSourcedAggregateRoot;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

/**
 *
 * @ORM\Table(name="product", indexes={@Index(name="productCategory", columns={"product_category"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product extends EventSourcedAggregateRoot
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Bidirectional
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductCategory", inversedBy="products",cascade={"persist"})
     * @ORM\JoinColumn(name="product_category", referencedColumnName="id", onDelete="cascade")
     */
    protected $productCategory;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $anno;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dataEmission;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $stampa;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $color;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $filigrana;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $dentellatura;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $tipoDentellatura;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descrizione;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $numeroCatalogo;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $numeroSassone;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $numeroUnificato;

    /**
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $immagine;

    /**
     * @ORM\Column(type="boolean")
     */
    private $attivazione;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Every aggregate root will expose its id.
     *
     * {@inheritdoc}
     */
    public function getAggregateRootId(): string
    {
        return $this->getId();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param mixed $productCategory
     */
    public function setProductCategory($productCategory): void
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @return mixed
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * @param mixed $anno
     */
    public function setAnno($anno): void
    {
        $this->anno = $anno;
    }

    /**
     * @return mixed
     */
    public function getDataEmission()
    {
        return $this->dataEmission;
    }

    /**
     * @param mixed $dataEmission
     */
    public function setDataEmission($dataEmission): void
    {
        $this->dataEmission = $dataEmission;
    }

    /**
     * @return mixed
     */
    public function getStampa()
    {
        return $this->stampa;
    }

    /**
     * @param mixed $stampa
     */
    public function setStampa($stampa): void
    {
        $this->stampa = $stampa;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getFiligrana()
    {
        return $this->filigrana;
    }

    /**
     * @param mixed $filigrana
     */
    public function setFiligrana($filigrana): void
    {
        $this->filigrana = $filigrana;
    }

    /**
     * @return mixed
     */
    public function getDentellatura()
    {
        return $this->dentellatura;
    }

    /**
     * @param mixed $dentellatura
     */
    public function setDentellatura($dentellatura): void
    {
        $this->dentellatura = $dentellatura;
    }

    /**
     * @return mixed
     */
    public function getTipoDentellatura()
    {
        return $this->tipoDentellatura;
    }

    /**
     * @param mixed $tipoDentellatura
     */
    public function setTipoDentellatura($tipoDentellatura): void
    {
        $this->tipoDentellatura = $tipoDentellatura;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * @param mixed $descrizione
     */
    public function setDescrizione($descrizione): void
    {
        $this->descrizione = $descrizione;
    }

    /**
     * @return mixed
     */
    public function getNumeroCatalogo()
    {
        return $this->numeroCatalogo;
    }

    /**
     * @param mixed $numeroCatalogo
     */
    public function setNumeroCatalogo($numeroCatalogo): void
    {
        $this->numeroCatalogo = $numeroCatalogo;
    }

    /**
     * @return mixed
     */
    public function getNumeroSassone()
    {
        return $this->numeroSassone;
    }

    /**
     * @param mixed $numeroSassone
     */
    public function setNumeroSassone($numeroSassone): void
    {
        $this->numeroSassone = $numeroSassone;
    }

    /**
     * @return mixed
     */
    public function getNumeroUnificato()
    {
        return $this->numeroUnificato;
    }

    /**
     * @param mixed $numeroUnificato
     */
    public function setNumeroUnificato($numeroUnificato): void
    {
        $this->numeroUnificato = $numeroUnificato;
    }

    /**
     * @return mixed
     */
    public function getImmagine()
    {
        return $this->immagine;
    }

    /**
     * @param mixed $immagine
     */
    public function setImmagine($immagine): void
    {
        $this->immagine = $immagine;
    }

    /**
     * @return mixed
     */
    public function getAttivazione()
    {
        return $this->attivazione;
    }

    /**
     * @param mixed $attivazione
     */
    public function setAttivazione($attivazione): void
    {
        $this->attivazione = $attivazione;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function activate()
    {
        if ($this->getAttivazione()) { //esempio di invariante
            throw new \Exception();
        }

        $this->apply( //generazione evento
            new ProductActivated(
                $this->id
            )
        );
   }
}