import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.table.*;
import javax.swing.table.DefaultTableModel;
import java.sql.*;
import java.sql.ResultSet;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;


public class AddNewMedicine extends JFrame implements ActionListener
{
	JFrame jf;
	JTextField t1,t2,t3,t4,t5,t6,t8,t9,t10;
	JLabel l1,l2,l3,l4,l5,l6,l7,l8,l9,l10,l11,ln;
    JButton b0,b1,b2;
    JComboBox msname,tabtype;
    String s,sid1,tabt;
	Font f;
    Date date1;
    GregorianCalendar calendar;
    String strDate;
    Connection con;
	PreparedStatement ps;
	Statement stmt;
	ResultSet rs;
	DefaultTableModel model = new DefaultTableModel();
    JTable tabGrid = new JTable(model);
    JScrollPane scrlPane = new JScrollPane(tabGrid);

	AddNewMedicine()
	{
		jf=new JFrame();
		f = new Font("Times New Roman",Font.BOLD,15);
		jf.setLayout(null);

	    ln=new JLabel("-- NEW MEDICINE DETAILS --");
	    ln.setFont(new Font("Times New Roman",Font.BOLD,33));
	    ln.setForeground(Color.white);
	    ln.setBounds(150,30,500,40);
	    jf.add(ln);

		l1 = new JLabel("Medicine Batch No. : *");
		l1.setFont(f);
   		l1.setBounds(50,100,200,25);
		jf.add(l1);

		t1 = new JTextField(20);
		t1.setBounds(210,100,150,25);t1.setToolTipText("Enter medicine batch no");
		jf.add(t1);

		l2 = new JLabel("Medicine Name : *");
		l2.setFont(f);
  		l2.setBounds(50,140,200,25);
		jf.add(l2);

    	t2 = new JTextField(20);
		t2.setBounds(210,140,150,25);t2.setToolTipText("Enter medicine name");
		jf.add(t2);

		l3 = new JLabel("Medicine Company : *");
		l3.setFont(f);
    	l3.setBounds(50,180,200,25);
		jf.add(l3);

     	t3 = new JTextField(20);
		t3.setBounds(210,180,150,25);t3.setToolTipText("Enter medicine company");
		jf.add(t3);

		l4 = new JLabel("Medicine Quantity : *");
		l4.setFont(f);
   		l4.setBounds(50,220,200,25);
    	jf.add(l4);

        t4= new JTextField(20);
		t4.setBounds(210,220,150,25);t4.setToolTipText("Enter medicine quantity");
		jf.add(t4);

		l5= new JLabel("Med Expiry Date : *");
		l5.setFont(f);
    	l5.setBounds(50,260,250,25);
		jf.add(l5);

	    t5= new JTextField(20);
		t5.setBounds(210,260,150,25);t5.setToolTipText("Enter Medicine Dxpiry Date");
		jf.add(t5);

		l6= new JLabel("Med Purchase Date : *");
		l6.setFont(f);
    	l6.setBounds(50,300,260,25);
    	jf.add(l6);

        t6= new JTextField(20);
		t6.setBounds(210,300,150,25);t6.setToolTipText("Enter Medicine Expiry Date");
		jf.add(t6);

		date1= new Date();
     	calendar=new GregorianCalendar();
	    calendar.setTime(date1);
        strDate =calendar.get(Calendar.DATE)+"-"+(calendar.get(Calendar.MONTH)+1)+"-"+calendar.get(Calendar.YEAR);
	    t6.setText(strDate);

		l7 = new JLabel("Medicine Type : *");
		l7.setFont(f);
   		l7.setBounds(430,100,200,25);
    	jf.add(l7);

        tabtype=new JComboBox();
        tabtype.addItem("--Type--");
		tabtype.addItem("Tablet");
		tabtype.addItem("Capsule");
		tabtype.addItem("Syrup");
		tabtype.addItem("Insulin");
		tabtype.addItem("Cream");
		tabtype.addItem("Balm");
		tabtype.addItem("Drop");
		tabtype.addItem("Granul");
		tabtype.addItem("Oil");
		tabtype.addItem("Powder");
		tabtype.setBounds(600,100,150,25);tabtype.setToolTipText("Select Medicine Type");
		jf.add(tabtype);
		tabtype.addActionListener(new ActionListener()
	    {
		   public void actionPerformed(ActionEvent ae)
		 	{
		   		 tabt =(String)tabtype.getSelectedItem();
		   }
        });

		l8= new JLabel("Medicine Purchase Price : *");
		l8.setFont(f);
    	l8.setBounds(430,140,220,25);
    	jf.add(l8);

        t8 = new JTextField(20);
		t8.setBounds(600,140,150,25);t8.setToolTipText("Enter medicine purchase price");
		jf.add(t8);

		l9 = new JLabel("Medicine Sale Price : *");
		l9.setFont(f);
   		l9.setBounds(430,180,200,25);
    	jf.add(l9);
 
        t9 = new JTextField(20);
		t9.setBounds(600,180,150,25);t9.setToolTipText("Enter medicine sale price");
		jf.add(t9);

		l10 = new JLabel("Medicine Rack No : *");
		l10.setFont(f);
  		l10.setBounds(430,220,200,25);
    	jf.add(l10);

        t10 = new JTextField(20);
		t10.setBounds(600,220,150,25);t10.setToolTipText("Enter medicine rack no");
		jf.add(t10);

		l11 = new JLabel("Supplier Name : *");
		l11.setFont(f);
    	l11.setBounds(430,260,250,25);
    	jf.add(l11);


        msname=new JComboBox();
        msname.setBounds(600,260,150,25);msname.setToolTipText("Select Medicine Supplier Name");
        jf.add(msname);
        msname.addActionListener(new ActionListener()
	    {
		   public void actionPerformed(ActionEvent ae)
		   {
		    s =(String)msname.getSelectedItem();
		   }
        });

        

        try
		{

    	con.close();
       	}
       	catch(SQLException se)
       	{
       		System.out.println(se);
      	}
      	catch(Exception e)
       	{
       		System.out.println(e);
       	}

        b0 = new JButton("SAVE",new ImageIcon("images//save.png"));
        b0.setBounds(100,335,145,35);b0.setToolTipText("click to save medicine details");
        b0.setFont(new Font("Times New Roman",Font.BOLD,15));
		jf.add(b0);b0.addActionListener(this);

		b1 = new JButton("CLEAR",new ImageIcon("images//clear.png"));
		b1.setBounds(320,335,145,35);b1.setToolTipText("click to clear all textfields");
		b1.setFont(new Font("Times New Roman",Font.BOLD,15));
	    jf.add(b1); b1.addActionListener(this);

        b2= new JButton("ALL",new ImageIcon("images//all.png"));
		b2.setBounds(540,335,145,35);b2.setToolTipText("click to view all medicine details");
		b2.setFont(new Font("Times New Roman",Font.BOLD,15));
		jf.add(b2); b2.addActionListener(this);


	    scrlPane.setBounds(0,380,900,600);
        jf.add(scrlPane);
        tabGrid.setFont(new Font ("Times New Roman",0,15));

        model.addColumn("M_BNO");
        model.addColumn("M_NAME");
        model.addColumn("M_COMPANY");
        model.addColumn("M_QUANTITY");
        model.addColumn("M_EXPDATE");
        model.addColumn("M_PURDATE");
        model.addColumn("M_TYPE");
        model.addColumn("M_SALEPRICE");
        model.addColumn("M_PURPRICE");
        model.addColumn("M_RACKNO");
        model.addColumn("M_SID");
        model.addColumn("M_SNAME");

        // Set Background1 Image On Add New Medicine Page..
		JLabel background;
		ImageIcon img=new ImageIcon(new ImageIcon("images//MediHomeImg.jpg").getImage().getScaledInstance(900,720,Image.SCALE_DEFAULT));
		background = new JLabel("",img,JLabel.CENTER);
		background.setBounds(0,0,700,520);
		jf.add(background);

		// Set Background2 Image On Add New Medicine Page..
		JLabel background1;
		ImageIcon img1=new ImageIcon(new ImageIcon("images//MediHomeImg.jpg").getImage().getScaledInstance(800,700,Image.SCALE_DEFAULT));
		background1 = new JLabel("",img1,JLabel.CENTER);
		background1.setBounds(0,0,850,520);
		jf.add(background1);

		

	    jf.setTitle("ADD NEW MEDICINE ");
	    jf.setSize(830,580);
		jf.setLocation(20,20);
		jf.setResizable(false);
		jf.getContentPane().setBackground(Color.cyan);
	    jf.setVisible(true);
	}

	public void actionPerformed(ActionEvent ae)
	{
	 	if(ae.getSource()==b0)
	   	{
	   	try
	    {
	    	if(((t1.getText()).equals(""))||((t2.getText()).equals(""))||((t3.getText()).equals(""))||((t4.getText()).equals(""))||((t5.getText()).equals(""))||((t6.getText()).equals(""))||
	    	((t8.getText()).equals(""))||((t9.getText()).equals(""))||((t10.getText()).equals("")))
	        {
		    		JOptionPane.showMessageDialog(this,"* Details are Missing !","Warning!!!",JOptionPane.WARNING_MESSAGE);
	        }
	        else
	        {
             		//db code
            }

	}
	  else if(ae.getSource()==b1)
	  {    		
	  			t1.setText("");
	           t2.setText("");
	           t3.setText("");
	           t4.setText("");
	           t5.setText("");
	           t6.setText("");
			   t8.setText("");
	           t9.setText("");
	           t10.setText("");
	    }
	    else if(ae.getSource()==b2)
	    {//list
	  	int r = 0;
	     try
	     {
		        
	     }
	     catch(SQLException se)
	      {
	        	
	      }
	      catch(Exception e)
	      {
	       		   
	      }
		}
	}
	public static void main(String args[])
	{
	      new AddNewMedicine();
	}
}

