Imports System.Data.OleDb
Imports System.Drawing.Image
Imports System.IO
Public Class Frm8Postmortem
    Dim con As New OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\CRIME BUREAU MGT SYSTEM\MyDB\CrimeDB.mdb")
    'Dim conn As New SqlConnection("Data Source=SAI-PC\SQLEXPRESS;Initial Catalog=elegance;Integrated Security=True")
    Dim uploadfilename, randomvalue, uploadimage As String
    Dim filepath As String
    Public Sub FilterData(ByVal valueToSearch As String)
        Dim searchQuery As String = "SELECT * From PostMortem"
        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)
        DataGridView1.DataSource = table
    End Sub
    Private Sub Frm8Postmortem_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        FilterData("")
        Button1.Enabled = True
    End Sub

    Private Sub OpenFileDialog1_FileOk(ByVal sender As System.Object, ByVal e As System.ComponentModel.CancelEventArgs) Handles OpenFileDialog1.FileOk
        Dim strm As System.IO.Stream
        strm = OpenFileDialog1.OpenFile()
        filepath = OpenFileDialog1.FileName.ToString()
        uploadfilename = Path.GetFileName(filepath)
    End Sub

    Public Sub updatedelete()
        TextBox5.Clear()
        TextBox1.Clear()
        TextBox5.Clear()
        TextBox6.Clear()
        TextBox4.Clear()
        TextBox3.Clear()
        TextBox8.Clear()
        TextBox9.Clear()
        TextBox2.Clear()
        TextBox10.Clear()
        'PictureBox1.Image = Image.FromFile(Application.StartupPath.ToString & "\images\blank.jpg")
    End Sub

    Private Sub OpenFileDialog2_FileOk(ByVal sender As System.Object, ByVal e As System.ComponentModel.CancelEventArgs) Handles OpenFileDialog2.FileOk
        Dim strm As System.IO.Stream
        strm = OpenFileDialog2.OpenFile()
        filepath = OpenFileDialog2.FileName.ToString()
        uploadfilename = Path.GetFileName(filepath)
    End Sub

    Private Sub Button4_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button4.Click
        updatedelete()
    End Sub

    Private Sub Button3_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        Me.Close()
    End Sub

    Private Sub btndelete_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btndelete.Click
        Dim msgbutton As DialogResult
        msgbutton = MessageBox.Show("Are you sure you want to Delete this record?", "Are you sure???", MessageBoxButtons.YesNo, MessageBoxIcon.Warning, MessageBoxDefaultButton.Button1)
        If msgbutton = Windows.Forms.DialogResult.Yes Then
            con.Open()
            Dim cmd = New OleDbCommand("delete from PostMortem where Pno=" & TextBox2.Text & "", con)
            Dim i = cmd.ExecuteNonQuery()
            If i > 0 Then
                MessageBox.Show("Record has been Deleted successfully.", "Process Completed", MessageBoxButtons.OK, MessageBoxIcon.Information)
            Else
                MessageBox.Show("Failed to Delete record!", "Invalid Entry", MessageBoxButtons.OK, MessageBoxIcon.Exclamation)
            End If
            con.Close()
        End If
        updatedelete()
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        TextBox5.Clear()
        TextBox1.Clear()
        TextBox5.Clear()
        TextBox6.Clear()
        TextBox4.Clear()
        TextBox3.Clear()
        TextBox8.Clear()
        TextBox9.Clear()
        TextBox2.Clear()
        TextBox10.Clear()
        TextBox7.Clear()
        TextBox11.Text = " "
        ComboBox1.Text = " "
        PictureBox1.Visible = False
        Button3.Enabled = True
        Button1.Enabled = False
        Button4.Enabled = False
        Button5.Enabled = True
        btndelete.Enabled = False
        btnupdate.Enabled = False
    End Sub

    Private Sub btnupdate_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnupdate.Click
        MessageBox.Show("Post Mortem record Updated Successfully.", "Process Completed", MessageBoxButtons.OK, MessageBoxIcon.Information)
    End Sub
    Private Sub Button5_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button5.Click
        con.Open()
        Dim cmd = New OleDbCommand("insert into PostMortem values(" + TextBox1.Text + "," + TextBox2.Text + ",'" + TextBox3.Text + "','" + TextBox4.Text + "','" & dtedeath.Text & "','" + TextBox5.Text + "','" + TextBox6.Text + "','" + TextBox7.Text + "','" + TextBox8.Text + "','" + TextBox9.Text + "','" + TextBox10.Text + "','" + TextBox11.Text + "', @img)", con)
        Dim ms As New MemoryStream
        PictureBox1.Image.Save(ms, PictureBox1.Image.RawFormat)
        'cmd.Parameters.Add("@img", OleDbType.VarChar).Value = ms.ToArray()
        cmd.Parameters.AddWithValue("@img", ms)     ' '.Value = ms.ToArray()

        If cmd.ExecuteNonQuery() = 1 Then
            'MessageBox.Show("Image Inserted..")
        Else
            MessageBox.Show("Image Not Inserted..!!")
        End If

        MessageBox.Show("Post Mortem Record Inserted Successfully", "Process Completed", MessageBoxButtons.OK, MessageBoxIcon.Information)
        con.Close()

        Button1.Enabled = True
        Button3.Enabled = True
        Button5.Enabled = True
        btndelete.Enabled = True
        btnupdate.Enabled = True
        Button5.Enabled = False
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        PictureBox1.Visible = True
        Dim opf As New OpenFileDialog
        opf.Filter = "Choose Image(*.jpg;*.png;*,gif)|*.jpg;*.png;*.gif"
        If opf.ShowDialog = DialogResult.OK Then
            PictureBox1.Image = Image.FromFile(opf.FileName)
        End If
    End Sub

    Private Sub Button6_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button6.Click
        Dim cmd As New OleDbCommand("select * from PostMortem where Pno = @pno", con)
        cmd.Parameters.Add("@pno", OleDbType.Integer).Value = TextBox2.Text
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)

        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox8.Text = ""
        TextBox9.Text = ""
        TextBox10.Text = ""
        TextBox11.Text = ""
        ComboBox1.Text = ""
        dtedeath.Text = ""

        If table.Rows.Count() > 0 Then
            TextBox1.Text = table.Rows(0)(0).ToString()
            TextBox2.Text = table.Rows(0)(1).ToString()
            TextBox3.Text = table.Rows(0)(2).ToString()
            ComboBox1.Text = table.Rows(0)(3).ToString()
            TextBox11.Text = table.Rows(0)(5).ToString
            TextBox4.Text = table.Rows(0)(6).ToString()
            TextBox5.Text = table.Rows(0)(7).ToString()
            TextBox6.Text = table.Rows(0)(8).ToString()
            TextBox8.Text = table.Rows(0)(9).ToString()
            TextBox9.Text = table.Rows(0)(10).ToString()
            TextBox10.Text = table.Rows(0)(11).ToString()

            Dim img() As Byte
            img = table.Rows(0)(12)
            Dim ms As New MemoryStream(img)
            PictureBox1.Image = Image.FromStream(ms)

        Else
            MessageBox.Show("No Data Found...!!!")
        End If
    End Sub
End Class