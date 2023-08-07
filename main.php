<?php

include "singlyLL.php";

$ob = new SLL();

do{
  echo "\n 1. InsertEnd 2. Display 3. Insert begin 4. Insert Between 5. Delete begin 6. Delete End\n";
  $ch = readline("Enter the choice = ");

  switch($ch)
    {
      case "1":
        $ele = readline("Enter the data = ");
        $ob->insertEnd($ele);
        break;
      case "2":
        $ob->displaySLL();
        break;
      case "3":
        $ele = readline("Enter the data = ");
        $ob->insertBegining($ele);
        break;
      case "4":
        $ele = readline("Enter the data = ");
        $idx = readline("Enter the index you want to insert = ");
        $ob->insertBetween($ele, $idx);
        break;
      case "5":
        $ob->deleteBegin();
        break;
      case "6":
        $ob->deleteEnd();
        break;
    }  
}while($ch!=6);



$ob->displaySLL();