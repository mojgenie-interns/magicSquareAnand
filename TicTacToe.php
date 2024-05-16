<?php

class TicTacIn{
    public $player1Choice;
    public $choice;
    public $player2Choice;
    public $position;

    public function __constructor()
    {
        $this->choice = readline ("Enter the choice of first Player:");
        if( $this->choice != 'x'||'X'||'o'||'O')
        {
            echo "Wrong input";
            return ;
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

    public function readPosition()
    {
        $this->position = readline("enter the position");
        return $this->position;

    }
    function entryValues(TicTacToe $obj,$ticTacOutObj)
    {
        $count = 1;

        for ($i = 0;$i < 3;$i++)
        {

            for ($j = 0;$j < 3;$j++)
            {
                if($count == $obj->position)
                $obj-> data[$i][$j]=$ticTacOutObj->choise;
                $count++;
            }

        }
    }
}
class TicTacOut{
    function displayPosition()
    {
        $count = 1;

        for ($i = 0;$i < 3;$i++)
        {

            echo "\n";

            for ($j = 0;$j < 3;$j++){
                echo $count,"\t";
                $count++;
            }

        }
    }

    function displayEachEntry($data)
    {
        for ($i = 0;$i < 3;$i++){
            echo "\n";

            for ($j = 0;$j < 3;$j++){
                echo $data[$i][$j],"\t";
            }

        }
    }

}
class Result{
    
    public function checkResult($data)
    {
        if( $this->data[0][0] == $this->data[0][1] && $this->data[0][1] == $this->data[0][2])
            return true;

        if( $$his->data[1][0] == $this->data[1][1] && $this->data[1][1] == $this->data[1][2])
            return true;

        if( $this->data[2][0] == $this->data[2][1] && $this->data[2][1] == $this->data[2][2])
            return true;

        if( $this->data[0][0] == $this->data[1][0] && $this->data[1][0] == $this->data[2][0])
            return true;

        if( $this->data[0][1] == $this->data[1][1] && $this->data[1][1] == $this->data[2][1])
            return true;

        if( $this->data[0][2] == $this->data[1][2] && $this->data[1][2] == $this->data[2][2])
            return true;

        if( $this->data[2][1] == $this->data[1][1] && $this->data[1][1] == $this->data[0][2])
            return true;

        if( $this->data[0][0] == $this->data[1][1] && $this->data[1][1] == $this->data[2][2])
            return true;

        return false;
    }
}

class TicTacToe{
    public $data;
    public $player1Choice;
    public $player2Choice;
    public $position;
    public $result;
    public Result $resultObect;
    public TicTacin $ticTacInObj;
    public TicTacOut $ticTacOutObj;


    function __construct()
    {
        $this->data = array_fill(0, 3, array_fill(0, 3, 0));
    }

}
$ticTacOutObj->displayPosition();

    for ( $i =0 ; $i < 9; $i++)
    {
        
        $this->position = $ticTacInObj->readPosition();
        $this->ticTacOut->displayEachEntry($this->data);
        $this->ticTacOut->checkResult($this->data);
        
    }
?> 