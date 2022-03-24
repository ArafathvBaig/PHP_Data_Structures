<?php

include './Data_Structures/LinkedList/SinglyLinkedList/SinglyLinkedList.php';
class SinglyLinkedListMain
{
    function singlyLinkedList()
    {
        $singlyLinkedList = new SinglyLinkedList();
        $singlyLinkedList->insertAtLast(14);
        $singlyLinkedList->insertAtLast(35);
        $singlyLinkedList->insertAtLast(54);
        $singlyLinkedList->printList();
        $singlyLinkedList->insertAtPosition(2, 2);
        $singlyLinkedList->insertAtPosition(44, 4);
        $singlyLinkedList->printList();
        $singlyLinkedList->insertAtLast(60);
        $singlyLinkedList->printList();
        $singlyLinkedList->insertAtFirst(55);
        $singlyLinkedList->insertAtFirst(100);
        $singlyLinkedList->printList();
        $singlyLinkedList->deleteKey(55);
        $singlyLinkedList->printList();
        $singlyLinkedList->deleteFirst();
        $singlyLinkedList->printList();
        $singlyLinkedList->deleteLast();
        $singlyLinkedList->printList();
        $singlyLinkedList->insertAtPosition(70, 3);
        $singlyLinkedList->printList();
        $singlyLinkedList->deleteAtPosition(4);
        $singlyLinkedList->printList();
        $singlyLinkedList->insertInBetween();
        $singlyLinkedList->printList();
        $singlyLinkedList->search(70);
        $singlyLinkedList->sortAccendingOrder();
        $singlyLinkedList->printList();
    }
}
$singlyLinkedListMain = new SinglyLinkedListMain();
$singlyLinkedListMain->singlyLinkedList();
