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
                  <li><a {if $page == 'index'}class="active"{/if} href="index">Home</a></li>
                  <li><a {if $page == 'me'}class="active"{/if} href="me">Me</a></li>
                  <li><a {if $page == 'projects'}class="active"{/if} href="projects">Projects</a></li>
                  <li><a {if $page == 'contact'}class="active"{/if} href="contact">Contact</a></li>
                  <li><a class="external" href="https://github.com/stephanbroek">Github</a>
                  <li><a class="external" href="https://linkedin.com/in/stephanabroek">LinkedIn</a>
                  <li><a class="external" href="https://twitter.com/stephanbroek">Twitter</a>
            </nav>
         </div>
      </div>

      <div id="main">

         {$body}

      </div>

   </body>
</html>
