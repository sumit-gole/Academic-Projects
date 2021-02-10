Imports System.Data.OleDb
Imports System.IO
Public Class Frm6Judgement
    Dim con As New OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=G:\CRIME BUREAU MGT SYSTEM\MyDB\CrimeDB.mdb")
    'Dim conn As New SqlConnection("Data Source=SAI-PC\SQLEXPRESS;Initial Catalog=elegance;Integrated Security=True")
    Dim filepath As String
    Dim uploadfilename, randomvalue As String

    Private Sub Frmjudgement_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        FilterData("")
        Button2.Enabled = True
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        Me.Close()
    End Sub
    Public Sub FilterData(ByVal valueToSearch As String)
        Dim searchQuery As String = "SELECT * From Judgement"

        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)
        DataGridView1.DataSource = table

    End Sub
    Public Sub updatedelete()
        btnupdate.Visible = False
        btndelete.Visible = False
        Button1.Visible = True
        TextBox8.Clear()
        TextBox8.Clear()
        TextBox2.Clear()
        TextBox4.Clear()
        TextBox3.Clear()
        TextBox5.Clear()
        TextBox1.Clear()
        TextBox6.Clear()
        TextBox9.Clear()
        TextBox9.Clear()
        TextBox7.Clear()
        TextBox4.Clear()
    End Sub


    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        TextBox1.Clear()
        TextBox2.Clear()
        TextBox3.Clear()
        TextBox4.Clear()
        TextBox5.Clear()
        TextBox6.Clear()
        TextBox7.Clear()
        TextBox8.Clear()
        TextBox9.Clear()
        DateTimePicker1.Text = ""
        Button3.Enabled = True
        Button1.Enabled = False
        btndelete.Enabled = False
        Button2.Enabled = True
        btnupdate.Enabled = False
    End Sub

    Private Sub btnupdate_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnupdate.Click
        Dim update As String = "Update Judgement Set Cno =" & TextBox2.Text & " , FIRNo=" & TextBox3.Text & " ,Court='" & TextBox4.Text & "' , PoliceIncharge='" & TextBox5.Text & "' ,Judge='" & TextBox6.Text & "' ,SuspectName='" & TextBox7.Text & "' ,Adrs='" & TextBox8.Text & "' ,Report='" & TextBox9.Text & "' ,Jdate='" & DateTimePicker1.Text & "'  Where Jid=" & TextBox1.Text & " "
        MessageBox.Show("Record Updated SuccessFully...")
    End Sub

    Private Sub btndelete_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btndelete.Click
        con.Open()
        Dim msgbutton As DialogResult
        msgbutton = MessageBox.Show("Are you sure you want to Delete this record?", "Are you sure???", MessageBoxButtons.YesNo, MessageBoxIcon.Warning, MessageBoxDefaultButton.Button1)
        If msgbutton = Windows.Forms.DialogResult.Yes Then

            Dim cmd = New OleDbCommand("delete from Judgement where Jid=" + TextBox1.Text + "", con)
            Dim i = cmd.ExecuteNonQuery()
            If i > 0 Then
                MessageBox.Show("Record has been Deleted successfully.", "Process Completed", MessageBoxButtons.OK, MessageBoxIcon.Information)
            Else
                MessageBox.Show("Failed to Delete record!", "Invalid Entry", MessageBoxButtons.OK, MessageBoxIcon.Exclamation)
            End If

        End If
        con.Close()
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        con.Open()
        Dim istr As String = "insert into Judgement values(" + TextBox1.Text + "," + TextBox2.Text + "," + TextBox3.Text + ",'" + TextBox4.Text + "','" + TextBox5.Text + "','" + TextBox6.Text + "','" + TextBox7.Text + "','" + TextBox8.Text + "','" + TextBox9.Text + "','" & DateTimePicker1.Text & "')"
        Dim insertconn As New OleDbCommand(istr, con)
        insertconn.ExecuteNonQuery()
        MsgBox("Data Saved Successfully...")
        con.Close()
        Button1.Enabled = True
        Button3.Enabled = True
        Button2.Enabled = True
        btndelete.Enabled = True
        btndelete.Enabled = True
        Button2.Enabled = False
    End Sub
End Class