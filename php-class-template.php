<?php

// Namspace for the class
namespace rdp_namespace;


if (!class_exists("RdpDemoClass")) {
    class RdpDemoClass
    {
        protected static $instance = false;


        public static function getInstance()
        {
            if (! self::$instance) {
                self::$instance = new self();
            }


            return self::$instance;
        }
        // Constructor
        public function __construct()
        {
            self::$instance = $this;
            $this->wdmAddActions();
            $this->wdmAddFilters();
        }


        // All the add action goes here
        public function wdmAddActions()
        {
        }


        // All the add filters go here
        public function wdmAddFilters()
        {
        }
    }
}


new RdpDemoClass();




