<?php
namespace App;


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