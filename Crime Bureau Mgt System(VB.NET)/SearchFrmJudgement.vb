Imports System.Data.OleDb
Public Class SearchFrmJudgement
    Dim con As New OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=G:\CRIME BUREAU MGT SYSTEM\MyDB\CrimeDB.mdb")
    Private Sub SearchFrmJudgement_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        FilterData("")
    End Sub
    Public Sub FilterData(ByVal valueToSearch As String)
        Dim searchQuery As String = "SELECT * From Judgement Where Jid like '%" & TextBox1.Text & "%'"

        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)
        DataGridView1.DataSource = table
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        Dim searchQuery As String = "SELECT * From Judgement"
        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)
        DataGridView1.DataSource = table
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        FilterData(TextBox1.Text)
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        Me.Refresh()
        Me.Close()
    End Sub
End Class