<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Stack Problem using array
 */
class Stack
{
    public $stackArray;
    public $top;
    public $size;

    public function __construct($size)
    {
        $this->stackArray = array();
        $this->top = -1;
        $this->size = $size;
    }

    /**
     * Function to insert the elements into stack
     * Passing data as a parameter
     */
    public function push($data)
    {
        //array_unshift($this->stack, $data);
        if ($this->top == -1) {
            echo "\nStack UnderFlow.";
        }
        $this->top++;
        $this->stackArray[$this->top] = $data;
    }

    /**
     * Removes top element from a stack
     * Follows LIFO method for deletion
     * Non-Parameterized Function
     */
    public function pop()
    {
        if (empty($this->stackArray)) {
            echo "\nStack is empty";
        } else {
            echo "\nPopped Element: " . $this->stackArray[$this->top];
            unset($this->stackArray[$this->top]);
            $this->top--;
        }
    }

    /**
     * Function to Display the elements of the stack
     * Non-Parameterized function
     */
    public function display()
    {
        echo "\nCurrent Elements in stack are:: ";
        for ($i = 0; $i < count($this->stackArray); $i++) {
            echo $this->stackArray[$i] . " ";
        }
    }

    /**
     * Function to get peek value of Stack
     * Printing the peek value
     * Non-parameterized funciton
     */
    public function peekOfStack()
    {
        echo "\nPeek of Stack is: " . $this->stackArray[$this->top];
    }

    /**
     * Function to get size of stack
     * Printing the size
     * Non-parameterized funciton
     */
    public function sizeOfStack()
    {
        echo "\nSize of stack is: " . count($this->stackArray);
    }

    /**
     * Function to check stack is empty
     * Non-parameterized funciton
     */
    public function isStackEmpty()
    {
        if (count($this->stackArray) == 0) {
            echo "\nThe stack is empty.";
        } else {
            echo "\nThe stack is not empty.";
        }
    }

    /**
     * Function to check stack overflow
     * Non-parameterized function
     */
    public function stackOverflow()
    {
        if (count($this->stackArray) > $this->size) {
            echo "\nStack OverFlow.";
        } else {
            echo "\nStack Not OverFlow.";
        }
    }
}

$stack = new Stack(5);
$stack->isStackEmpty();
$stack->push(1);
$stack->push(2);
$stack->display();
$stack->peekOfStack();
$stack->sizeOfStack();
$stack->pop();
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->display();
$stack->pop();
$stack->display();
$stack->peekOfStack();
$stack->sizeOfStack();
$stack->isStackEmpty();
$stack->stackOverflow();
