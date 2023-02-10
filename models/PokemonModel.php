<?php

namespace models;

use models\base\SQL;
use models\classes\Pokemon;

class PokemonModel extends SQL
{
    public function __construct()
    {
        parent::__construct('pokemons', 'id');
    }

    /**
     * Méthode d'exemple permettant l'accès aux données avec une
     * requête préparée.
     */
    public function getAll(): array
    {
        $stmt = $this->getPdo()->prepare("SELECT * from pokemons ORDER BY id");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Pokemon::class);
    }

    public function getByNomOuId(mixed $recherche)
    {
        $stmt = $this->getPdo()->prepare("SELECT * from pokemons WHERE nom LIKE ? OR id LIKE ?");
        $stmt->execute([$recherche, $recherche]);
        return $stmt->fetchObject( Pokemon::class);
    }

    public function insert(Pokemon $pokemon)
    {
        $stmt = $this->getPdo()->prepare("INSERT INTO pokemons (id, nom, image, generation, type, id_evolution_inf, id_evolution_sup, slug, nom_evolution_inf, nom_evolution_sup) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$pokemon->getId(), $pokemon->getNom(), $pokemon->getImage(), $pokemon->getGeneration(), $pokemon->getType(), $pokemon->getIdEvolutionInf(), $pokemon->getIdEvolutionSup(), $pokemon->getSlug(), $pokemon->getNomEvolutionInf(), $pokemon->getNomEvolutionSup()]);
    }

    public function getBySlug(string $slug)
    {
        $stmt = $this->getPdo()->prepare("SELECT * from pokemons WHERE slug = ? OR id = ?");
        $stmt->execute([strtolower($slug), strtolower($slug)]);
        return $stmt->fetchObject( Pokemon::class);
    }

    public function getAllGenerations(): array
    {
        $stmt = $this->getPdo()->prepare("SELECT DISTINCT generation from pokemons ORDER BY generation");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_COLUMN);
    }

    public function getByGeneration(mixed $value)
    {
        $stmt = $this->getPdo()->prepare("SELECT * from pokemons WHERE generation = ?");
        $stmt->execute([$value]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Pokemon::class);
    }
}
