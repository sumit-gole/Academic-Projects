Imports System.Data.OleDb
Imports System.Drawing.Image
Imports System.IO
Imports System.Data.DataTable

Public Class Frm7Mostwanted
    Dim con As New OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=G:\CRIME BUREAU MGT SYSTEM\MyDB\CrimeDB.mdb")
    'Dim conn As New SqlConnection("Data Source=SAI-PC\SQLEXPRESS;Initial Catalog=elegance;Integrated Security=True")
    Dim filepath As String
    Dim uploadfilename, randomvalue, uploadimage As String


    Private Sub Button5_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button5.Click
        Me.Close()
    End Sub

    Private Sub btnupdate_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnupdate.Click
        con.Open()
        'Dim istr As String = "Update MostWanted Set Mname='" + TextBox2.Text + "',Age=" + TextBox4.Text + ",Sex='" + TextBox5.Text + "',Description='" + TextBox6.Text + "',Identificationmark='" + TextBox7.Text + "',Occupation='" + TextBox8.Text + "'"
        ' Dim icmd As New SqlCommand(istr, con)
        'icmd.ExecuteNonQuery()
        MessageBox.Show("Most Wanted record Updated Successfully.", "Process Completed")
        con.Close()
    End Sub

    Private Sub DataGridView1_DoubleClick(ByVal sender As Object, ByVal e As System.EventArgs) Handles DataGridView1.DoubleClick

        btndelete.Visible = True
        btnupdate.Visible = True
        Button2.Visible = False
        con.Open()
        Dim istr As String = "Select * from MostWanted where Mid ='" & DataGridView1.CurrentRow.Cells(0).Value & "'"
        Dim icmd As New OleDbCommand(istr, con)
        Dim reader = icmd.ExecuteReader()
        While reader.Read()
            TextBox1.Text = reader(0)  '      [Mostwantedid]()
            TextBox2.Text = reader(1) ',[Mostwantedname]
            TextBox4.Text = reader(3) ',[Age]
            TextBox5.Text = reader(4) ',[Sex]
            TextBox6.Text = reader(5) ',[Description]
            TextBox7.Text = reader(6) ',[Identificationmark]
            TextBox8.Text = reader(7) ',[Occupation]
        End While
        con.Close()
        'uploads
        TabControl1.SelectedTab = TabPage1
    End Sub

    Private Sub btndelete_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btndelete.Click
        con.Open()
        Dim msgbutton As DialogResult
        msgbutton = MessageBox.Show("Are you sure you want to Delete this record?", "Are you sure???", MessageBoxButtons.YesNo, MessageBoxIcon.Warning, MessageBoxDefaultButton.Button1)
        Dim istr As String = "delete from MostWanted where Mid=" & TextBox1.Text & ""
        Dim icmd As New OleDbCommand(istr, con)
        icmd.ExecuteNonQuery()
        MessageBox.Show("Record has been Deleted successfully.", "Process Completed", MessageBoxButtons.OK, MessageBoxIcon.Information)
        con.Close()
    End Sub

    Public Sub FilterData(ByVal valueToSearch As String)
        Dim searchQuery As String = "SELECT * From MostWanted"

        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)
        DataGridView1.DataSource = table
    End Sub
    Private Sub Frm7Mostwanted_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        FilterData("")
        Button5.Enabled = True
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox4.Clear()
        TextBox6.Clear()
        TextBox7.Clear()
        TextBox1.Clear()
        TextBox2.Clear()
        TextBox8.Clear()
        TextBox5.Clear()
        ComboBox1.Text = ""
        PictureBox1.Visible = False
        Button5.Enabled = True
        Button1.Enabled = False
        Button2.Enabled = False
        Button6.Enabled = True
        btnupdate.Enabled = False
        btndelete.Enabled = False
    End Sub
    Private Sub Button6_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button6.Click
        Try
            con.Open()
            Dim istr As String = "insert into MostWanted values(" + TextBox1.Text + ",'" + TextBox2.Text + "'," + TextBox4.Text + ",'" + ComboBox1.Text + "','" + TextBox6.Text + "','" + TextBox7.Text + "','" + TextBox8.Text + "',@img)"
            Dim icmd As New OleDbCommand(istr, con)

            Dim ms As New MemoryStream
            PictureBox1.Image.Save(ms, PictureBox1.Image.RawFormat)
            icmd.Parameters.AddWithValue("@img", ms)    '.Value = ms.ToArray()
            If icmd.ExecuteNonQuery() = 1 Then
                ' MessageBox.Show("Image Inserted..")
            Else
                MessageBox.Show("Image Not Inserted..!!")
            End If
            MessageBox.Show("Most Wanted Record Inserted Successfully...", "Process Completed")
            con.Close()
            Button2.Enabled = True
            Button5.Enabled = True
            btnupdate.Enabled = True
            btndelete.Enabled = True
            Button6.Enabled = False

        Catch ex As Exception
            MsgBox(ex.Message)
        End Try
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        PictureBox1.Visible = True
        Dim opf As New OpenFileDialog
        opf.Filter = "Choose Image(*.jpg;*.png;*,gif)|*.jpg;*.png;*.gif"
        If opf.ShowDialog = DialogResult.OK Then
            PictureBox1.Image = Image.FromFile(opf.FileName)
        End If
    End Sub

    Private Sub Button4_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button4.Click

        Dim cmd As New OleDbCommand("select * from MostWanted where Mid = @mid", con)
        cmd.Parameters.Add("@mid", OleDbType.Integer).Value = TextBox1.Text
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)

        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox7.Text = ""
        TextBox8.Text = ""
        ComboBox1.Text = ""

        If table.Rows.Count() > 0 Then
            TextBox1.Text = table.Rows(0)(0).ToString()
            TextBox2.Text = table.Rows(0)(1).ToString()
            TextBox4.Text = table.Rows(0)(2).ToString()
            TextBox5.Text = table.Rows(0)(3).ToString()
            TextBox6.Text = table.Rows(0)(4).ToString()
            TextBox7.Text = table.Rows(0)(5).ToString()
            TextBox8.Text = table.Rows(0)(6).ToString()
            ComboBox1.Text = table.Rows(0)(3).ToString()

            Dim img() As Byte
            img = table.Rows(0)(7)
            Dim ms As New MemoryStream(img)
            PictureBox1.Image = Image.FromStream(ms)

        Else
            MessageBox.Show("No Data Found...!!!")
        End If
    End Sub
End Class