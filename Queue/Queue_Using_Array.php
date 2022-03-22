<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Queue Problem using array
 */
class Queue
{
    public $queueArray = array();

    /**
     * Function to display all the elements of queue
     * Non-Parameterized function
     */
    public function display()
    {
        echo "\nElements of queue:: ";
        foreach ($this->queueArray as $values) {
            echo $values . " ";
        }
    }

    /**
     * Function to add elements to the queue
     * Passing the data as parameter
     */
    public function enqueue($data)
    {
        //array_push($this->queueArray, $data);
        $this->queueArray[count($this->queueArray)] = $data;
    }

    /**
     * Function to delete the element from queue
     * Follow the FIFO mechanism to delete
     * Non-Parameterized function
     */
    public function dequeue()
    {
        if (empty($this->queueArray)) {
            echo "\nQueue is empty";
        } else {
            echo "\nDequeued element: " . array_shift($this->queueArray);
        }
    }

    /**
     * Function to get peek value of queue
     * Printing the peek value
     * Non-parameterized funciton
     */
    public function peekOfQueue()
    {
        echo "\nPeek of queue is: " . $this->queueArray[0];
    }

    /**
     * Function to get size of queue
     * Printing the size
     * Non-parameterized funciton
     */
    public function sizeOfQueue()
    {
        echo "\nSize of queue is: " . count($this->queueArray);
    }

    /**
     * Function to check queue is empty
     * Non-parameterized funciton
     */
    public function isQueueEmpty()
    {
        if (count($this->queueArray) == 0) {
            echo "\nThe queue is empty.";
        } else {
            echo "\nThe queue is not empty.";
        }
    }

    /**
     * Function to check queue overflow
     * Non-parameterized function
     */
    public function queueOverflow($size)
    {
        if (count($this->queueArray) > $size) {
            echo "\nQueue OverFlow.";
        } else {
            echo "\nQueue Not OverFlow.";
        }
    }
}
$queue = new Queue();

$size = 5;
$queue->isQueueEmpty();
$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);
$queue->display();
$queue->sizeOfQueue();
$queue->dequeue();
$queue->display();
$queue->enqueue(40);
$queue->enqueue(99);
$queue->enqueue(121);
$queue->enqueue(143);
$queue->display();
$queue->peekOfQueue();
$queue->sizeOfQueue();
$queue->queueOverflow($size);
