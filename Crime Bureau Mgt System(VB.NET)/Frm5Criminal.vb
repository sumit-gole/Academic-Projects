Imports System.Data.OleDb
Imports System.Drawing.Image
Imports System.Windows.Forms.PictureBox
Imports System.IO
Public Class Frm5Criminal
    Dim con As New OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=G:\CRIME BUREAU MGT SYSTEM\MyDB\CrimeDB.mdb")
    Dim filepath As String
    Dim uploadfilename, randomvalue, uploadimage As String

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        Me.Close()
    End Sub
    Public Sub FilterData(ByVal valueToSearch As String)
        Dim searchQuery As String = "SELECT * From Criminal"

        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim ds As New DataSet
        'Dim table As New DataTable()
        adapter.Fill(ds, "Criminal")
        DataGridView1.DataSource = ds
        DataGridView1.DataMember = "Criminal"
    End Sub
    Private Sub Frm5Criminal_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        FilterData("")
        Button5.Enabled = True
    End Sub

    Private Sub btnupdate_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button.Click

        MessageBox.Show("Criminal record updated successfully.", "Process Completed")
    End Sub
    Private Sub btndelete_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btndelete.Click
        con.Open()
        Dim msgbutton As DialogResult
        Dim i As Integer
        msgbutton = MessageBox.Show("Are you sure you want to Delete this record?", "Are you sure???", MessageBoxButtons.YesNo, MessageBoxIcon.Warning, MessageBoxDefaultButton.Button1)
        If msgbutton = Windows.Forms.DialogResult.Yes Then
            Dim cmd = New OleDbCommand("delete from Criminal where CrNo='" & TextBox1.Text & "'", con)
            i = cmd.ExecuteNonQuery()
            If i > 0 Then
                MessageBox.Show("Record has been Deleted Successfully...", "Process Completed", MessageBoxButtons.OK, MessageBoxIcon.Information)
            Else
                MessageBox.Show("Failed to Delete record!", "Invalid Entry", MessageBoxButtons.OK, MessageBoxIcon.Exclamation)
            End If
        End If
        con.Close()
    End Sub
    Private Sub Button4_Click(ByVal sender As System.Object, ByVal e As System.EventArgs)
        updatedelete()
    End Sub

    Public Sub updatedelete()
        Button.Visible = False
        btndelete.Visible = False
        Button2.Visible = True
        TextBox6.Clear()
        TextBox5.Clear()
        TextBox9.Clear()
        TextBox2.Clear()
        TextBox3.Clear()
        TextBox1.Clear()
        TextBox4.Clear()
        TextBox7.Clear()
        PictureBox1.Image = Image.FromFile(Application.StartupPath.ToString & "\images\blank.jpg")

    End Sub

    Private Sub Button5_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button5.Click
        con.Open()
        Dim str As String
        If RadioButton1.Checked = True Then
            str = "Yes"
        Else
            str = "No"
        End If

        Dim gender As String
        If RadioButton3.Checked = True Then
            gender = "Male"
        Else
            gender = "Female"
        End If
        Dim istr As String = "insert Into Criminal values(" + TextBox1.Text + "," + TextBox2.Text + ",'" & TextBox3.Text & "','" + TextBox6.Text + "'," + TextBox5.Text + ",'" & dtearrestdate.Text & "','" + TextBox7.Text + _
                             "','" + ComboBox1.Text + "','" & DateTimePicker2.Text & "','" + TextBox9.Text + "','" + TextBox4.Text + "','" + str + "','" + gender + "',@img)"
        Dim icmd As New OleDbCommand(istr, con)

        Dim ms As New MemoryStream
        PictureBox1.Image.Save(ms, PictureBox1.Image.RawFormat)
        icmd.Parameters.Add("@img", OleDbType.VarChar).Value = ms.ToArray()
        If icmd.ExecuteNonQuery() = 1 Then
            'MessageBox.Show("Image Inserted..")
        Else
            MessageBox.Show("Image Not Inserted..!!")
        End If
        MessageBox.Show("Criminal Record Inserted Successfully...", "Process Completed")
        con.Close()
        Button.Enabled = True
        Button3.Enabled = True
        Button2.Enabled = True
        btndelete.Enabled = True
        Button5.Enabled = False
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox7.Text = ""
        TextBox9.Text = ""
        ComboBox1.Text = ""
        DateTimePicker2.Text = ""
        dtearrestdate.Text = ""
        ComboBox2.Text = ""
        PictureBox1.Visible = False
        Button5.Enabled = True
        Button.Enabled = False
        btndelete.Enabled = False
        Button3.Enabled = True
        Button2.Enabled = False
    End Sub

    Private Sub btnimage_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnimage.Click
        PictureBox1.Visible = True
        Dim opf As New OpenFileDialog
        opf.Filter = "Choose Image(*.jpg;*.png;*,gif)|*.jpg;*.png;*.gif"
        If opf.ShowDialog = DialogResult.OK Then
            PictureBox1.Image = Image.FromFile(opf.FileName)
        End If
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click

        Dim cmd As New OleDbCommand("select * from Criminal where CrNo = @crno", con)
        cmd.Parameters.Add("@crno", OleDbType.Integer).Value = TextBox1.Text
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)

        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox7.Text = ""
        TextBox9.Text = ""
        ComboBox2.Text = ""
        ComboBox1.Text = ""

        If table.Rows.Count() > 0 Then
            TextBox1.Text = table.Rows(0)(0).ToString()
            TextBox2.Text = table.Rows(0)(1).ToString()
            TextBox3.Text = table.Rows(0)(2).ToString()
            TextBox4.Text = table.Rows(0)(3).ToString()
            TextBox5.Text = table.Rows(0)(4).ToString()
            TextBox6.Text = table.Rows(0)(5).ToString()
            TextBox7.Text = table.Rows(0)(6).ToString()
            TextBox9.Text = table.Rows(0)(9).ToString()
            ComboBox1.Text = table.Rows(0)(7).ToString()
            ComboBox2.Text = table.Rows(0)(10).ToString()

            Dim img() As Byte
            img = table.Rows(0)(13)
            Dim ms As New MemoryStream(img)
            PictureBox1.Image = Image.FromStream(ms)

        Else
            MessageBox.Show("No Data Found...!!!")
        End If
    End Sub
End Class