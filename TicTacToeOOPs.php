<?php 
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

class TicTacDisplay
{
    function __construct()
        {

        }
    public function displayStructure() : void
    {
        $count = 1;
        for ($i = 0;$i < 3;$i++)
        {
            echo "\n |";
            for ($j = 0;$j < 3;$j++)
            {
                echo "$count \t|";
                $count++;
            }

        }
    }

    public function displayTicTac(TicTacEntery $obj) : void
    {
        for ($i = 0;$i < 3;$i++)
        {
            echo "\n |";
            for ($j = 0;$j < 3;$j++)
            {
                echo $obj->data[$i][$j] ,"\t|";
            }

        } 
    }
    
}

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




$obj= new TicTacToe;
$obj->callTicTacToe();

/*
$obj->choiceEntery();
echo $obj->player1Choice;
echo $obj->player2Choice;
$obj->enterPosition();

$obj1= new TicTacDisplay;
$obj1->displayStructure();
$obj1->displayTicTac($obj);
*/



