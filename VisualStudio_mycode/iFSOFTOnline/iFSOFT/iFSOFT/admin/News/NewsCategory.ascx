<%@ Control Language="C#" AutoEventWireup="true" CodeBehind="NewsCategory.ascx.cs" Inherits="iFSOFT.admin.News.NewsCategory" %>
<div>DANH SÁCH TIN TỨC</div>
<div>
    <asp:Repeater ID="rptNewsCategory" runat="server">
        <HeaderTemplate>
            <table style="width:100%">
                <tr>
                    <td style="width:300px;">Tên Danh Mục</td>
                    <td style="width:50px">Order</td>
                    <td style="width:100px;">Trạng Thái</td>
                    <td></td>
                </tr>
        </HeaderTemplate>
        <ItemTemplate>
            <tr>
                <td><%#:Eval("CategoryName") %></td>
                <td><%#:Eval("Order") %></td>
                <td><%#:Eval("Active") %></td>
            </tr>
        </ItemTemplate>
        <FooterTemplate>
            </table>
        </FooterTemplate>
    </asp:Repeater>
</div>
