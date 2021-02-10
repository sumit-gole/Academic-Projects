import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.table.*;
import javax.swing.table.DefaultTableModel;
import java.sql.*;
import java.sql.ResultSet;

public class DailyPurchaseReport extends JFrame implements ActionListener
 {
    JFrame jf;
    JButton submit,clear;
    JLabel l1,ln;
    JTextField t1;
    Font f;
    Connection con;
    PreparedStatement ps;
    Statement stmt;
    ResultSet rs;
 	DefaultTableModel model = new DefaultTableModel();
    JTable tabGrid = new JTable(model);
    JScrollPane scrlPane = new JScrollPane(tabGrid);

  public DailyPurchaseReport()
  {
   jf=new JFrame();
   f = new Font("Times New Roman",Font.BOLD,20);
   jf.setLayout(null);

  	ln = new JLabel("-- DAILY PURCHASE REPORT --");
    ln.setFont(new Font("Times New Roman",Font.BOLD,30));
    ln.setForeground(Color.white);
    ln.setBounds(160,35,500,25);
    jf.add(ln);

    l1 = new JLabel("ENTER PURCHASE REPORT DATE : ");
    l1.setFont(new Font("Times New Roman",Font.BOLD,18));
    l1.setForeground(Color.white);
    l1.setBounds(50,80,450,25);
    jf.add(l1);

    t1=new JTextField(10);
    t1.setBounds(380,80,180,25);t1.setToolTipText("Enter purchase report date");
    jf.add(t1);

    submit = new JButton("SUBMIT",new ImageIcon("images//open.png"));
    submit.setBounds(220,150,110,35); submit.setToolTipText("click to open daily purchase report");
    jf.add(submit);submit.addActionListener(this);

    clear = new JButton("CLEAR",new ImageIcon("images//clear.png"));
    clear.setBounds(415,150,110,35);clear.setToolTipText("click to clear textfield");
    jf.add(clear);clear.addActionListener(this);

    scrlPane.setBounds(0,200,730,600);
    jf.add(scrlPane);
    tabGrid.setFont(new Font ("Times New Roman",0,15));

   	model.addColumn("S_ID");
   	model.addColumn("S_NAME");
  	model.addColumn("M_BNO");
  	model.addColumn("M_NAME");
  	model.addColumn("M_EXPDATE");
  	model.addColumn("M_QTY");
  	model.addColumn("M_PURPRICE");
  	model.addColumn("M_SALEPRICE");

    JLabel background;
    ImageIcon img=new ImageIcon(new ImageIcon("images//Tablets1.gif").getImage().getScaledInstance(770,200,Image.SCALE_DEFAULT));
    background = new JLabel("",img,JLabel.CENTER);
    background.setBounds(0,0,750,200);
    jf.add(background);

    jf.setTitle("-- DAILY PURCHASE REPORT DATE --");
    jf.setSize(730,500);
	   jf.setLocation(20,20);
	   jf.setResizable(false);
    jf.setVisible(true);
  }

  	public void actionPerformed(ActionEvent ae)
	{
	if(ae.getSource()==submit)
	 {//list
  	int r = 0;
     try
     {
     		if(((t1.getText()).equals("")))
	        {
		    JOptionPane.showMessageDialog(this,"Please enter purchase date !","Warning!!!",JOptionPane.WARNING_MESSAGE);
	        }
	        else
	        {
	         
       }
      
       catch(Exception e)
       {
       	   System.out.println(e);
           JOptionPane.showMessageDialog(null,"Error:"+e);
       }
	}

	 else if(ae.getSource()==clear)
	 {
	 	t1.setText("");
	 }
    }

  public static void main(String args[])
    {
    	new DailyPurchaseReport();
    }
}
