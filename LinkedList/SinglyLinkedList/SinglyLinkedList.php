<?php
include 'Node.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Singly Linked List
 */
class SinglyLinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Function to add node into the list
     * Passing the data as parameter
     */
    public function insertAtLast($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }

    /**
     * Function to add a node at first (head)
     * Passing data as parameter
     */
    public function insertAtFirst($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    /**
     * Function to add a node at a given position
     * Passing data and position as parameters
     */
    public function insertAtPosition($data, $position)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;

        if ($position < 1) {
            echo "\nPosition shoult be >= 1.";
        } elseif ($position == 1) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null) {
                $newNode->next = $temp->next;
                $temp->next = $newNode;
            } else {
                echo "\nThe Previous node is null.";
            }
        }
    }

    /**
     * Function to delete first(head) node
     * Non-Parameterized Function
     */
    public function deleteFirst()
    {
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $this->head = $this->head->next;
            }
        }
    }

    /**
     * Function to delete last node
     * Non-Parameterized Function
     */
    public function deleteLast()
    {
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next->next != null) {
                    $temp = $temp->next;
                }
                $temp->next = null;
            }
        }
    }

    /**
     * Function to delete a node at given position
     * Passing the Postiion as the Parameter
     */
    public function deleteAtPosition($position)
    {
        if ($position < 1) {
            echo "\nPosition should be >=1.";
        } elseif ($position == 1 && $this->head != null) {
            $this->head = $this->head->next;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null && $temp->next != null) {
                $temp->next = $temp->next->next;
            } else {
                echo "\nThe Node is already Null.";
            }
        }
    }

    /**
     * Function to search a node of data from the list
     * Passing the data as parameter
     */
    public function search($data)
    {
        $temp = new Node();
        $temp = $this->head;
        $found = 0;
        $i = 0;

        if ($temp != null) {
            while ($temp != null) {
                $i++;
                if ($temp->data == $data) {
                    $found++;
                    break;
                }
                $temp = $temp->next;
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
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "\nThe list is empty.";
        }
    }

    /**
     * Function to get the number of nodes
     * returns the nunber of nodes
     * non-parameterized function
     */
    public function count()
    {
        $count = 0;
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            while ($temp != null) {
                $count++;
                $temp = $temp->next;
            }
        }
        return $count;
    }

    /**
     * Function to get the head node data
     * returns the head node data
     * non-parameterized function
     */
    public function headNode()
    {
        return $this->head->data;
    }

    /**
     * Function to check the list is empty
     * Printing true or false
     * non-parameterized function
     */
    public function isTheListEmpty()
    {
        if ($this->head == null) {
            echo "\ntrue";
        } else {
            echo "\nfalse";
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
    }

    /**
     * Function to delete a particular key
     * Passing the key as parameter
     */
    public function deleteKey($key)
    {
        if ($this->head != null) {
            $present = $previous = $this->head;
            while ($present->data != $key) {
                $previous = $present;
                $present = $present->next;
            }
            if ($present == $previous) {
                $this->head = $present->next;
            }
            $previous->next = $present->next;
        } else {
            echo "The list is Empty.";
        }
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
            while ($temp != null) {
                $nextNode = $temp->next;
                while ($nextNode != null) {
                    if ($temp->data > $nextNode->data) {
                        $temp1 = $temp->data;
                        $temp->data = $nextNode->data;
                        $nextNode->data = $temp1;
                    }
                    $nextNode = $nextNode->next;
                }
                $temp = $temp->next;
            }
        }
    }
}
