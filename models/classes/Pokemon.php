<?php

namespace models\classes;

class Pokemon
{
    private $id;
    private $nom;
    private $image;
    private $generation;
    private $type;
    private $id_evolution_inf;
    private $nom_evolution_inf;
    private $id_evolution_sup;
    private $nom_evolution_sup;
    private $slug;

    public function __construct()
    {
        //
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * @param mixed $generation
     */
    public function setGeneration($generation): void
    {
        $this->generation = $generation;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed|null
     */
    public function getIdEvolutionInf(): mixed
    {
        return $this->id_evolution_inf;
    }

    /**
     * @param mixed|null $id_evolution_inf
     */
    public function setIdEvolutionInf(mixed $id_evolution_inf): void
    {
        $this->id_evolution_inf = $id_evolution_inf;
    }

    /**
     * @return mixed|null
     */
    public function getIdEvolutionSup(): mixed
    {
        return $this->id_evolution_sup;
    }

    /**
     * @param mixed|null $id_evolution_sup
     */
    public function setIdEvolutionSup(mixed $id_evolution_sup): void
    {
        $this->id_evolution_sup = $id_evolution_sup;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = strtolower($slug);
    }

    /**
     * @return mixed
     */
    public function getNomEvolutionInf()
    {
        return $this->nom_evolution_inf;
    }

    /**
     * @param mixed $name_evolution_inf
     */
    public function setNomEvolutionInf($name_evolution_inf): void
    {
        $this->nom_evolution_inf = $name_evolution_inf;
    }

    /**
     * @return mixed
     */
    public function getNomEvolutionSup()
    {
        return $this->nom_evolution_sup;
    }

    /**
     * @param mixed $name_evolution_sup
     */
    public function setNomEvolutionSup($name_evolution_sup): void
    {
        $this->nom_evolution_sup = $name_evolution_sup;
    }




}
