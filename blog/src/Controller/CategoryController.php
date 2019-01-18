<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController
{
    function getAllCategories() {
        $xml = simplexml_load_file('category.xml');
        $categories= [];
        foreach($xml->children() as $var)
        {
          $arr = [];
          foreach($var->children() as $child)
          {
          // echo $child->getName() . ": " . $child . "<br>";
          $temp = $child->getName();
          $val = str_replace($temp,'',$child->asXML());
          $val = str_replace('<>','',$val);
          $val = str_replace('</>','',$val);
          $arr[$temp] = $val;
          }
          array_push($categories, $arr);
        }
        // $categories= [
        //     ["id" => $var, "name" => ($xml->name)],
        // ];
        $jsonResponse = json_encode($categories);
        // print_r($categories);
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
