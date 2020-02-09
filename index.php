<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://newapp-faus.herokuapp.com/rssf.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("music");
 ?>

 <h1>Music</h1>

 <?php
 foreach( $content as $data )
 {
     $mus_title = $data->getElementsByTagName("mus_title")->item(0)->nodeValue;
     $mus_artist = $data->getElementsByTagName("mus_artist")->item(0)->nodeValue;
     $mus_genre = $data->getElementsByTagName("mus_genre")->item(0)->nodeValue;
     $mus_writer = $data->getElementsByTagName("mus_writer")->item(0)->nodeValue;
     echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>Artist: $mus_artist </li>
                  <li>Genre: $mus_genre </li>
                  <li>Writer: $mus_writer </li>
              </ul>
          </ul>";
 }
?>
