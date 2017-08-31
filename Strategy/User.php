<?php


    class User
    {
        private $firstName;
        private $lastName;

        public static function Instance()
        {
            static $inst = null;
            if ($inst === null) {
                $inst = new User();
            }

            return $inst;
        }

        private function __construct()
        {

        }

        public function setFirstName($newFirstName)
        {
            $this->firstName = $newFirstName;
        }

        public function getFirstName()
        {
            return $this->firstName;
        }

        public function setLastName($newFirstName)
        {
            $this->lastName = $newFirstName;
        }

        public function getLastName()
        {
            return $this->lastName;
        }
    }




