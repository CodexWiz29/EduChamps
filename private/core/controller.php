<?php 

// Main Controller Class
class Controller
{
    public function view($view, $data = array())
    {
        extract($data);
        if(file_exists("../private/views/auth/" . $view . ".view.php"))
        {
            require "../private/views/auth/" . $view . ".view.php";
        }
        else 
        {
            require"../private/views/auth/404.view.php";
        }
    }
}

?>