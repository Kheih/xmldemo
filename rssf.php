<?php
    $rssf = '<?xml version="1.0" encoding="UTF-8"?>';
    $rssf .= '<rss version="2.0">';
    $rssf .= '<channel>';

    $con = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820410") or die (mysqli_error($con));
    $sql = "SELECT * FROM tblmusic;";
    $q = mysqli_query($con, $sql) or die (mysqli_error($con));

    while($r= mysqli_fetch_assoc($q)){
        extract($r);
        
        $rssf .= '<music>';
        $rssf .= '<mus_title>' . $mus_title . '</mus_title>';
        $rssf .= '<mus_artist>' . $mus_artist . '</mus_artist>';
        $rssf .= '<mus_genre>' . $mus_genre . '</mus_genre>';
        $rssf .= '<mus_writer>' . $mus_writer . '</mus_writer>';
        $rssf .= '</music>';
    }
    $rssf .= '</channel>';
    $rssf .= '</rss>';

    echo $rssf;
?>
