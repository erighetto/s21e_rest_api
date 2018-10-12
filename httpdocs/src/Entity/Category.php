<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="tblfammerc")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodRep", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codrep;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodRepECR", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $codrepecr = NULL;
    
    /**
     * @var string
     *
     * @ORM\Column(name="DescRep", type="string", length=50, nullable=false)
     */
    private $descrep;
    
    /**
     * @var string
     *
     * @ORM\Column(name="flgStato", type="string", length=1, nullable=false, options={"default"="S"})
     */
    private $flgstato = 'S';
    
    /**
     * @var string
     *
     * @ORM\Column(name="flgDataCreaz", type="string", length=20, nullable=false)
     */
    private $flgdatacreaz;
    
    /**
     * @var string
     *
     * @ORM\Column(name="flgCategoriaStatistica", type="string", length=1, nullable=false, options={"default"="S"})
     */
    private $flgcategoriastatistica = 'S';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgTipoFront", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgtipofront = NULL;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="FlgAliqIVA", type="integer", nullable=true, options={"default"=NULL})
     */
    private $flgaliqiva = NULL;
    
    public function __construct()
    {
        $this->flgdatacreaz = date('Y-m-d H:i:s');
    }

    public function getCodrep(): ?string
    {
        return $this->codrep;
    }

    public function getCodrepecr(): ?string
    {
        return $this->codrepecr;
    }

    public function setCodrepecr(?string $codrepecr): self
    {
        $this->codrepecr = $codrepecr;

        return $this;
    }

    public function getDescrep(): ?string
    {
        return $this->descrep;
    }

    public function setDescrep(string $descrep): self
    {
        $this->descrep = $descrep;

        return $this;
    }

    public function getFlgstato(): ?string
    {
        return $this->flgstato;
    }

    public function setFlgstato(string $flgstato): self
    {
        $this->flgstato = $flgstato;

        return $this;
    }

    public function getFlgdatacreaz(): ?string
    {
        return $this->flgdatacreaz;
    }

    public function setFlgdatacreaz(string $flgdatacreaz): self
    {
        $this->flgdatacreaz = $flgdatacreaz;

        return $this;
    }

    public function getFlgcategoriastatistica(): ?string
    {
        return $this->flgcategoriastatistica;
    }

    public function setFlgcategoriastatistica(string $flgcategoriastatistica): self
    {
        $this->flgcategoriastatistica = $flgcategoriastatistica;

        return $this;
    }

    public function getFlgtipofront(): ?string
    {
        return $this->flgtipofront;
    }

    public function setFlgtipofront(?string $flgtipofront): self
    {
        $this->flgtipofront = $flgtipofront;

        return $this;
    }

    public function getFlgaliqiva(): ?int
    {
        return $this->flgaliqiva;
    }

    public function setFlgaliqiva(?int $flgaliqiva): self
    {
        $this->flgaliqiva = $flgaliqiva;

        return $this;
    }
}
