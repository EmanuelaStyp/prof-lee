<?php

$IS_DEV = true;
$my_name = "Prof. Lee";
$welcome = "Welcome to my website";
require_once("./code/index.php");
require("./components/card.php");
require_once("./code/readEcho.php");
require_once("./code/Massage.php")
showHeader();   
showHero();
?>

<section>
  <div class="p-8">
    <div class="grid grid-cols-3 gap-4">

      <?php
     createCard(card_title: "Card 1", card_content: "This is the content of card 1", card_link: "#");
     createCard(card_title: "Card 2", card_content: "This is the content of card 2", card_link: "#");
     createCard(card_title: "Card 3", card_content: "This is the content of card 3", card_link: "#");
      ?>



    </div>
  </div>

</section>

<section>
  <div class="p-8 bg-gray-200">
    <h2 class="text-2xl m-4 text-center">latest messages</h2>

    <div class="grid grid-cols-3 gap-4">
 <?php
      $mess_instance = new Message();
      $all = $mess_instance->lastMessages(3);
      foreach($all as $item){
        createCard($item["sender"], $item["content"],"https://www.google.com");
      }
    //  var_dump($all);
    ?>

    </div>
  </div>

</section>

<?php require_once('./include/footer.php'); ?>