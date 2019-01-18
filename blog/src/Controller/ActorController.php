<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActorController
{
  function getAllActors() {
    $xml = simplexml_load_file('actor.xml');
    $actors= [];
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
      array_push($actors, $arr);
    }
    // $categories= [
    //     ["id" => $var, "name" => ($xml->name)],
    // ];
    $jsonResponse = json_encode($actors);
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
