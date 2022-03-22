<?php

include_once './Data_Structures/LinkedList/SinglyLinkedList/SinglyLinkedList.php';
/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute stack Problem
 */
class stack
{
    public $singlyLinkedList;
    public function __construct($object)
    {
        $this->singlyLinkedList = $object;
    }

    /**
     * Function to add new element
     * Passing data as parameter
     */
    public function push($data)
    {
        $this->singlyLinkedList->insertAtFirst($data);
    }

    /**
     * Function to delete element from stack
     * Using LIFO method to delete
     * Non-Parameterized function 
     */
    public function pop()
    {
        $this->singlyLinkedList->deleteFirst();
    }

    /**
     * Function to get the peek node data
     * Non-Parameterized function
     */
    public function peek()
    {
        echo "\nPeek of stack is: " . $this->singlyLinkedList->headNode();
    }

    /**
     * Function to calculate the size of a stack
     * Prints the size of the stack
     * Non-Parameterized function
     */
    public function size()
    {
        $count = $this->singlyLinkedList->count();
        echo "Size of stack is: " . $count;
    }

    /**
     * Function to check the stack is empty or not
     * Non-Parameterized function
     */
    public function isStackEmpty()
    {
        $this->singlyLinkedList->isTheListEmpty();
    }

    /**
     * Function to print the elements of the stack
     * Non-Parameterized function
     */
    public function printStack()
    {
        $this->singlyLinkedList->printList();
    }
}
$singlyLinkedList = new SinglyLinkedList();
$stack = new stack($singlyLinkedList);
$stack->isstackEmpty();
$stack->push(10);
$stack->push(25);
$stack->push(13);
$stack->printStack();
$stack->size();
$stack->peek();
$stack->pop();
$stack->printStack();
$stack->size();
$stack->peek();
