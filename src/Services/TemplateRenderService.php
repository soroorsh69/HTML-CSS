<?php
namespace Php\Project\Services;
class TemplateRenderService{
    public function render(array $data){


        ob_start();
        include __DIR__ . '/../../templates/homepage.phtml';
       
        return ob_get_clean();


    }
}