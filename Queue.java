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
public class Queue <E>{
    int maxSize;
    E [] array;
    int head, tail;
    
    Queue(int maxSize){
    this.maxSize = maxSize;
    this.head = 0;
    this.tail = 0;
    this.array = (E[]) new String [this.maxSize];
}
    void enqueue(E value){
        // if queue is empty, enqueue arr[head]
        if(this.isEmpty()){
            this.array[this.head] = value;
            this.tail++;
        }
        else if (this.isFull()){
            // not full
            System.out.println("Queue is overflow");
        }
        else{    //not empty but not full 
            this.array[this.tail] =  value;
            this.tail++;
        }
}
    
    void enqueueMany(String listword){
         String [] list = listword.split(" ");
         for(int i = 0 ; i < list.length ; i++){
             this.enqueue((E)list[i]);
    }
    }
    
    void dequeue(){
        if(this.isEmpty()){
            System.out.println("Cannot dequeue because empty");
        } else{
            E temp =  this.array[head];
            for(int i = head ; i <this.tail-1 ; i++){
                // at array[i] condition copy array[i+1]
                this.array[i]= this.array[i+1];
            }
              this.tail--;
              System.out.println( "Had deleted : "+ temp);
        }
       
    }
    
    void dequeueAll(){
        for(int i = this.tail-1; i >= 0; i--)
            this.dequeue();
    }
    
    Boolean isEmpty(){
        return tail == 0 ;
    }
    
    Boolean isFull(){
       return this.tail == this.maxSize;   
    }
    
    void display(){
        for(int i = head ; i < this.tail ; i++)
            System.out.print(this.array[i]+ " ");
            System.out.println();
    }

}
