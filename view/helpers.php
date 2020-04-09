<?php
function getTextState($state)
{
    switch ($state) {
        case 1:
            return 'Neuf';
            break;
        case 2:
            return 'Usagé';
            break;
        case 3:
            return 'Vieux';
            break;
        case 4:
            return 'Mort';
            break;
        default:
            return '???';
    }
}

function cartButton(){
    if(isset($_SESSION['cart'])){
        return "<a class='btn btn-secondary disabled'></a>";
    }else{
        return "<a href='?viewCart' class='btn btn-secondary'>Panier</a>";
    }


}

?>