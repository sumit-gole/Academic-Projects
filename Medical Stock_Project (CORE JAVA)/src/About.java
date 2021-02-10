import javax.swing.*;
import java.awt.*;

class About extends JFrame
{
	JFrame jf;
	JLabel l1,l2,l3,l4,l5,l6,l7,l8;
	JButton b1,b2,b3;

	About()
	{
		jf=new JFrame();

		jf.setLayout(null);

		l1 = new JLabel("-- MEDICAL STOCK SYSTEM --");
		l1.setFont(new Font("Times New Roman",Font.BOLD,35));
		l1.setBounds(90,30,600,40);l1.setForeground(Color.white);
		jf.add(l1);

		l2 = new JLabel("THIS SYSTEM DEVELOPED BY-");
		l2.setFont(new Font("Times New Roman",Font.BOLD,18));
		l2.setBounds(90,100,300,80);
		jf.add(l2);

		l3 = new JLabel("MR. SUMIT SURESH GOLE.");
		l3.setFont(new Font("Times New Roman",Font.BOLD,19));
		l3.setBounds(270,150,300,40);  l3.setForeground(Color.white);
		jf.add(l3);

		/* l8 = new JLabel("MS. ASHWINI DIPAK DURGUDE.");
		l8.setFont(new Font("Times New Roman",Font.BOLD,19));
		l8.setBounds(270,180,300,60);  l8.setForeground(Color.white);
		jf.add(l8); */

		l4 = new JLabel("UNDER THE GUIDANCE OF  MRS. DIPTI NASHINE MAM & MRS. SHITAL PATIL MAM.");
		l4.setFont(new Font("Times New Roman",Font.BOLD,18));l4.setForeground(Color.red);
		l4.setBounds(7,240,800,40);
		jf.add(l4);

		l5 = new JLabel("  --  In this System we can Add Details of Medicines, Suppliers.");
		//l5.setFont(new Font("Times New Roman",Font.BOLD,20));
		l5.setBounds(80,300,800,40);
		jf.add(l5);

		l6 = new JLabel("  --  We can also Upadte, Delete & Search the Existing Details.");
		//l6.setFont(new Font("Times New Roman",Font.BOLD,20));
		l6.setBounds(80,350,800,40);
		jf.add(l6);

		l7 = new JLabel("  --  It is Helpfull for Stock of Medicine & where we Placed the Medicine in Store.");
		//l7.setFont(new Font("Times New Roman",Font.BOLD,20));
		l7.setBounds(80,400,800,40);
		jf.add(l7);

		// Set Background Image On About Page..
		JLabel background;
		ImageIcon img=new ImageIcon(new ImageIcon("images//img4.jpg").getImage().getScaledInstance(700,520,Image.SCALE_DEFAULT));
		background = new JLabel("",img,JLabel.CENTER);
		background.setBounds(0,0,700,520);
		jf.add(background);

        jf.setTitle("ABOUT SYSTEM");
		jf.setSize(700,520);
		jf.setLocation(20,20);
		jf.setResizable(false);
		jf.setVisible(true);

	}

	public static void main(String args[])
	{
          new About();

	}
}
