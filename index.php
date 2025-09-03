<?php

$IS_DEV = false;
$my_name = "Prof. Lee";
$welcome = "Welcome to my website";
require_once('./code/index.php');
require('./components/card.php');
require_once("./code/readEcho.php");
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

<?php require_once('./include/footer.php'); ?>