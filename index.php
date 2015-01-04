<?php

$url = substr($_SERVER['REQUEST_URI'],1) ?: 'index';

?>

<!DOCTYPE html>
<html>
   <head>

      <title>Stephan</title>

      <link href="css/normalize.css" rel="stylesheet" />
      <link href="css/main.css" rel="stylesheet" />

      <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

      <!--[if lt IE 9]>
         <script src="js/html5shiv.js"></script>
      <![endif]-->
   </head>
   <body>
      <div id="outer">
         <div id="header">

            <div id="heading">
               Stephan Broek
            </div>

            <nav>
               <ul>
                  <li><a <?php if ($url == 'index') echo ' class="active" '; ?> href="index">Home</a></li>
                  <li><a <?php if ($url == 'me') echo ' class="active" '; ?> href="me">Me</a></li>
                  <li><a <?php if ($url == 'projects') echo 'class="active" '; ?> href="projects">Projects</a></li>
                  <li><a class="external" href="https://github.com/stephanbroek">Github</a>
            </nav>
         </div>
      </div>

      <div id="main">

         <?= $url;?>
         
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fringilla, nisl vel venenatis porttitor, erat erat vehicula nulla, a tincidunt nunc velit ut leo. Fusce mollis nibh vitae lectus aliquet tempus. Mauris gravida luctus accumsan. Donec euismod ornare ex, id pulvinar ipsum. Curabitur porttitor, arcu a ultrices mattis, est ante ultricies ligula, nec commodo lectus sem sed lectus. Proin cursus sapien quis tempor ornare. Nulla vitae tortor nec tortor viverra venenatis. Morbi accumsan blandit mi, vel imperdiet mi vestibulum vitae. Sed interdum odio sapien, quis fermentum ligula pellentesque sit amet. Morbi blandit lacus sagittis augue posuere tincidunt. Donec magna augue, faucibus ac tristique a, lobortis a metus. Etiam venenatis odio a lobortis convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam quis pulvinar lacus, nec pharetra dui. Aliquam finibus nulla urna, at volutpat ipsum tincidunt nec.</p>

         <p>Maecenas ac lectus tempus, gravida enim in, gravida felis. Curabitur ac erat id neque suscipit pulvinar. Cras a sollicitudin enim. Mauris sit amet tincidunt felis. Nulla facilisi. Nunc fermentum felis non justo tempor, id efficitur nisl vulputate. Proin vel laoreet massa, nec fringilla sapien. Morbi imperdiet, tortor non vehicula feugiat, sapien dui blandit lectus, in blandit metus augue vitae mi. Duis nunc dui, dapibus eget dolor in, semper lacinia ipsum. Duis ac tincidunt lectus. Morbi dignissim velit ut arcu ultricies, at commodo sem efficitur. Pellentesque ullamcorper justo libero, ac luctus orci vulputate sed. Nam sodales mollis arcu, ut fringilla leo viverra at. Vivamus pellentesque consectetur nulla quis semper. Curabitur aliquam sapien quis leo eleifend semper. In sit amet tempor nisi.</p>

         <p>Nunc erat nulla, dictum commodo interdum eu, hendrerit nec ligula. Morbi tempus felis felis, malesuada rutrum lacus porttitor vitae. Duis viverra euismod justo sit amet fermentum. Vivamus tempor diam ipsum, non pellentesque nisi aliquet a. In gravida iaculis metus, sit amet gravida neque vehicula eu. Vivamus feugiat accumsan dolor, ut finibus risus feugiat eu. Sed semper eros ante, a gravida urna pretium non. Nulla blandit lacus id sapien rutrum semper. Nunc aliquet posuere aliquam. Phasellus libero sapien, tincidunt at viverra eget, ultrices vitae orci. Donec vitae efficitur turpis. Proin nulla urna, vulputate eu erat in, porttitor porttitor dui. </p>

      </div>

   </body>
</html>
