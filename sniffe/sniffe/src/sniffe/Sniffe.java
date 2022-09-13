/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package sniffe;

import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Orlando J
 */
public class Sniffe {
 
            
  public static void main (String args[]) {
      
    try {
        
      DatagramSocket socketUDP = new DatagramSocket(51000);
      byte[] bufer = new byte[1000];

      while (true) {
  
        // Construimos el DatagramPacket para recibir peticiones
        DatagramPacket peticion =
          new DatagramPacket(bufer, bufer.length);

        // Leemos una petición del DatagramSocket
        socketUDP.receive(peticion);

        String word = new String(peticion.getData());
        String [] parts = word.split("\"");

         String latitude = parts[3];
         String longitude = parts[7];
         String date = parts[11];
         System.out.println(latitude + longitude + date);
         
         

String user="root";
String pass="";
String url="jdbc:mysql://localhost:3306/trackerapp";
Statement stms;

try {
	Class.forName("com.mysql.cj.jdbc.Driver");

}catch (ClassNotFoundException ex){
	Logger.getLogger(Sniffe.class.getName()).log(Level.SEVERE,null,ex);
}

try{
	Connection c= DriverManager.getConnection(url,user,pass);
	String strinserta="Insert INTO primera(Latitud,Longitud,Fecha)"+"VALUES('"+latitude+"','"+longitude+"','"+date+"')";
	stms =c.createStatement();
	stms.executeUpdate(strinserta);

}catch (SQLException ex){
	Logger.getLogger (Sniffe.class.getName()).log(Level.SEVERE,null,ex);
}
         
     
      }

    } catch (IOException e) {
      System.out.println("IO: " + e.getMessage());
    }
  }
}

