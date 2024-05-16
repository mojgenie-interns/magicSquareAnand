<?php 

namespace App


class TicTacEntery
{
   public $player1Choice;
   public $player2Choice;
   public $position;
   public $data;

   public function __construct()
   {
    $this->data = array_fill(0, 3, array_fill(0, 3, 0));
   }

   public function choiceEntery()
   {
    echo "Enter the choice";
    $this->choice=readline();

    if( $this->choice != "x" && "X" && "o" && "O'")
        {
            echo "Wrong Input\n" ;  
            $this->choiceEntery();
            
        }

    if($this->choice=="X"||$this->choice=="x")
        {
            $this->player1Choice = "X" ;
            $this->player2Choice = "O" ;
        }

    if($this->choice=="O"||$this->choice=="o")
        {
            $this->player2Choice = "X" ;
            $this->player1Choice = "O" ;
        }
    }

    public function isFilled($position) : bool
    {
        $count = 1;

        for ($i = 0;$i < 3;$i++)
        {

            for ($j = 0;$j < 3;$j++)
            {
                if($count == $this->position)
                {
                    if($this->data[$i][$j] == 0) 
                       return true;
                }
                
                $count++;
            }

        }

        return false;
    }

    public function enterPosition() 
    {
        echo "\nEnter the position:";
        $this->postion=readline();

        if ($this->isFilled($this->postion))
        {
            echo "The position is already occupied\nEnter a Not occupied position";
            $this->enterPosition();
        }

        $this->data[][] = $this->postion;

    }
}