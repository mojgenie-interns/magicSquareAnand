<?php
class MagicSquare
{
    public $size;
    public $startNumber;
    public $row;
    public $column;

    function  __construct()
    {

        $size=$argv[1];
        $startNumber=$argv[2];
        $row=0;
        $column=(int)$size/2;

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
    }

    public function insert($row,$column,$magic_Square,$value)
    {

        $new_row=$row-1;
        $new_column=$row+1;
        if($new_row==-1)
        {
            $new_row+=$this->size;
        }
        if($new_column==$this->size)
        {
            $new_column=0;
        }
        if($magic_Square[$new_row][$new_column]!=-1)
        {
            $new_row=$row+1;
            $new_column=$column;
        }

        $magic_Square[$new_row][$new_column]==$value;
        return array($new_row,$new_column);

    }

    public function mainFunction()
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
        $new_row=$this->row;
        $new_column=$this->column;
        $magic_Square[$new_row][$new_column]=$startNumber;
        $maxValue=pow(size,2)+$startNumber;
        for($value=$startNumber+1;$value<=$maxValue;$value++)
        {
            $array=self::insert($new_row,$new_column,$magic_Square,$value);
            $new_row=$array[0];
            $new_column=$array[1];

        }

    }

}

$magicsquare= new MagicSquare();
$magicsquare->mainFunction();
$magicsquare->display();
 
?>
