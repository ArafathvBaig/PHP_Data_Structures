<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Stack Problem using array
 */
class Stack
{
    public $stackArray = array();

    /**
     * Function to insert the elements into stack
     * Passing data as a parameter
     */
    public function push($data)
    {
        //array_unshift($this->stack, $data);
        $length = count($this->stackArray);
        for ($i = $length; $i > 0; $i--) {
            $this->stackArray[$i] = $this->stackArray[$i - 1];
        }
        $this->stackArray[0] = $data;
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
            echo "\nPopped Element: " . array_shift($this->stackArray);
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
        echo "\nPeek of Stack is: " . $this->stackArray[0];
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
    public function stackOverflow($size)
    {
        if (count($this->stackArray) > $size) {
            echo "\nStack OverFlow.";
        } else {
            echo "\nStack Not OverFlow.";
        }
    }
}

$stack = new Stack();

$size = 4;
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
$stack->stackOverflow($size);
