<?php
   echo '    <!-- NAV -->
   <nav class="navbar navbar-dark bg-transparent navbar-expand-md py-2" id="main-nav">
       <div class="container">
           <a href="main.php" class="navbar-brand mr-auto">
               <img src="./images/Logo/logo1.png" width="250" height="100" alt="" class="img-fluid">
           </a>

           <button role="button" class="navbar-toggler" data-toggle="collapse" data-target="#idcollapse">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="idcollapse">
               <ul class="navbar-nav ml-auto">
                   <li class="nav-item">
                       <a href="main.php" class="nav-link">Home</a>
                   </li>
                   <li class="nav-item">
                       <a href="userpage.php" class="nav-link">Your Watchlist</a>
                   </li>
                   <li class="nav-item">
                       <a href="register.php" class="nav-link">Login</a>
                   </li>
                   <li class="nav-item">
                       <a href="register.php" class="nav-link">Sign Up</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>';

?>