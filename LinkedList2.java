/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Edryana Nadhirah
 */
public class LinkedList2 {
    public Node2 tail;
    
    LinkedList2(){
        tail=null;
    }
    
    public void addNode(String movieName, int ticketSold){
        System.out.println(">>>Adding new Node to linked list...");
        Node2 newNode = new Node2(movieName, ticketSold);
        newNode.next = tail;
        System.out.println("node.next: "+newNode.next);
        tail = newNode;
        System.out.println("tail: "+tail);
    }
    
    public Node2 addBefore(String movieName,String movieName_new, int ticketSold_new){
        System.out.println("\n>>> Adding "+movieName_new+" before "+movieName);
        Node2 current = tail;
        System.out.println("tail: "+tail);
        
        while(current.movieName != movieName){
            //reach the end but no match found
            if(current.next==null){
                System.out.println("Movie not found");
                return null;
            }
            //traverse linked list
            else{
                current = current.next;
                System.out.println("traversing  linked list... current: "+current);
            }
        }
        if(current==tail){
            //found match at the end of linkedlist
            System.out.println("Found match at tail...");
            Node2 node = new Node2(movieName_new,ticketSold_new);
            node.next = tail.next;
            System.out.println("node.next: "+node.next);
            tail.next = node;
            System.out.println("tail.next: "+tail.next);
        }
        else{
            //match found elsewhere
            System.out.println("Found match while traversing...");
            Node2 node = new Node2(movieName_new, ticketSold_new);
            node.next = current.next;
            System.out.println("node.next: "+node.next);
            current.next = node;
            System.out.println("current.next: "+current.next);
        }
        return current;
    }
    
    public void addFirst(String movieName, int ticketSold){
        if(tail==null){
            addNode(movieName, ticketSold);
        }
        else{
            Node2 node = new Node2(movieName, ticketSold);
            Node2 current = tail;
            while(current.next!=null){
                current = current.next;
            }
            System.out.println("Adding "+ movieName+" to the first");
            current.next=node;
        }
    }
    public Node2 removeNode(String movieName){
        Node2 current = tail;
        Node2 previous = tail;
        
        while(current.movieName != movieName){
            if(current.next==null){
                System.out.println("Match not found...");
            }
            else{
                previous = current;
                current = current.next;
            }
        }
        if(current == tail){
            tail = tail.next;
        }
        else{
            previous.next = current.next;
        }
        return current;
    }
    public Node2 removeFirst(){
        System.out.println(">>>Removing first node in linked list...");
        if(tail==null){
            System.out.println("Tail is null");
            return tail;
        }
        Node2 current = tail;
        Node2 previous = tail;
        
        while(current.next!=null){
            previous = current;
            current = current.next;
        }
        previous.next = current.next;
        return current;
    }
    
    public Node2 removeLast(){
        if(tail==null){
            return tail;
        }
        Node2 current = tail;
        tail=tail.next;
        return current;
    }
    
    public void display(){
        System.out.println("displaying linked list...");
        Node2 node = tail;
        
        while(node!=null){
            node.display();
            node = node.next;
        }
        System.out.println();
    }
}
