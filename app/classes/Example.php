<?php

namespace app\classes;

class Example
{
    public $firstNumber;
    public $secondNumber;
    public $thirdNumber;
    public $i;
    public $data = [];
    public function index()
    {
        echo 'firstNumber = 10 ,  secondNumber =20  ,thirdNumber=30 ';

        echo '<br/> <br/>';


        $this->firstNumber = 10;
        $this->secondNumber = 20;
        $this->thirdNumber = 30;

        echo 'Find The biggest Number from FirstNumber=10 & SecondNumber=20';
        echo '<br/> <br/>';


        if ($this->firstNumber <  $this->secondNumber) {
            echo $this->secondNumber . 'is Big Number';
        } else {
            echo $this->firstNumber . 'is Big Number';
        }
        // ======================================================================= 
        echo '<br/> <br/>';

        echo 'Find The biggest Number from FirstNumber=10 & SecondNumber=20 and ThirdNumber=30';
        echo '<br/> <br/>';



        if (($this->thirdNumber > $this->secondNumber) && ($this->thirdNumber > $this->firstNumber)) {
            echo $this->thirdNumber . 'is Big Number';
        } else {
            echo $this->thirdNumber . 'is not  Big';
        }
        echo '<br/> <br/>';

        // ==============================================================  
        // Switch Case
        echo ' Input 10 and check which Number it is';
        echo '<br/> <br/>';

        switch ($this->firstNumber) {
            case 10;
                echo 'this is' . $this->firstNumber;
                break;

            case 20;
                echo 'this is' . $this->secondNumber;
                break;

            case 30;
                echo 'this is ' . $this->thirdNumber;
                break;

            default:
                echo 'Input is Error';
        }
        echo '<br/> <br/>';


        // =============================================  
        // Loop Practice  

        // For Loop
        echo 'show all number Between First Number to Second Number';

        echo '<br/> <br/>';

        for ($i = $this->firstNumber; $i < $this->secondNumber; $i++) {
            echo $i . ' ';
        }

        echo '<br/> <br/>';


        // ====================================================   
        // While Loop
        echo 'show all number Between 5 to Second Number using While Loop';

        echo '<br/> <br/>';


        $i = 5;
        while ($i < $this->secondNumber) {
            echo $i . ' ';
            $i++;
        }
        echo '<br/> <br/>';


        // =======================================   
        // Practice do While Loop  
        echo 'show all number Between 15 to Second Number Using Do while loop';

        echo '<br/> <br/>';


        $this->i = 15;
        do {
            echo $this->i . ' ';
            $this->i++;
        } while ($this->i < $this->secondNumber);
        echo '<br/> <br/>';


        // ====================================      
        // for each Practice  
        echo ' Array is 10,20,100.200,Rahim,Karim ';
        echo ' Show All data using For Each';

        echo '<br/> <br/>';


        $this->data = [10, 20, 100.200, 'Rahim', 'Karim'];
        foreach ($this->data as $singleValue) {
            echo $singleValue . '<br />';
        };

        echo '<br/> <br/>';

        // ===================================================  
        echo 'Multi Dimentional Array';
        $this->data = [
            0 => [
                'name' => 'mehedi',
                'phone' => [
                    'mobile_one' => '01212121212',
                    'mobile_two' => '012121212',
                ],
                'email' => 'saikat@gmail.com'
            ],
            1 => [
                'name' => 'hasan',
                'phone' => '01222545454',
                'email' => 'hasan@gmail.com'
            ],
        ];

        foreach ($this->data as $index) {

            echo $index['name'] . ' ' . $index['email'] . ' ' . $index['phone'] . '<br />';
        };
    }
}
