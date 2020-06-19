/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Edryana Nadhirah
 */
class Queue{
    int maxSize;
    int head, tail;
    String arr[];
    
    public Queue(int n){
    maxSize = n;
    head = 0;
    tail= 0;
    arr = new String[maxSize];
    
    } //methods inside Queue
     public boolean isEmpty(){
        return tail == 0;
    }
    public boolean isFull(){
        return tail>=maxSize;
    }
    public void enqueue(String s){
        //enqueue if isEmpty, arr[head]
        if(isEmpty()){
            arr[head] = s;
            tail++;
        }
        else{
            //stop enqueue if isFull
            if(isFull()){
                System.out.println("Queue is full...");
            }
            //enqueue if not empty and not full
            else{
                arr[tail] = s;
                tail++;
            }
        }
    }
    public void dequeue(){
        //cannot dequeue when empty
        //dequeue when full
        //dequeue when not full but not empty
        if(isEmpty()){
            System.out.println("Queue is empty");
        }
        else{
            String temp = arr[head];
            for(int i = 0; i<tail-1; i++){
                //at array[i] condition copy array[i+1]
                arr[i] = arr[i+1];
            }
            tail--;
        }
    }
    public void display(){
        for(int i = 0; i<tail; i++){
            System.out.print(arr[i]);
        }
    }
    public void enqueueAll(String ss){
        String [] temp = ss.split(",");
        for(int i=0;i<temp.length;i++){
            enqueue(temp[i]);
        }
    }
    public void dequeueAll(){
        //if not empty, dequeue
        if(!isEmpty()){
            for(int i=tail-1; i>=0; i--){
                dequeue();
            }
        }
    }
}
public class AppQ {
    public static void main(String [] args){
        
        Queue yea = new Queue(5);
//        yea.enqueue("A");
//        yea.enqueue("B");
//        yea.enqueue("C");
//        yea.enqueue("D");
//        
//        yea.display();
        
        yea.enqueueAll("E, F, G, H");
        yea.display();
        yea.dequeueAll();
        yea.display();
    }
}
