<?php

/* Controller & Like a Model */
if (!class_exists('mb_marketing')){
    class mb_marketing
    {
        public $magicBox;
        public $options;

        function __construct($depencyInjection) {

            if (is_object($depencyInjection)){
                $this->magicBox  = $depencyInjection;
                $this->options   = $this->magicBox->options;
                $this->postValue = $this->magicBox->postValue;
            }

        }


        function index() {

        }


        function toDo() {

            return false;
        }

    }
}


?>