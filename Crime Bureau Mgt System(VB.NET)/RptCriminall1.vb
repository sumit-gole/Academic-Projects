Imports CrystalDecisions.CrystalReports.Engine
Public Class RptCriminall1

    Private Sub RptCriminall_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Dim crpt As New ReportDocument
        crpt.Load("G:\CRIME BUREAU MGT SYSTEM\CRIME BUREAU MGT SYSTEM\CrystalReportCriminal.rpt")
        CrystalReportViewer1.ReportSource = crpt
        CrystalReportViewer1.Refresh()
    End Sub
End Class