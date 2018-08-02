/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ecgui;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import javax.swing.JOptionPane;

/**
 *
 * @author Ashish
 */
public class MySQLConnection {
    
    String hostname;
       String dbname;
       String DbUserName;
       String DbUserPass;
    public static Connection ConnectDB(){
       String  hostname = "jdbc:mysql://localhost:3306/"  ;
       String dbname ="ecgui";
       String DbUserName="root";
       String DbUserPass="root";
       
        
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con =DriverManager.getConnection(hostname + dbname, DbUserName, DbUserPass);
            Statement st = con.createStatement();
            JOptionPane.showMessageDialog(null, "Fetching From Server");
            System.out.println("Connected");
            return con;
            
            
            
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, e);
            return null;
            
            
        }
    
    
    }
}
