
import java.util.ArrayList;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Edryana Nadhirah
 */
public class App {
    public static void main(String [] args){
    
    //before 2004, the old ways
    ArrayList list = new ArrayList();
    list.add("apple");
    list.add("banana");
    list.add("orange");
    list.add(1);
    list.add(500);
    
    String fruit = (String)list.get(1);
    //Integer fruit = (Integer)list.get(3);
    
    System.out.println("-----Style 1 printing-----");
    System.out.println(list);
    
    //after 2004, JAVA5 is created
    ArrayList <String>list2 = new ArrayList<String>();
    list2.add("dog");
    list2.add("cat");
    list2.add("rabbit");
    list2.add("bird");
    list2.add("horse");
    
    System.out.println(" ");
    System.out.println("-----Style 2 printing-----");
    for(int i = 0; i<list2.size();i++){
         System.out.println(list2.get(i));
    }
    
    System.out.println(" ");
    System.out.println("=====Style 3 printing=====");
        for(String i : list2){
            System.out.println(i);
    }
       
    }
}
