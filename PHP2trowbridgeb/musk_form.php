

<!DOCUMENT html>
<html>
<body>
<?php
    
function post(){ 
$muskateers = $_POST ["muskateer"];
if ($muskateers){
    foreach ($i as $muskateers){
        
        switch($i){
                case(0):
                    echo " D'Artgnon<br>";
                    break;
                case(1):
                    echo "Athos<br>";
                    break;
                case(2):
                    echo "Parthos<br>";
                    break;
                case(3):
                    echo "Aromith<br>";
                    break;
            }
        }
    }
    else{
        echo "Nothing Checked";
    }
}
?>
</body>
</html>
