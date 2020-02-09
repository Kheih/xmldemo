<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://newapp-faus.herokuapp.com/rssf.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("music");
 ?>

 <h1>Music</h1>

 <?php
 foreach( $content as $data )
 {
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $artist = $data->getElementsByTagName("artist")->item(0)->nodeValue;
     $genre = $data->getElementsByTagName("genre")->item(0)->nodeValue;
     $writer = $data->getElementsByTagName("writer")->item(0)->nodeValue;
     echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>Artist: $artist </li>
                  <li>Genre: $genre </li>
                  <li>Writer: $writer </li>
              </ul>
          </ul>";
 }
?>
