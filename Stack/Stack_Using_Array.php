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
        } elseif ($this->stackOverflow()) {
            echo "\nStack OverFlow.";
            return;
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
        if ($this->isStackEmpty()) {
            echo "\nStack is empty.";
        } else {
            echo "\nPopped Element: " . $this->stackArray[$this->top--];
            //unset($this->stackArray[$this->top]);
            //$this->top--;
        }
    }

    /**
     * Function to Display the elements of the stack
     * Non-Parameterized function
     */
    public function display()
    {
        if ($this->isStackEmpty()) {
            echo "The Stack is Empty.";
        } else {
            echo "\nCurrent Elements in stack are:: ";
            for ($i = $this->top; $i >= 0; $i--) {
                echo $this->stackArray[$i] . " ";
            }
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
        echo "\nSize of stack is: " . $this->top + 1;
    }

    /**
     * Function to check stack is empty
     * Non-parameterized funciton
     */
    public function isStackEmpty()
    {
        if ($this->top == -1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Function to check stack overflow
     * Non-parameterized function
     */
    public function stackOverflow()
    {
        if ($this->top + 1 == $this->size) {
            return true;
        } else {
            return false;
        }
    }
}

$stack = new Stack(5);
$stack->push(1);
$stack->push(2);
$stack->display();
$stack->peekOfStack();
$stack->pop();
$stack->display();
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);
$stack->push(7);
$stack->display();
$stack->pop();
$stack->display();
$stack->peekOfStack();
$stack->sizeOfStack();
