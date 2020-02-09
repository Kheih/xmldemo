<?php
    $rssf= '<?xml version="1.0" encoding="UTF-8"?>';
    $rssf .= '<rss version="2.0">';
    $rssf .= '<channel>';

    $con = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820410") or die (mysqli_error($con));
    $sql = "SELECT * FROM tblmusic;";
    $q = mysqli_query($con, $sql) or die (mysqli_error($con));

    while($row= mysqli_fetch_assoc($query)){
        extract($row);
        
        $rssf .= '<music>';
        $rssf .= '<title>' . $mus_title . '</title>';
        $rssf .= '<artist>' . $mus_artist . '</artist>';
        $rssf .= '<genre>' . $mus_genre . '</genre>';
        $rssf .= '<writer>' . $mus_writer . '</writer>';
        $rssf .= '</music>';
    }
    $rssf .= '</channel>';
    $rssf .= '</rss>';

    echo $rssf;
?>
