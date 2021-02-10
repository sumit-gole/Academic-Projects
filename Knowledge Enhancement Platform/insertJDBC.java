import java sql.*;
public class inserJDBC
{
	public static void main(String args[]) throws Exception
	{
		try
		{
			Class.forName(com.mysql.jdbc.Driver);
			Connection con = DriverManager.getConnection();
			DataInputStream da = new DataInputStream(System.in);
			int id = Integer.parseInt(da.readLine());
			String sname = da.readLine();
			String class = da.readLine();
			int per = Integer.parseInt(da.readLine());
			Statement st = con.createStatement();
			st.executeUpdate("insert into student values(id,sname,class,per)");
			ResultSet rs = st.executeQuery("select * from student");
			while(rs.next())
			{
				System.out.println(rs.getInt(1));
				System.out.println(rs.getString(2));
				System.out.println(rs.getString(3));
				System.out.println(rs.getInt(4));
			}
			rs.close();
			st.close();
			con.close();
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
}