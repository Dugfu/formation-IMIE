<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController
{
  function getAllMovies() {
    $xml = simplexml_load_file('movie.xml');
    $movies= [];
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
      array_push($movies, $arr);
    }
    // $categories= [
    //     ["id" => $var, "name" => ($xml->name)],
    // ];
    $jsonResponse = json_encode($movies);
    // print_r($categories);
    return new Response($jsonResponse);
  }

  function getMovie($id) {
    $xml = simplexml_load_file('movie.xml');
    $movies= [];
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
      array_push($movies, $arr);
    }
    $movie = [];
    foreach ($movies as $key) {
      if($key["id"] == $id){
        $movie = $key;
        $jsonResponse = json_encode($movie);
        return new Response($jsonResponse);
      }
      }
        http_response_code(404);
        die();

        // $category= [
        //   "id" => $id,
        //   "name" => "Catégorie ".$id
        // ];

      }

      function deleteMovie($id){
        $jsonResponse = json_encode([]);
        return new Response($jsonResponse);
      }
    }
