﻿Imports System.Data.OleDb
Public Class SearchFrmPostMortem
    Dim con As New OleDbConnection("Provider=Microsoft.Jet.OLEDB.4.0;Data Source=G:\CRIME BUREAU MGT SYSTEM\MyDB\CrimeDB.mdb")
    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        Me.Refresh()
        Me.Close()
    End Sub
    Public Sub FilterData(ByVal valueToSearch As String)
        Dim searchQuery As String = "SELECT * From PostMortem Where Pno like '%" & TextBox1.Text & "%'"

        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim ds As New DataSet()
        adapter.Fill(ds, "PostMortem")
        DataGridView1.DataSource = ds
        DataGridView1.DataMember = "PostMortem"
    End Sub

    Private Sub SearchFrmPostMortem_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        FilterData("")
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        Dim searchQuery As String = "SELECT * From PostMortem"
        Dim cmd As New OleDbCommand(searchQuery, con)
        Dim adapter As New OleDbDataAdapter(cmd)
        Dim table As New DataTable()
        adapter.Fill(table)
        DataGridView1.DataSource = table
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        FilterData(TextBox1.Text)
    End Sub
End Class