<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Queue Problem using array
 */
class Queue
{
    public $queueArray;
    public $front;
    public $back;
    public $size;

    public function __construct($size)
    {
        $this->queueArray = array();
        $this->front = -1;
        $this->back = -1;
        $this->size = $size;
    }

    /**
     * Function to add elements to the queue
     * Passing the data as parameter
     */
    public function enqueue($data)
    {
        //array_push($this->queueArray, $data);
        if ($this->front == -1 && $this->back == -1) {
            echo "\nQueue UnderFlow.";
            $this->front++;
        }
        $this->back++;
        $this->queueArray[$this->back] = $data;
    }

    /**
     * Function to delete the element from queue
     * Follow the FIFO mechanism to delete
     * Non-Parameterized function
     */
    public function dequeue()
    {
        if ($this->front == -1) {
            echo "\nQueue is empty";
        } else {
            if ($this->front == $this->back) {
                $this->front--;
            }
            echo "\nDequeued element: " . $this->queueArray[$this->front];
            for ($i = 0; $i < $this->back; $i++) {
                $temp = $this->queueArray[$i];
                $this->queueArray[$i] = $this->queueArray[$i + 1];
                $this->queueArray[$i + 1] = $temp;
            }
            unset($this->queueArray[$this->back]);
            $this->back--;
        }
    }

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
     * Function to get peek value of queue
     * Printing the peek value
     * Non-parameterized funciton
     */
    public function peekOfQueue()
    {
        echo "\nPeek of queue is: " . $this->queueArray[$this->front];
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
    public function queueOverflow()
    {
        if (count($this->queueArray) > $this->size) {
            echo "\nQueue OverFlow.";
        } else {
            echo "\nQueue Not OverFlow.";
        }
    }
}
$queue = new Queue(5);

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
$queue->dequeue();
$queue->display();
$queue->peekOfQueue();
$queue->sizeOfQueue();
$queue->queueOverflow();
