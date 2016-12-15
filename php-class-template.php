<?php

// Namspace for the class
namespace rdp_namespace;

/**
* Check if the class exists
**/
if (!class_exists("RdpDemoClass")) {
    class RdpDemoClass
    {
        /**
        * Stores the current instance of the class.
        **/
        protected static $instance = false;

        /**
        * Function to return the instance of the class
        * If the instance is not created, it creates a new instance and returns it
        * @return object
        **/
        public static function getInstance()
        {
            if (! self::$instance) {
                self::$instance = new self();
            }


            return self::$instance;
        }
        /**
        * The constructor
        **/
        public function __construct()
        {
            self::$instance = $this;
            $this->wdmAddActions();
            $this->wdmAddFilters();
        }


        /**
        * All the add action goes here
        **/
        public function wdmAddActions()
        {
        }


        /**
        * All the add filters go here
        **/
        public function wdmAddFilters()
        {
        }
    }
}


new RdpDemoClass();




