<?php

class Node
{
  public $data, $next;
  
  function __construct($data){
    $this->data = $data;
    $this->next = null;
  }

  function displayNode(){
    echo $this->data . " --> ";
    
  }
}