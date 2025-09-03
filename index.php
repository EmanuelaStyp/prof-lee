<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <!--navbar -->
    <section>
        <nav class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white p-4 text-2xl">
            <ul class="flex space-x-6 p-4 hover:[&>li]:underline">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </section>

    <!-- section Hero-->
<section>
    <div class="bg-gradient-to-tr from-cyan-200 via-blue-400 to-indigo-600  text-gray-100 min-h-32 shadow-md text-center p-4 space" >
        <div>
            <img class="rounded-full shadow-lg shadow-cyan-500 "src="./assets/img/sunset.webp">
        </div>
       
       <div class="text-8xl">Welcome Prof. Lee Website</div>
       <p class="text-4xl"> PHD Microprocessor Design</p>
    </div>
</section>
 

    <!--code area section -->
<section>
    <div class="min-h-32 bg-red-100">
        <span class="text-red-500"><?=$my_name?>echo var_dump$(value: $_Post);</span>
     <?php
        $my_name = "Prof. Lee";
        $welcome = "Welcome to my website";
        echo $welcome.$my_name;
     ?>
    </div>
</section>


  <!--section content-->
  <section>
    <div class="bg-violet-200 p-8">
        <div class="grid grid-cols-3 gap-4">

            <div class="border border-orange-500 rounded-md shadow-lg p-4">
                <div class="bg-gray-300 text-center text-lg font-semibold pt-2 pb-2 rounded-tl-md rounded-tr-md ">header</div>
                <div class="p-4 border b">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                <div class="p-4">read more </div>
            </div>
            <div class="border border-orange-500 rounded-md shadow-lg p-4">
                <div class="bg-gray-300 text-center text-lg font-semibold pt-2 pb-2 rounded-tl-md rounded-tr-md ">header</div>
                <div class="p-4 border b">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                <div class="p-4">read more </div>
            </div>
            <div class="border border-orange-500 rounded-md shadow-lg p-4">
                <div class="bg-gray-300 text-center text-lg font-semibold pt-2 pb-2 rounded-tl-md rounded-tr-md ">header</div>
                <div class="p-4 border b">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                <div class="p-4">read more </div>
            </div>
        </div>       
    </div>
  </section>
 
  <!--section footer-->
  <section>
        <div class="p-8 bg-gray-700">
      <div class="text-gray-100 text-2xl mb-8">contact me</div>
      <form class="grid space-y-8" action="/index.html" method="post">
        <input  name="visitor_name" class="rounded p-2 text-lg w-72" type="text" placeholder="please write your name">
        <textarea name="visitor_message" class="rounded p-2 text-lg w-72" placeholder="please write your message"></textarea>
        <button type="submit" class="bg-blue-500 text-gray-100 w-32 rounded p-2 text-lg" >senden</button>
      </form>
    </div>
      <footer class="bg-gray-800 text-gray-100 p-4 h-32">   
         <?php  echo "copyright Prof Lee 2025" ?>
      </footer>
  </section>
</body>
</html>