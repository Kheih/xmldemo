<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://newapp-faus.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("music");
 ?>

 <h1>Articles</h1>

 <?php
 foreach( $content as $data )
 {
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $description = $data->getElementsByTagName("artist")->item(0)->nodeValue;
     $author = $data->getElementsByTagName("genre")->item(0)->nodeValue;
     $created = $data->getElementsByTagName("writer")->item(0)->nodeValue;
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
