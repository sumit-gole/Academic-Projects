import java.util.regex.Pattern;
import java.util.regex.Matcher;
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.table.*;
import javax.swing.table.DefaultTableModel;
import java.sql.*;
import java.sql.ResultSet;

public class AddNewSupplier extends JFrame implements ActionListener
{
	JFrame jf;
	JTextField t1,t2,t3,t4,t5,tr,tq;
	JLabel l1,l2,l3,l4,l5,l6;
	JButton b0,b1,b2;
	Font f;
    Connection con;
	PreparedStatement ps;
	Statement stmt;
	ResultSet rs;
	DefaultTableModel model = new DefaultTableModel();
    JTable tabGrid = new JTable(model);
    JScrollPane scrlPane = new JScrollPane(tabGrid);

	AddNewSupplier()
	{
		jf=new JFrame();
		f = new Font("Times New Roman",Font.BOLD,20);
		jf.setLayout(null);

	    l6=new JLabel("-- NEW SUPPLIER DETAILS --");
	    l6.setFont(new Font("Times New Roman",Font.BOLD,30));
	    l6.setBounds(170,25,500,80);l6.setForeground(Color.white);
	    jf.add(l6);

		l1= new JLabel("SUPPLIER ID : *");
		l1.setFont(new Font("Times New Roman",Font.BOLD,20));
		l1.setForeground(Color.white);
		l1.setBounds(120,120,300,25);
		jf.add(l1);

		t1=new JTextField(20);t1.setEditable(false);
		t1.setBounds(360,120,220,25);
		jf.add(t1);

		l2 = new JLabel("SUPPLIER NAME : *");
		l2.setFont(new Font("Times New Roman",Font.BOLD,20));
		l2.setForeground(Color.white);
        l2.setBounds(120,160,300,25);
		jf.add(l2);

		t2=new JTextField(20);
		t2.setBounds(360,160,220,25);t2.setToolTipText("Enter Supplier Name");
		jf.add(t2);

		l3 = new JLabel("SUPPLIER ADDRESS : *");
		l3.setFont(new Font("Times New Roman",Font.BOLD,20));
		l3.setForeground(Color.white);
        l3.setBounds(120,200,300,25);
		jf.add(l3);

		t3=new JTextField(20);
		t3.setBounds(360,200,220,25);t3.setToolTipText("Enter Supplier Address");
		jf.add(t3);

		l4 = new JLabel("SUPPLIER PHONE NO. : *");
		l4.setFont(new Font("Times New Roman",Font.BOLD,20));
		l4.setForeground(Color.white);
        l4.setBounds(120,240,300,25);
		jf.add(l4);

		t4=new JTextField(20);
		t4.setBounds(360,240,220,25);t4.setToolTipText("Enter Supplier Phone No");
		jf.add(t4);

		l5 = new JLabel("SUPPLIER EMAIL ID : *");
		l5.setFont(new Font("Times New Roman",Font.BOLD,20));
		l5.setForeground(Color.white);
        l5.setBounds(120,280,300,25);
		jf.add(l5);

		t5=new JTextField(20);
		t5.setBounds(360,280,220,25);t5.setToolTipText("Enter Supplier Email ID");
		jf.add(t5);

	    b0 = new JButton("SAVE",new ImageIcon("images//save.png"));
        b0.setBounds(100,330,135,35);b0.setToolTipText("click to save supplier details");
        b0.setFont(new Font("Times New Roman",Font.BOLD,17));
		jf.add(b0);b0.addActionListener(this);

		b1 = new JButton("CLEAR",new ImageIcon("images//clear.png"));
		b1.setBounds(285,330,135,35);b1.setToolTipText("click to clear all textfilds");
		b1.setFont(new Font("Times New Roman",Font.BOLD,17));
	    jf.add(b1); b1.addActionListener(this);

        b2= new JButton("ALL",new ImageIcon("images//all.png"));
		b2.setBounds(470,330,135,35);b2.setToolTipText("click to view all supplier details");
		b2.setFont(new Font("Times New Roman",Font.BOLD,17));
		jf.add(b2); b2.addActionListener(this);

	    scrlPane.setBounds(0,380,750,600);
        jf.add(scrlPane);
        tabGrid.setFont(new Font ("Times New Roman",0,15));

        model.addColumn("S_ID");
        model.addColumn("S_NAME");
        model.addColumn("S_ADDRESS");
        model.addColumn("S_PHONENO");
        model.addColumn("S_EMAILID");

        JLabel background;
		ImageIcon img=new ImageIcon(new ImageIcon("images//bg4.jpg").getImage().getScaledInstance(830,410,Image.SCALE_DEFAULT));
		background = new JLabel("",img,JLabel.CENTER);
		background.setBounds(0,0,750,400);
		jf.add(background);

	     jf.setTitle("-- ADD NEW SUPPLIER --");
	     jf.setSize(750,580);
		 jf.setLocation(20,20);
		 jf.setResizable(false);
		 jf.getContentPane().setBackground(Color.cyan);
	     jf.setVisible(true);
	}

public void actionPerformed(ActionEvent ae)
	{
	if(ae.getSource()==b0)
	 {
	 	    String mob = t4.getText();
	       	String email=t5.getText();
	       	Pattern p=Pattern.compile("[_a-z_A-Z_0-9]+[0-9]*@[a-zA-Z0-9]+.[a-zA-Z0-9]+");
	       	Matcher m=p.matcher(email);
	        boolean matchFound=m.matches();

	    	if(((t2.getText()).equals(""))||((t3.getText()).equals(""))||((t4.getText()).equals(""))||((t5.getText()).equals("")))
	        {
		    JOptionPane.showMessageDialog(this,"* Detail are Missing !","Warning!!!",JOptionPane.WARNING_MESSAGE);
	        }
	        else if(!matchFound)
	        {
	       	  JOptionPane.showMessageDialog(this,"Invalid Email ID..!!","Warning!!!",JOptionPane.WARNING_MESSAGE);
	       	}
			else
			{
			  try
			  	 {
			
 }
}
  else if(ae.getSource()==b1)
     {//clear
          //t1.setText("");
          t2.setText("");
          t3.setText("");
          t4.setText("");
          t5.setText("");
      }
    else if(ae.getSource()==b2)
    {//list
  	int r = 0;
     
	}
 }
public static void main(String args[])
	{
	      new AddNewSupplier();
	}
}

