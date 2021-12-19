<?php


echo '<nav class="navbar navbar-default probootstrap-navbar">
<div class="container">
    <div class="navbar-header">
        <div class="btn-more js-btn-more visible-xs">
            
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php" title="STUDENT MENTORSHIP PROGRAMME">
<img src="../enlight/img/smp.png" class="logo-image" alt="no img">
</a>
    </div>

    <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>';
            if(!$loggedin)
             echo '<li><a href="signin.php" >Login</a></li>';
            echo '<li><a href="mentor.php">Mentors</a></li>
            <li><a href="alumnis.php">Our Alumni</a></li>
            <li><a href="announcements.php">Announcements</a></li>
            <!-- <li><a href="academics.php">Academics</a></li> -->
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                    <li><a href="academics.php">Academics</a></li>
                    <li><a href="campus.php">Campus Life</a></li>
                    <li><a href="google_map.php">College Map</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="faqs.php">FAQ"s</a></li>
                    <li class="dropdown-submenu dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Extra - Curricular</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="events.php">Events</a></li>
                            <li><a href="clubs.php">Clubs</a></li>
                            <li><a href="sports.php">Sports</a></li>
                            <!-- <li><a href="#">Second Level Menu</a></li> -->
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="contact.php">Contact Us</a></li>';
            if($loggedin)
                      echo '<li><a href="logout.php" >Logout</a></li>';
                      echo '</ul>
        
   </div>
</div>
</nav>';
      ?>