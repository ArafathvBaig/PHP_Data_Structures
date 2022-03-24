<?php

include './Data_Structures/LinkedList/DoublyLinkedList/DoublyLinkedList.php';
class DoublyLinkedListLMain
{
    function doublyLinkedList()
    {
        $doublyLinkedList = new DoublyLinkedList();
        $doublyLinkedList->insertAtLast(99);
        $doublyLinkedList->insertAtLast(33);
        $doublyLinkedList->insertAtLast(5);
        $doublyLinkedList->printList();
        $doublyLinkedList->insertAtPosition(70, 2);
        $doublyLinkedList->insertAtPosition(11, 4);
        $doublyLinkedList->printList();
        $doublyLinkedList->insertAtLast(60);
        $doublyLinkedList->printList();
        $doublyLinkedList->insertAtFirst(1);
        $doublyLinkedList->printList();
        $doublyLinkedList->deleteKey(5);
        $doublyLinkedList->printList();
        $doublyLinkedList->deleteFirst();
        $doublyLinkedList->printList();
        $doublyLinkedList->deleteLast();
        $doublyLinkedList->printList();
        $doublyLinkedList->insertAtPosition(25, 3);
        $doublyLinkedList->printList();
        $doublyLinkedList->deleteAtPosition(4);
        $doublyLinkedList->printList();
        $doublyLinkedList->insertInBetween();
        $doublyLinkedList->printList();
        $doublyLinkedList->search(70);
        $doublyLinkedList->sortAccendingOrder();
        $doublyLinkedList->printList();
    }
}
$doublyLinkedListMian = new DoublyLinkedListLMain();
$doublyLinkedListMian->doublyLinkedList();