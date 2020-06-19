/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Edryana Nadhirah
 */
class Machine{
    public void start(){
        System.out.println("Machine started...");
    }
    public void stop(){
        System.out.println("Machine stopped...");
    }
}
class Camera extends Machine{
     @Override
     public void start(){
        System.out.println("Camera started...");
    }
     public void capture(){
         System.out.println("Camera capture selfie...");
     }
}
public class Demo {
    public static void main(String[]args){
        
        Machine m1  = new Machine();
        Camera c1 = new Camera();
        
        m1.start();
        c1.start();
        c1.capture();
        
        System.out.println("-----upcasting-----");
        Camera c2 = new Camera();               //child inherit parent
        Machine m2 = c2;                        //child object can access parent object
       // Machine m2 = new Camera();            //child object can access parent object
        m2.start();                             //child object can access parent method, as long as method is overriding
       // m2.capture();                         // won't work capture() is not method overriden
       
        System.out.println("-----downcasting-----");
        Machine m3 = new Camera();              //parent cannot inherit child
        //Camera c3 = m3;                       //error: machine cannot converted into camera
        Camera c3 = (Camera)m3;                 //parent object cannot become child object unless parent object is downcasted
                                                //only that parent object can access child object
        c3.capture();
    }
    
}
