<?phpa
    $multi=array(array(1,2),array(3,4),array(5,6));
    echo "\n$multi[0][0]\n";
    unset($multi[2][0]);
    print_r($multi);
?>
