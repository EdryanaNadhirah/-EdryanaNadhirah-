package Scheduler;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Edryana Nadhirah
 */
class Node{
    
    //these are my node data
    String element;
    //this is my node pointer
    Node next;
    
    //this is my node constructor
    Node(String e){
        this.element = e;
    }
     
    void display(){
        System.out.printf("Ans: %s\n",this.element);
    }
}
public class LinkedList  {
     Node tail;
    
    LinkedList(){
        this.tail = null;
    }
    void createNode(String elements){
        Node newNode = new Node(elements);
        newNode.next = this.tail;
        this.tail = newNode;
    }
    Boolean isEmpty(){
        return tail == null;
    }
    Node addBefore(String elementListed, String elementtobe){
        Node current = tail;
        while(current.element != elementListed){
        if(current.next == null){
            System.out.println("No item found");
            return null;
        }
        else{
            current = current.next;
        }
        
            if(current == tail){
                Node node = new Node(elementtobe);
                node.next = tail.next;
                tail.next = node;
                
            }
            else{
                Node node = new Node (elementtobe);
                node.next = current.next;
                current.next = node;
            }
        }
        return current;
    }
    Node addFirst(String element){
        Node current = this.tail;
        if(tail == null){
            createNode(element);
            return current;
        }else{
        while(current.next != this.tail){
            current = current.next;
        }
        Node node = new Node(element);
        node.next = current.next;
        current.next = node;
        return current;
    }
}
    Node removeNode(String removeelement){
        Node current = this.tail;
        Node previous = this.tail;
        while(current.element != removeelement){
        if(this.tail == null){
            return null;
        }
        else{
            previous = current;
            current = current.next;
        }
        
            if(current == tail)
                tail = tail.next;
        else
         previous.next = current.next;
        }
        return current;
    }
    Node removeFirst(){
        Node current = this.tail;
        Node previous = this.tail;
        if(this.tail == null)
            return null;
         while(current.next != null){
             previous = current;
             current = current.next;
             
        }
         previous.next = current.next;
         
         return previous;
        }
    
    Node removeLast(){
        if(this.tail == null)
            return null;
        else{
            this.tail = tail.next;
        }
        return tail;
    }
    void display(){
        Node node = tail;
        if(this.tail == null)
            System.out.println("Nothing to display");
        else{
            while(node != null){
                node.display();
                node = node.next;
            }
        }
    }
    }
