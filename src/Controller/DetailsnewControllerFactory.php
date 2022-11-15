<?php

namespace Php\Project\Controller;
use Php\Project\Services\DB;




class DetailsnewControllerFactory {
    
    public function __invoke():DetailsnewController
    {
        return new DetailsnewController(new DB());
                

    }
}