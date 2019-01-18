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
        if($temp == "actors"){
          $val = str_replace($temp,'',$child->asXML());
          $val = str_replace('<>','',$val);
          $val = str_replace('</>','',$val);
          $value = [];
          $value = preg_split('/,/', $val, -1, PREG_SPLIT_NO_EMPTY);
          $final = [];
          foreach ($value as $p){
            $xml2 = simplexml_load_file('actor.xml');
            $actors= [];
            foreach($xml2->children() as $var2)
            {
              $arr2 = [];
              foreach($var2->children() as $child2)
              {
                $temp2 = $child2->getName();
                $val2 = str_replace($temp2,'',$child2->asXML());
                $val2 = str_replace('<>','',$val2);
                $val2 = str_replace('</>','',$val2);
                $arr2[$temp2] = $val2;
              }
              array_push($actors, $arr2);
            }
            $actor = [];
            foreach ($actors as $k) {
              if($k["id"] == $p){
                $actor= $k;
              }
            }
            array_push($final, $actor);
          }
          $arr[$temp] = $final;

        }else{
          if($temp == "category"){
            $val = str_replace($temp,'',$child->asXML());
            $val = str_replace('<>','',$val);
            $val = str_replace('</>','',$val);
            $final = [];
            $xml3 = simplexml_load_file('category.xml');
            $categories = [];
            foreach($xml3->children() as $var3)
            {
              $arr3 = [];
              foreach($var3->children() as $child3)
              {
                // echo $child->getName() . ": " . $child . "<br>";
                $temp3 = $child3->getName();
                $val3 = str_replace($temp3,'',$child3->asXML());
                $val3 = str_replace('<>','',$val3);
                $val3 = str_replace('</>','',$val3);
                $arr3[$temp3] = $val3;
              }
              array_push($categories, $arr3);
            }
            $category = [];
            foreach ($categories as $key) {
              if($key["id"] == $val){
                $category = $key;
              }
            }
            $final = $category;
            }else{
              $val = str_replace($temp,'',$child->asXML());
              $val = str_replace('<>','',$val);
              $val = str_replace('</>','',$val);
              $arr[$temp] = $val;
            }
          }
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
