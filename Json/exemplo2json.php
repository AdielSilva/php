<?php 

$json = '[
  {
    "nome": "João",
    "idade": 20
  },
  {
    "nome": "Adiel",
    "idade": 22
  }
]' ;

$data = json_decode($json, true);

var_dump($data);
?>