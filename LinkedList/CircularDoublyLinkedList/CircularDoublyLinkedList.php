<?php

include './Data_Structures/LinkedList/DoublyLinkedList/Node.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Circular Doubly Linked List
 */
class CircularDoublyLinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Function to add data into the list
     * Passing the data as parameter
     */
    public function insertAtLast($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $newNode->prev = null;
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->next = $this->head;
            $newNode->prev = $temp;
            $this->head->prev = $newNode;
        }
    }

    /**
     * Function to add a data at first (head)
     * Passing data as parameter
     */
    public function insertAtFirst($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $newNode->prev = null;
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
    }

    /**
     * Function to add a data at a given position
     * Passing data and position as parameters
     */
    public function insertAtPosition($data, $position)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $temp = $this->head;
        $noOfElements = 0;

        if ($temp != null) {
            $noOfElements++;
            $temp = $temp->next;
        }
        while ($temp != $this->head) {
            $noOfElements++;
            $temp = $temp->next;
        }
        if ($position < 1 || $position > ($noOfElements + 1)) {
            echo "\nInvalid Position.";
        } else if ($position == 1) {
            if ($this->head == null) {
                $this->head = $newNode;
                $this->head->next = $this->head;
                $this->head->prev = $this->head;
            } else {
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $temp->next = $newNode;
                $newNode->prev = $temp;
                $newNode->next = $this->head;
                $this->head->prev = $newNode;
                $this->head = $newNode;
            }
        } else {

            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                $temp = $temp->next;
            }
            $newNode->next = $temp->next;
            $newNode->next->prev = $newNode;
            $newNode->prev = $temp;
            $temp->next = $newNode;
        }
    }

    /**
     * Function to delete a data at first (head)
     * Non-Parameterized Function
     */
    public function deleteFirst()
    {
        if ($this->head != null) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                $temp = $this->head;
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $this->head = $this->head->next;
                $this->head->prev = $temp;
                $temp->next = $this->head;
            }
        }
    }

    /**
     * Function to delete a data at last
     * Non-Parameterized Function
     */
    public function deleteLast()
    {
        if ($this->head != null) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next->next != $this->head) {
                    $temp = $temp->next;
                }
                $temp->next = $this->head;
                $this->head->prev = $temp;
            }
        }
    }

    /**
     * Function to delete a data at given position
     * Passing the Postiion as the Parameter
     */
    public function deleteAtPosition($position)
    {
        $temp = $this->head;
        $noOfElements = 0;

        if ($temp != null) {
            $noOfElements++;
            $temp = $temp->next;
        }
        while ($temp != $this->head) {
            $noOfElements++;
            $temp = $temp->next;
        }

        if ($position < 1 || $position > $noOfElements) {
            echo "\nInvalid position.";
        } else if ($position == 1) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $this->head = $this->head->next;
                $temp->next = $this->head;
                $this->head->prev = $temp;
            }
        } else {
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                $temp = $temp->next;
            }
            $temp->next = $temp->next->next;
            $temp->next->prev = $temp;
        }
    }

    /**
     * Function to search a data from the list
     * Passing the data as parameter
     */
    public function search($data)
    {
        $temp = new Node();
        $temp = $this->head;
        $found = 0;
        $i = 0;

        if ($temp != null) {
            while (true) {
                $i++;
                if ($temp->data == $data) {
                    $found++;
                    break;
                }
                $temp = $temp->next;
                if ($temp == $this->head) {
                    break;
                }
            }
            if ($found == 1) {
                echo $data . " is found at Position = " . $i . ".\n";
            } else {
                echo $data . " is not found in the list.\n";
            }
        } else {
            echo "The list is empty.\n";
        }
    }

    /**
     * Function to print the Elements of the list
     * Non Parameterized Function
     */
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while (true) {
                echo $temp->data . " ";
                $temp = $temp->next;
                if ($temp == $this->head)
                    break;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }

    /**
     * Function to insert node inbetween 2 nodes
     * Non-Parameterized function
     */
    public function insertInBetween()
    {
        $node1 = readline('Enter 1st node data: ');
        //$node2 = readline('Enter 2nd node data: ');
        $node = readline('Enter a node data to insert in between node1 and node2: ');
        $newNode = new Node();
        $newNode->data = $node;
        $temp = $this->head;
        while ($temp->data != $node1) {
            $temp = $temp->next;
        }
        $temp1 = $temp->next;
        $temp->next = $newNode;
        $newNode->next = $temp1;
        $temp1->prev = $newNode;
    }

    /**
     * Function to delete a particular key
     * Passing the key as parameter
     */
    public function deleteKey($key)
    {
        $present = $previous = $this->head;
        while ($present->data != $key) {
            $previous = $present;
            $present = $present->next;
        }
        if ($present == $previous) {
            $this->head = $present->next;
        }
        $previous->next = $present->next;
        $present->prev = $previous;
    }

    /**
     * Function to sort the elements in ascending order
     * Non-Parameterized function
     */
    function sortAccendingOrder()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp == null) {
            echo "List is Empty.";
        } else {
            while ($temp->next != $this->head) {
                $nextNode = $temp->next;
                while ($nextNode->next != $this->head) {
                    if ($temp->data > $nextNode->data) {
                        $temp1 = $temp->data;
                        $temp->data = $nextNode->data;
                        $nextNode->data = $temp1;
                    }
                    $nextNode = $nextNode->next;
                }
                if ($temp->data > $nextNode->data) {
                    $temp1 = $temp->data;
                    $temp->data = $nextNode->data;
                    $nextNode->data = $temp1;
                }
                $temp = $temp->next;
            }
        }
    }
}
