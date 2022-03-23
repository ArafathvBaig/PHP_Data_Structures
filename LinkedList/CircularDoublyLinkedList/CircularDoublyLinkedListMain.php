<?php

include './Data_Structures/LinkedList/CircularDoublyLinkedList/CircularDoublyLinkedList.php';
$circularDoublyLinkedList = new CircularDoublyLinkedList();

$circularDoublyLinkedList->insertAtLast(11);
$circularDoublyLinkedList->insertAtLast(13);
$circularDoublyLinkedList->insertAtLast(25);
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->insertAtPosition(28, 2);
$circularDoublyLinkedList->insertAtPosition(8, 3);
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->insertAtFirst(5);
$circularDoublyLinkedList->insertAtFirst(10);
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->deleteKey(13);
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->deleteFirst();
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->deleteLast();
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->insertAtPosition(7, 2);
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->deleteAtPosition(2);
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->insertInBetween();
$circularDoublyLinkedList->printList();
$circularDoublyLinkedList->search(28);
$circularDoublyLinkedList->search(7);
