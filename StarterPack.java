
import java.io.File;
import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Edryana Nadhirah
 */
class Stack<T>{
    int maxSize;
    int top;
    T [] arr;
    
    Stack(int n){
        n = maxSize;
        top = 0;
        arr = (T[])new Object[maxSize];
    }
    public boolean isEmpty(){
        if(top==0){
            return true;
        }
        else{
            return false;
        }
    }
    
    public boolean isFull(){
        if(top>=maxSize){
            return true;
        }
        else{
            return false;
        }
    }
    public void push(T str){
        if(top<=maxSize){
            arr[top] = str;
            top++;
        }
        else{
            System.out.println("Stack Overflow!");
        }
    }
    
    public T pop(){
        if(!isEmpty()){
            T temp = peek();
            arr[top-1]=null;
            top--;
            return temp;
        }
        else{
            return null;
        }
    }
    
    public T peek(){
        if(top>0){
            System.out.println(arr[top-1]);
        }
        else{
            return null;
        }
        return arr[top-1];
    }
    
    public void display(){
        for(int i =0; i<top; i++){
            System.out.println(" "+ arr[i]);
        }
    }
    
    public void pushMany(String str){
        String temp[] = str.split(" ");
        for(int i = 0; i<temp.length; i++){
            push((T)temp[i]);
        }
        display();
    }
    
     public String popMany(){
        if(isEmpty()){
            System.out.println("There's no element to delete.");
        }
        else{
            for(int i = 0; i<maxSize; i++){
            pop();
        }
            System.out.println("Already delete all element.");
        }
        return " ";
    }
}

class Queue<T>{
    int maxSize;
    int head, tail;
    T arr[];
    
    public Queue(int n){
        maxSize=n;
        int head =0;
        int tail=0;
        arr = (T[])new Object[maxSize];
    }
    
    public boolean Empty(){
       return tail==0;
    }
    
    public boolean Full(){
        return tail>=maxSize;
    }
    
    public void display(){
        for(int i = 0; i<tail; i++){
            System.out.println(arr[i]);
        }
    }
    
    public void enqueue(T s){
        if(Empty()){
            arr[head]=s;
            tail++;
        }
        else{
            if(Full()){
                System.out.println("The queue is already Full, cannot enqueue");
            }
            else{
                arr[tail]=s;
                tail++;
            }
        }
    }
    public void dequeue(){
        if(Empty()){
            System.out.println("Cannot dequeue, already Empty");
        }
        else{
            T temp = arr[head];
            for(int i=0; i<tail-1; i++){
                arr[i]= arr[i+1];
            }
            tail--;
        }
    }
    
    public void enqueueAll(String s){
        String temp[] = s.split(",");
        for(int i =0; i<temp.length; i++){
            enqueue((T)temp[i]);
        }
    }
    
    public void dequeueAll(){
        if(!Empty()){
            for(int i= tail-1; i>=0; i--){
            dequeue();
        }
        }
    }
}

class LinkedList{
    
}
public class StarterPack {
    public static void main(String [] args) throws Exception{
        
        File file = new File("C:\\tasks.txt");
        Scanner sc = new Scanner(file);
        
        while(sc.hasNextLine()){
            System.out.println(sc.nextLine());
    }
}
}
