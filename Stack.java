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
public class Stack <E>{
    int stackSize;
    E [] arr;
    int top;
    
    Stack(int Size){
     this.stackSize = Size;
     this.top = 0;
     this.arr = (E[]) new String [Size];
    }
    
    Boolean isEmpty(){
    return top == 0 ;
}
    Boolean isFull(){
    return top >= this.stackSize;
}
    void push(E word){
        if(this.isFull())
            System.out.println("Stack Overflow");
        else{
            this.arr[top] = word;
            this.top++;
        }
    }
    
    E pop(){
        if(this.isEmpty())
            return null;
        else{
        E temp = this.peek();
        this.arr[top-1] = null; 
        this.top--;
        return temp;
        }
        
    }
    
    E peek(){
        if(this.isEmpty())
            return null;
        else{
            return this.arr[this.top-1];
        }
    }
    
     void display(){
         for(int i = 0 ; i < this.top ; i++)
             System.out.print(this.arr[i] + " ");// already generic
          System.out.println("");
}
     void displayreverse(){
         for(int i = top-1 ; i >= 0 ; i--)
             System.out.print(this.arr[i] + " "); 
         System.out.println("");
     }
     
     void popAll(){
         for(int i = this.top-1 ; i >= 0 ; i--)
             this.pop();
     }
     
     void pushMany(String listword){
         String [] list = listword.split(" ");
         for(int i = 0 ; i < list.length ; i++){
             this.push((E)list[i]);
  
         }
}
}