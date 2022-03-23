<?php

include './Data_Structures/LinkedList/SinglyLinkedList/SinglyLinkedList.php';
$singlyLinkedList = new SinglyLinkedList();

$singlyLinkedList->insertAtLast(10);
$singlyLinkedList->insertAtLast(30);
$singlyLinkedList->insertAtLast(50);
$singlyLinkedList->printList();
$singlyLinkedList->insertAtPosition(20, 2);
$singlyLinkedList->insertAtPosition(40, 4);
$singlyLinkedList->printList();
$singlyLinkedList->insertAtLast(60);
$singlyLinkedList->printList();
$singlyLinkedList->insertAtFirst(5);
$singlyLinkedList->printList();
$singlyLinkedList->deleteKey(30);
$singlyLinkedList->printList();
$singlyLinkedList->deleteFirst();
$singlyLinkedList->printList();
$singlyLinkedList->deleteLast();
$singlyLinkedList->printList();
$singlyLinkedList->insertAtPosition(70, 3);
$singlyLinkedList->printList();
$singlyLinkedList->deleteAtPosition(3);
$singlyLinkedList->printList();
$singlyLinkedList->insertInBetween();
$singlyLinkedList->printList();
$singlyLinkedList->search(40);
$singlyLinkedList->search(70);