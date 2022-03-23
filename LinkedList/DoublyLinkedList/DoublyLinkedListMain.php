<?php

include './Data_Structures/LinkedList/DoublyLinkedList/DoublyLinkedList.php';
$doublyLinkedList = new DoublyLinkedList();

$doublyLinkedList->insertAtLast(10);
$doublyLinkedList->insertAtLast(30);
$doublyLinkedList->insertAtLast(50);
$doublyLinkedList->printList();
$doublyLinkedList->insertAtPosition(20, 2);
$doublyLinkedList->insertAtPosition(40, 4);
$doublyLinkedList->printList();
$doublyLinkedList->insertAtLast(60);
$doublyLinkedList->printList();
$doublyLinkedList->insertAtFirst(5);
$doublyLinkedList->printList();
$doublyLinkedList->deleteKey(10);
$doublyLinkedList->printList();
$doublyLinkedList->deleteFirst();
$doublyLinkedList->printList();
$doublyLinkedList->deleteLast();
$doublyLinkedList->printList();
$doublyLinkedList->insertAtPosition(70, 3);
$doublyLinkedList->printList();
$doublyLinkedList->deleteAtPosition(3);
$doublyLinkedList->printList();
$doublyLinkedList->insertInBetween();
$doublyLinkedList->printList();
$doublyLinkedList->search(30);
$doublyLinkedList->search(70);