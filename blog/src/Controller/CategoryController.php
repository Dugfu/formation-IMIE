<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController
{
    function getAllCategories() {
        $categories= [
            ["name" => "Categorie 1"],
            ["name" => "Categorie 2"],
            ["name" => "Categorie 3"],
        ];
        $jsonResponse = json_encode($categories);

        return new Response($jsonResponse);
    }

    function getCategory($id) {
        $category= [
            "id" => $id,
            "name" => "Catégorie ".$id
        ];

        $jsonResponse = json_encode($category);

        return new Response($jsonResponse);
    }

    function deleteCategory($id){
        $jsonResponse = json_encode([]);
        return new Response($jsonResponse);
    }
}