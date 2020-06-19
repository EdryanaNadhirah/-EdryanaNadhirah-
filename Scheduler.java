package Scheduler;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import Scheduler.Queue;
import Scheduler.LinkedList;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.util.Scanner;
import java.text.ParseException;
import java.util.concurrent.TimeUnit;

/**
 *
 * @author Edryana Nadhirah
 */
public class Scheduler {    
     static void methodToTime(){
         try{
             TimeUnit.SECONDS.sleep(1);
         }
         catch(InterruptedException e){
             e.printStackTrace();
         }
     }
 
    public static void main(String[] args) throws FileNotFoundException ,ParseException {
         
        StarterPack sp = new StarterPack();
        Scanner readfile = new Scanner(new FileInputStream("C:\\tasks.txt"));
        Scanner s = new Scanner(System.in);
        
        
        String chose;
        System.out.println("Hi there Johnny please choose which data structure you wanna use");
        System.out.printf("A.Stack\nB.Linked List\nC.Queue\n" );
        System.out.print("Enter the alphabet: ");
        chose = s.nextLine();
        
        int counter = 0;
        
        long startTime = System.currentTimeMillis();
        
        methodToTime();
        
         while (readfile.hasNext()) {
           
            String lines = readfile.nextLine();
            String[] arrline = lines.split(" ");
            counter = counter + arrline.length;
            
          
        if(chose.equalsIgnoreCase("A")){
                Stack S1 = new Stack(counter);
               
                if(arrline[0].equals("isPrime")){
                int parameter = Integer.parseInt(arrline[2]);
                 Object para = sp.isPrime(parameter);
                String e = para.toString();
                S1.push(e);
                 
            }
            else if(arrline[0].equals("fib")){
                int parameter = Integer.parseInt(arrline[2]);
                  Object para = sp.fib(parameter);
                String e = para.toString();
                S1.push(e);
            }
            else if(arrline[0].equals("longestPalSubstr")){
                  Object para = sp.longestPalSubstr(arrline[2]);
                String e = para.toString();
                S1.push(e);
            }
             else if(arrline[0].equals("sumOfDigitsFrom1ToN")){
                 int parameter = Integer.parseInt(arrline[2]);
                 Object para = sp.sumOfDigitsFrom1ToN(parameter);
                String e = para.toString();
                S1.push(e);
                }
            else if(arrline[0].equals("sumOfDigits")){
                 int parameter = Integer.parseInt(arrline[2]);
                 Object para = sp.sumOfDigits(parameter);
                String e = para.toString();
                S1.push(e);
            }
            else if(arrline[0].equals("getNthUglyNo")){
                 int parameter = Integer.parseInt(arrline[2]);
                Object n = sp.getNthUglyNo(parameter);
                String e = n.toString();
                S1.push(e);  
        }       
                 System.out.println("Questions: "+lines);
                System.out.print("Ans:");
                 S1.display();
                System.out.println("");
                
        }
        else if(chose.equalsIgnoreCase("B")){
                LinkedList L1 = new LinkedList();
                
                 if(arrline[0].equals("isPrime")){
                int parameter = Integer.parseInt(arrline[2]);
                Object para = sp.isPrime(parameter);
                String e = para.toString();
                L1.createNode(e);
                 
            }
            else if(arrline[0].equals("fib")){
                int parameter = Integer.parseInt(arrline[2]);
                 Object para = sp.fib(parameter);
                String e = para.toString();
                L1.createNode(e);
            }
            else if(arrline[0].equals("longestPalSubstr")){
                   L1.createNode(sp.longestPalSubstr(arrline[2]));
            }
             else if(arrline[0].equals("sumOfDigitsFrom1ToN")){
                 int parameter = Integer.parseInt(arrline[2]);
                 Object n = sp.sumOfDigitsFrom1ToN(parameter);
                String e = n.toString();
                L1.createNode(e);
                }
            else if(arrline[0].equals("sumOfDigits")){
                 int parameter = Integer.parseInt(arrline[2]);
                 Object n = sp.sumOfDigits(parameter);
                String e = n.toString();
                L1.createNode(e);
            }
             
            else if(arrline[0].equals("getNthUglyNo")){
                 int parameter = Integer.parseInt(arrline[2]);
                 Object n = sp.sumOfDigits(parameter);
                String e = n.toString();
                L1.createNode(e);   
        }      
                 System.out.println("Questions: "+lines);
                System.out.print("Ans:");
                 L1.display();
                System.out.println();
                
        
        }
                
            else{
                Queue Q1  = new Queue <>(counter);
                
                if(arrline[0].equals("isPrime")){
                int parameter = Integer.parseInt(arrline[2]);
                Object para = sp.isPrime(parameter);
                String e = para.toString();
                Q1.enqueue(e);
                
            }
            else if(arrline[0].equals("fib")){
                int parameter = Integer.parseInt(arrline[2]);
                 Object para = sp.fib(parameter);
                String e = para.toString();
                Q1.enqueue(e);
                 
            }
            else if(arrline[0].equals("longestPalSubstr")){
                 Q1.enqueue(sp.longestPalSubstr(arrline[2]));
            }
             else if(arrline[0].equals("sumOfDigitsFrom1ToN")){
                   int parameter = Integer.parseInt(arrline[2]);
                Object n = sp.sumOfDigitsFrom1ToN(parameter);
                String e = n.toString();
                Q1.enqueue(e);
                }
            else if(arrline[0].equals("sumOfDigits")){
                 int parameter = Integer.parseInt(arrline[2]);
                 Q1.enqueue(sp.sumOfDigits(parameter));
            }
            else if(arrline[0].equals("getNthUglyNo")){
                 int parameter = Integer.parseInt(arrline[2]);
                Object n = sp.getNthUglyNo(parameter);
                String e = n.toString();
                Q1.enqueue(e);
        }       System.out.println("Questions: "+lines);
                System.out.print("Ans:");
                Q1.display();
                System.out.println("");
    
}
    
}
        long endTime = System.currentTimeMillis();
        
        long dur = endTime - startTime;
        System.out.printf("The duration of the operation = %d milliseconds ",dur );
    
}
}

