<%@ Control Language="C#" AutoEventWireup="true" CodeBehind="News_Category.ascx.cs" Inherits="Test32.News_Category" %>
<asp:DropDownList ID="drpNews_Category" runat="server" OnSelectedIndexChanged="drpNews_Category_SelectedIndexChanged" AutoPostBack="true"></asp:DropDownList>
<asp:Repeater ID="rptNews" runat="server">
    <ItemTemplate><%#:Eval("Title") %></ItemTemplate>
</asp:Repeater>