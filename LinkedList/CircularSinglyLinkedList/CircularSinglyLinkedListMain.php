<?php

include './Data_Structures/LinkedList/CircularSinglyLinkedList/CircularSinglyLinkedList.php';
$circularSinglyLinkedList = new CircularSinglyLinkedList();

$circularSinglyLinkedList->insertAtLast(10);
$circularSinglyLinkedList->insertAtLast(30);
$circularSinglyLinkedList->insertAtLast(50);
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->insertAtPosition(20, 2);
$circularSinglyLinkedList->insertAtPosition(40, 4);
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
$circularSinglyLinkedList->deleteAtPosition(3);
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->insertInBetween();
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->search(30);
$circularSinglyLinkedList->search(70);
