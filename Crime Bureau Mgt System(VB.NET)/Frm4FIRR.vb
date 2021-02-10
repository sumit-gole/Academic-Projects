Imports System.Data.OleDb

Public Class Frm4FIRR
    Dim con As New OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=G:\CRIME BUREAU MGT SYSTEM\MyDB\CrimeDB.mdb")

    Private Sub Button5_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button5.Click
        Me.Close()
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        con.Open()
        Dim istr As String = "insert into FIR values(" + TextBox11.Text + ",'" & DateTimePicker1.Text & "','" + ComboBox5.Text + "','" + ComboBox3.Text + "','" + TextBox14.Text + "','" + ComboBox4.Text + "','" + ComboBox2.Text + "','" + TextBox1.Text + "','" & DateTimePicker5.Text & "','" + ComboBox1.Text + "'," + TextBox4.Text + ",'" & DateTimePicker9.Text & "','" + TextBox5.Text + "','" + TextBox6.Text + "','" + TextBox7.Text + "','" + TextBox2.Text + "','" + TextBox10.Text + "')"
        Dim insertconn As New OleDbCommand(istr, con)
        insertconn.ExecuteNonQuery()
        MsgBox("Data Saved Successfully...")
        con.Close()
        Button1.Enabled = True
        Button3.Enabled = True
        Button5.Enabled = True
        Button6.Enabled = True
        Button2.Enabled = False
    End Sub

    Private Sub Button4_Click(ByVal sender As System.Object, ByVal e As System.EventArgs)
        TextBox1.Text = ""
        ComboBox1.Text = ""
        ComboBox2.Text = ""
        ComboBox3.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox7.Text = ""
        TextBox10.Text = ""
        TextBox11.Text = ""
        TextBox14.Text = ""
        TextBox15.Text = ""
        TextBox16.Text = ""
        TextBox18.Text = ""
        DateTimePicker1.Text = ""
        DateTimePicker4.Text = ""
        DateTimePicker5.Text = ""
        DateTimePicker9.Text = ""
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox7.Text = ""
        TextBox10.Text = ""
        ComboBox1.Text = ""
        DateTimePicker5.Text = ""
        DateTimePicker5.Text = ""
        Button2.Enabled = True
        Button1.Enabled = False
        Button3.Enabled = False
        Button5.Enabled = True
        Button6.Enabled = False
    End Sub

    Private Sub Frm4FIR_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Button2.Enabled = True
        FilterData("")
    End Sub
    Public Sub FilterData(ByVal valueToSearch As String)
        Dim searchQuery As String = "SELECT * From FIR"

        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim ds As New DataSet
        'Dim table As New DataTable()
        adapter.Fill(ds, "FIR")
        DataGridView1.DataSource = ds
        DataGridView1.DataMember = "FIR"

    End Sub
    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        con.Open()
        Dim msgbutton As DialogResult
        Dim i As Integer
        msgbutton = MessageBox.Show("Are you sure you want to Delete this record?", "Are you sure???", MessageBoxButtons.YesNo, MessageBoxIcon.Warning, MessageBoxDefaultButton.Button1)
        If msgbutton = Windows.Forms.DialogResult.Yes Then
            Dim cmd = New OleDbCommand("delete from FIR where FIRNo=" + TextBox11.Text + "", con)
            i = cmd.ExecuteNonQuery()
            If i > 0 Then
                MessageBox.Show("Record has been Deleted Successfully...", "Process Completed", MessageBoxButtons.OK, MessageBoxIcon.Information)
            Else
                MessageBox.Show("Failed to Delete record!", "Invalid Entry", MessageBoxButtons.OK, MessageBoxIcon.Exclamation)
            End If
        End If
        con.Close()
    End Sub
End Class