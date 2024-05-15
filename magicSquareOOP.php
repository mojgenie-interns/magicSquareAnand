<?php

class CircularGrid
{
    public $rows;
    public $columns;
    public $data;
    public $currentRow;
    public $currentCol;

    function __construct($rows, $columns){
        $this->rows = $rows;
        $this->columns = $columns;
        $this->data = array_fill(0, $rows, array_fill(0, $columns, 0));
        
    }

    function reset()
    {
        $this->currentRow = 0;
        $this->currentCol = 0;
    }

    function getRow()
    {
        return $this->currentRow;
    }

    function getColumn()
    {
        return $this->currentCol;
    }

    function moveTo(mixed $row, mixed $column): void{
        $this->currentRow = $row;
        $this->currentCol = $column;
    }

    function moveUp(): void {
        $this->currentRow = $this->currentRow - 1;
        if($this->currentRow == -1) $this->currentRow=$this->rows-1;
    }

    function moveRight(): void
    {
        $this->currentCol = $this->currentCol + 1;
        if($this->currentCol == $this->columns) $this->currentCol=0;
    }

    function isFilled(): bool
    {
        return ($this->data[$this->currentRow][$this->currentCol] !=0);
        
    }

    function set(int $value): void
    {
        $this->data[$this->currentRow][$this->currentCol] = $value;
    }

    function moveLeft(): void
    {
        $this->currentCol = $this->currentCol - 1 ;
        if($this->currentCol == -1) $this->currentCol=$this->columns-1;
    }

    function moveDown(): void
    {
        $this->currentRow = $this->currentRow + 1;
        if($this->currentRow == $this->rows) $this->currentRow=0;
    }
}

interface GridDisplayInterface
{
    public function display(CircularGrid $grid);
}

class ConsoleGridDisplay implements GridDisplayInterface
{
    public function display(CircularGrid $grid)
    {
        for ($i = 0; $i < $grid->rows; $i++) {
            for ($j = 0; $j < $grid->columns; $j++) {
                echo $grid->data[$i][$j] . "\t";
            }
            echo "\n";
        }
    }
}

class MagicSquare
{
    private int $size;
    private CircularGrid $grid;

    function __construct($size)
    {
        if ($size % 2 == 0) {
            echo "Please Enter an Odd Dimension";
            return;
        }
        $this->size = $size;
        $this->grid = new CircularGrid($size, $size);
    }

    function generate(int $startingNumber , int $startingRow , int $startingColumn ): void{ 
        $limit = $this->size * $this->size;
        $this->grid->moveTo($startingRow, $startingColumn);

    for ($i = 0; $i < $limit; $i++) {
        $currentNumber = $startingNumber + $i;

        $this->grid->set($currentNumber);

        $this->grid->moveUp();
        $this->grid->moveRight();

        if ($this->grid->isFilled()) {
            // move back first
            $this->grid->moveLeft();
            $this->grid->moveDown();
            $this->grid->moveDown();
        }
    }
}

function display(GridDisplayInterface $display): void
{
    $display->display($this->grid);
}
}
global $argv; 
//echo "Enter Size \n Enter starting number \n Enter startingrow \n Enter startingcolumn";

$size = getLine("Enter the size :");
$startingNumber = getLine("Enter the First value :");
$startingColumn = getLine("Enter the Row Position");
$startingRow = getLine("Enter the Column Position:");
$magicSquare = new MagicSquare($size);
$magicSquare->generate($startingNumber, $startingRow, $startingColumn);
 
//echo "Magic Sum is: ", $magicSquare->getMagicSum(), "\n";
echo "Magic Square generated is given below:\n";
 
$display = new ConsoleGridDisplay();
$magicSquare->display($display);
?>