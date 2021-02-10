Imports System.Data.OleDb

Public Class Frm3Complaint
    Dim con As New OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=G:\CRIME BUREAU MGT SYSTEM\MyDB\CrimeDB.mdb")

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs)
        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox7.Text = ""
        TextBox8.Text = ""
        TextBox9.Text = ""
        TextBox10.Text = ""
        TextBox12.Text = ""
        DateTimePicker1.Text = ""
        DateTimePicker2.Text = ""
        DateTimePicker3.Text = ""
    End Sub

    Private Sub Button5_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs)
        Me.Close()
    End Sub

    Private Sub Button2_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        con.Open()
        Dim istr As String = "insert into Complaint values(" + TextBox1.Text + ",'" & DateTimePicker1.Text & "','" & DateTimePicker3.Text & "','" + TextBox8.Text + "','" + TextBox9.Text + "','" + TextBox3.Text + "'," + TextBox4.Text + ",'" + TextBox5.Text + "','" + TextBox6.Text + "','" & DateTimePicker2.Text & "','" + TextBox8.Text + "','" + TextBox9.Text + "','" + TextBox12.Text + "')"
        Dim insertconn As New OleDbCommand(istr, con)
        insertconn.ExecuteNonQuery()
        MsgBox("Data Saved Successfully...")
        con.Close()
        Button1.Enabled = True
        Button3.Enabled = True
        Button5.Enabled = True
        Button6.Enabled = True
        Button.Enabled = True
        Button2.Enabled = False
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        con.Open()
        Dim msgbutton As DialogResult
        Dim i As Integer
        msgbutton = MessageBox.Show("Are you sure you want to Delete this record?", "Are you sure???", MessageBoxButtons.YesNo, MessageBoxIcon.Warning, MessageBoxDefaultButton.Button1)
        If msgbutton = Windows.Forms.DialogResult.Yes Then
            Dim cmd = New OleDbCommand("delete from Complaint where Cno=" & TextBox1.Text & "", con)
            i = cmd.ExecuteNonQuery()
            If i > 0 Then
                MessageBox.Show("Record has been Deleted Successfully...", "Process Completed", MessageBoxButtons.OK, MessageBoxIcon.Information)
            Else
                MessageBox.Show("Failed to Delete record!", "Invalid Entry", MessageBoxButtons.OK, MessageBoxIcon.Exclamation)
            End If
        End If
        con.Close()
    End Sub
    Public Sub FilterData(ByVal valueToSearch As String)
        Dim searchQuery As String = "SELECT * From Complaint"

        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim ds As New DataSet
        'Dim table As New DataTable()
        adapter.Fill(ds, "Complaint")
        DataGridView1.DataSource = ds
        DataGridView1.DataMember = "Complaint"
    End Sub
    Private Sub Frm3Complaint_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        FilterData("")
        Button2.Enabled = True
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox6.Text = ""
        TextBox7.Text = ""
        TextBox8.Text = ""
        TextBox9.Text = ""
        TextBox10.Text = ""
        TextBox12.Text = ""
        Button2.Enabled = True
        Button1.Enabled = False
        Button3.Enabled = False
        Button5.Enabled = True
        Button6.Enabled = False
        Button.Enabled = False
    End Sub

    Private Sub Button5_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button5.Click
        Me.Close()
    End Sub

    Private Sub Button6_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button6.Click
        'Dim update As String = "Update Judgement Set Cno =" & TextBox2.Text & " , FIRNo=" & TextBox3.Text & " ,Court='" & TextBox4.Text & "' , PoliceIncharge='" & TextBox5.Text & "' ,Judge='" & TextBox6.Text & "' ,SuspectName='" & TextBox7.Text & "' ,Adrs='" & TextBox8.Text & "' ,Report='" & TextBox9.Text & "' ,Jdate='" & DateTimePicker1.Text & "'  Where Jid=" & TextBox1.Text & " "
        MessageBox.Show("Record Updated SuccessFully...")
    End Sub

    Private Sub Button_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button.Click
        Me.Refresh()
    End Sub
End Class