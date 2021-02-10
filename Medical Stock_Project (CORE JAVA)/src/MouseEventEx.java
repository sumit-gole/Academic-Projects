import java.awt.*;
import java.awt.event.*;
public class MouseEventEx extends Frame implements MouseListener
{
	private TextField tfMouseX;
	private TextField tfMouseY;
	public MouseEventEx()
	{
		setLayout(new FlowLayout());
		add(new Label("X-Click :"));
		tfMouseX=new TextField(10);
		tfMouseX.setEditable(false);
		add(tfMouseX);

		add(new Label("Y-Click : "));
		tfMouseY=new TextField(10);
		tfMouseY.setEditable(false);
		add(tfMouseY);

		addMouseListener(this);
		setTitle("Mouse Event Ex");
		setSize(400,350);
		setVisible(true);
	}
	public static void main(String[] args) 
	{
		new MouseEventEx();
	}
	public void mouseClicked(MouseEvent e)
	{
		tfMouseX.setText(e.getX()+"");
		tfMouseX.setText(e.getY()+"");
	}
	@Override public void mousePressed(MouseEvent e){}
	@Override public void mouseReleased(MouseEvent e){}
	@Override public void mouseEntered(MouseEvent e){}
	@Override public void mouseExited(MouseEvent e){}
}