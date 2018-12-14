<?php
function autoload($controller, $action){
    if(!is_dir(CONTROLLER_PATH.$controller)){
        return false;
    }
    return true;
}
?>