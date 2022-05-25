<?php

interface Template {
    public function create();
    public function read($id);
}

class Os implements Template{
    public function create(){

    }


    public function read($id)
    {
        // TODO: Implement read() method.
    }
}

class Books extends Os{
    
    
}


?>