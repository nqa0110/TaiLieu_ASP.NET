<%@ Control Language="C#" AutoEventWireup="true" CodeBehind="adminControl.ascx.cs" Inherits="iFSOFT.admin.adminControl" %>
<%@ Register src="Menu.ascx" tagname="Menu" tagprefix="uc1" %>
<div> Banner Admin </div>
<table>
    <tr>
        <td style="width:200px;">
            <uc1:Menu ID="Menu1" runat="server" />
        </td>
        <td>&nbsp;</td>
        <td>Content</td>
    </tr>
</table>