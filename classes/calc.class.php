<?php
    class Calc {
        private $num1;
        private $num2;
        private $operator;

        public function __construct(int $num1, int $num2, string $operator){
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->operator = $operator;
        }

        public function get_result(){
            switch ($this->operator) {
                case 'addition':
                    $result = $this->num1 + $this->num2;
                    return $result;    
                break;

                case 'subtraction':
                    $result = $this->num1 - $this->num2;
                    return $result;    
                break;

                case 'multiplication':
                    $result = $this->num1 * $this->num2;
                    return $result;    
                break;

                case 'division':
                    $result = $this->num1 * $this->num2;
                    return $result;    
                break;

            }
        }
    }