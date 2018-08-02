/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ecgui;

/**
 *
 * @author Ashish
 */
public class ECGUI {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        
        
        SplashScreen splash = new SplashScreen();
        splash.setVisible(true);
        LoginPanel lp = new LoginPanel();
        try {
            for(int i =0 ; i<=100;i++){
                Thread.sleep(160);
                String s = Integer.toString(i);
                splash.LoadingBar.setString("Loading "+s+"% Please Wait A Moment ");
                splash.LoadingBar.setStringPainted(true);
                splash.LoadingBar.setValue(i);
                
                
                if(i==100){
                splash.setVisible(false);
                lp.setVisible(true);
                
                }
            }
        } catch (Exception e) {
        }
    }
    
}
