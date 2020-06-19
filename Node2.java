/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Edryana Nadhirah
 */
public class Node2 {

    String movieName;
    int ticketSold;
    Node2 next;
    
    Node2(String movieName, int ticketSold){
        this.movieName = movieName;
        this.ticketSold = ticketSold;
    }
    public void display(){
        System.out.println("| "+movieName+ " "+ticketSold+" million ");
    }
    
    public String toString(){
        return movieName;
    }

    public static void main(String [] args){
        LinkedList2 LL = new LinkedList2();
        LL.removeFirst();
        LL.addFirst("Harry Potter", 1);
        LL.addNode("Frozen", 2);
        LL.addNode("Maleficent", 2);
        LL.addNode("Starwars1", 2);
        LL.addNode("Starwars2", 2);
        LL.display();        
        LL.addBefore("Starwars2", "Hantu Kak Limah", 8);        
        //LL.display();
        //LL.addAfter("Frozen", "Godfather", 10);        
        LL.display();
        LL.addFirst("Zombieland", 1);
        LL.display();
        LL.removeNode("Maleficent");
        LL.display();
        LL.removeFirst();
        LL.display();
        LL.removeLast();
        LL.display();
    }
}
