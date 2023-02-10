<?php

namespace controllers;

use controllers\base\WebController;
use models\classes\Pokemon;
use models\PokemonModel;
use utils\Template;

class SampleWebController extends WebController
{
    private $pokemonModel;

    public function __construct()
    {
        $this->pokemonModel = new PokemonModel();
    }

    function home(): string
    {
        $recherche = false;
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($_POST['typeRecherche'] == 'nomOuId'){
                //var_dump($_POST);
                $pokemon = $this->pokemonModel->getByNomOuId($_POST['recherche']);
                if(gettype($pokemon) == 'object'){
                    header("Location: /pokemon/" . $pokemon->getSlug());
                }else{
                    $this->getFromAPIAndSave($_POST['recherche']);
                }
            }
        }else{
            if(isset($_GET['generation'])){
                $pokemons = $this->pokemonModel->getByGeneration($_GET['generation']);
            }else{
                $pokemons = $this->pokemonModel->getAll();
            }
        }
        return Template::render("views/global/home.php", [
            "pokemons" => $pokemons,
            "recherche" => $recherche,
            "termeRecherche" => $_POST['recherche'] ?? ""
        ]);
    }

    function getFromAPIAndSave($recherche){
        $urlApi = "https://pokebuildapi.fr/api/v1/pokemon/" . $recherche;
        $data = @file_get_contents($urlApi);
        if($data != false){
            $result = json_decode($data);
            $pokemon = new Pokemon();
            $pokemon->setId($result->id);
            $pokemon->setNom($result->name);
            $pokemon->setImage($result->image);
            $pokemon->setGeneration($result->apiGeneration);
            $pokemon->setType(json_encode($result->apiTypes));
            if($result->apiEvolutions != 'none' && $result->apiEvolutions != []){
                $pokemon->setIdEvolutionSup($result->apiEvolutions[0]->pokedexId);
                $pokemon->setNomEvolutionSup($result->apiEvolutions[0]->name);
            }
            if($result->apiPreEvolution != 'none' && $result->apiPreEvolution->pokedexIdd > 0){
                $pokemon->setIdEvolutionInf($result->apiPreEvolution->pokedexIdd);
                $pokemon->setNomEvolutionInf($result->apiPreEvolution->name);
            }
            $pokemon->setSlug($result->slug);
            var_dump($pokemon);
            $this->pokemonModel->insert($pokemon);
            header("Location: /pokemon/" . $pokemon->getSlug());
        }else{
            return Template::render("views/common/404.php", ["pokemonNotFound" => true, "slug" => $recherche]);
        }

    }

    function pokemon(string $slug)
    {
        $pokemon = $this->pokemonModel->getBySlug($slug);
        if (gettype($pokemon) == 'object'){
            return Template::render("views/global/pokemon.php", [
                "pokemon" => $pokemon
            ]);
        }else{
            //return Template::render("views/common/404.php", ["pokemonNotFound" => true, "slug" => $slug]);
            return $this->getFromAPIAndSave($slug);
        }

    }
}
