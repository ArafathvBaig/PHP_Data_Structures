<?php

include './Data_Structures/LinkedList/CircularSinglyLinkedList/CircularSinglyLinkedList.php';
class CircularSinglyLinkedListMain
{
    function circularSinglyLinkedList()
    {
        $circularSinglyLinkedList = new CircularSinglyLinkedList();
        $circularSinglyLinkedList->insertAtLast(10);
        $circularSinglyLinkedList->insertAtLast(40);
        $circularSinglyLinkedList->insertAtLast(20);
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->insertAtPosition(50, 2);
        $circularSinglyLinkedList->insertAtPosition(30, 4);
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->insertAtLast(60);
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->insertAtFirst(5);
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->deleteKey(10);
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->deleteFirst();
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->deleteLast();
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->insertAtPosition(70, 3);
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->deleteAtPosition(4);
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->insertAfter();
        $circularSinglyLinkedList->printList();
        $circularSinglyLinkedList->search(70);
        $circularSinglyLinkedList->sortAccendingOrder();
        $circularSinglyLinkedList->printList();
    }
}
$circularSinglyLinkedListMain = new CircularSinglyLinkedListMain();
$circularSinglyLinkedListMain->circularSinglyLinkedList();
