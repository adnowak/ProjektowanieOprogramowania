<?php 

abstract class View
{
    public function escapeHtml($string)
    {
        return htmlspecialchars($string);
    }

    public function loadView($view) 
    {
        require_once VIEWS . $view;
    }

    public function asset($asset) 
    {
        return "/" . $asset;
    }
}
