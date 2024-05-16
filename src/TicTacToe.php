
<?php 

namespace App

class TicTacToe
{
    public TicTacEntery $ticTacEntery;
    public  TicTacDisplay $ticTacDisplay;

    public function __construct()
    {
        $this->ticTacEntery=new TicTacEntery();
        $this->ticTacDisplay=new TicTacDisplay();

    }
 
    public function callTicTacToe()
    {
     $this->ticTacEntery->choiceEntery();
     $this->ticTacDisplay->displayStructure();

     for($i = 0; $i < 9 ; $i++)
     {
        if($i % 2 == 0)
        {
            $choice=$this->player1Choice;
        }

        $this->ticTacEntery->ticTacEntery->enterPosition();
        $this->ticTacDisplay->displayTicTac($ticTacEntery);
     }
    }
}