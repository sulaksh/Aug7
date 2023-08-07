<?php

include "node.php";

class SLL
{
  public $head, $count;
  function __construct(){
    $this->head = null;
    $this->count = 0;
  }

  function insertEnd($ele){
    $newNode = new Node($ele);
    if($this->head == null)
    {
      $this->head = $newNode;
    }
    else{
      $p = $this->head;
      while($p->next != null){
        $p = $p->next;
      }
      $p->next = $newNode;
    }
    $this->count++;
  }

  function insertBegining($ele)
  {
    $newNode = new Node($ele);

    if($this->head == null)
    {
      $this->head = $newNode;
    }
    else{
    $temp = $this->head;
    $this->head = $newNode;
    $newNode->next = $temp;
    }
    $this->count++;
     
  }

  function insertBetween($ele, $idx){
    $newNode = new Node($ele);
    
    if($this->head == NULL)
    {
      $this->head = $newNode;
      $this->count++;
      return;
    }
   
    if($idx == 0){
      $this->insertBegining($ele);
      return;
    }
    
    $curr = $this->head;
 
    $curr_idx = 0;
    while($curr->next != null && $curr_idx < $idx-1)
    {
        $curr_idx++;
        $curr = $curr->next;
    }

    
    if ($curr->next == null && $curr_idx < $idx - 1)
    {
        $curr->next = $newNode;
    }
    else
    {
        $newNode->next = $curr->next;
        $curr->next = $newNode;
    }

    $this->count++;
}

  function deleteBegin(){
    if($this->head != null){
      $this->head = $this->head->next;
      $this->count--;
    }  
  }

  function deleteEnd(){

    if($this->head == null){
      return;
    }
    if($this->head->next == null){
      $this->head = null;
      $this->count--;
      return;
    }
    $curr = $this->head;
    $prev = null;
    while($curr->next != null)
      {
        $prev = $curr;
        $curr = $curr->next;
      }
    $prev->next = null;
    $this->count--;
  
  }


  function displaySLL()
  {
    if($this->head == null)
    {
      echo "\n List is empty \n";
    }
    else
    {
      echo "The elements are: \n";
      $p = $this->head;
      while($p != null)
        {
          $p->displayNode();
          $p = $p->next;
        }
    }
  }
}