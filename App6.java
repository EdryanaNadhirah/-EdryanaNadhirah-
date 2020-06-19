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
    int maxSizeX;
    int headX, tailX;
    Integer arr[];
    
    public Queue(int n){
        n = maxSizeX;
        headX=0;
        tailX=0;
        arr = new Integer[maxSizeX];
    }
    
    public boolean isEmpty(){
        return tailX==0;
    }
    public boolean isFull(){
        return tailX>=maxSizeX;
    }
    public void enqueue(int x){
        
    }
}

class QueueGen<T>{
    int maxSize;
    int head,tail;
    T [] arr;
    
    public QueueGen(int maxSize){
        
    }
    public void add(T obj){
        
    }
}
public class App6 {
    
}
