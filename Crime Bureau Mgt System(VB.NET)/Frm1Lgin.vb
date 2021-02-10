Public Class Frm1Lgin
    Private Sub CheckBox1_CheckedChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles CheckBox1.CheckedChanged
        If TextBox1.UseSystemPasswordChar = True Then
            'Show PassWord
            TextBox1.UseSystemPasswordChar = False
        Else
            'Hide PassWord
            TextBox1.UseSystemPasswordChar = True
        End If
    End Sub

    Private Sub Cancel_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Cancel.Click
        Me.Close()
    End Sub
    Private Sub OK_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles OK.Click
        If (ComboBox1.Text = "Priyanka" Or ComboBox1.Text = "Rekha") And TextBox1.Text = "Crime123" Then
            MDIHomePage.Show()
            Me.Hide()
        Else
            MsgBox("Sorry,Username or Password Not Found")
        End If
    End Sub
End Class