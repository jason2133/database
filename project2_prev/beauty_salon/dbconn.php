<?

    //database connect
    $connect=mysqli_connect( "localhost", "root", "autoset", "beauty_salon") or  
        die( "cannot connect<br>"); 

    mysqli_query($connect,'set names utf8');
?>

