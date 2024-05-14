<?php
class MagicSquare
{   
    public $size;
    public $startNumber;
    public $row;
    public $column;
    public $magic_Square;

    function  __construct()
    {
        global $argv;
        $this->size=$argv[1];
        $this->startNumber=$argv[2];
        $this->row=0;
        $this->column=(int)$this->size/2;
    }

    public function displayMagicSquare($magic_Square)
    {
        for( $i=0; $i < $this->size ; $i++)
        {
            echo "\n |";

            for( $j=0; $j < $this->size ; $j++)
            {
                echo $magic_Square[$i][$j]."\t|";
            }
        }

        echo "\n\n";
    }

    public function insert($row,$column,$magic_Square)
    {

        $new_row=$row-1;
        $new_column=$column+1;
        
        if($new_row==-1)
        {
            $new_row=$this->size-1;
        }
        if($new_column==$this->size)
        {
            $new_column=0;
        }
        if(($magic_Square[$new_row][$new_column])!=-1)
        {
            $new_row=$row+1;
            $new_column=$column;   
        }

        return array($new_row,$new_column);

    }

    public function mainFunction($magic_Square)
    {
        $new_row=$this->row;
        $new_column=(int)($this->column);
        $magic_Square[$new_row][$new_column]=$this->startNumber;
        $maxValue=$this->size*$this->size+$this->startNumber;
        while($this->startNumber<$maxValue)
        {
            $this->startNumber++;
            $array=self::insert($new_row,$new_column,$magic_Square);
            $new_row=$array[0];
            $new_column=$array[1];
            $magic_Square[$new_row][$new_column]=$this->startNumber;

        }
        return $magic_Square;

    }

    public function arrayInitialization()
    {
        $magic_Square=array();
        for( $i=0; $i < $this->size ; $i++)
        {
            $magic_Square[$i]=array();
            for( $j=0; $j < $this->size ; $j++)
            {
                $magic_Square[$i][$j]=-1;
            }
        }
        return $magic_Square;
    }

}

Echo "\n\n\n\t\t\tWelcome to the World of Magic Square\n\n\n";
$magicsquare=new MagicSquare();    
$magic_Square=$magicsquare->arrayInitialization();
$magic_array=$magicsquare->mainFunction($magic_Square);
$magicsquare->displayMagicSquare($magic_array);
 
?>
