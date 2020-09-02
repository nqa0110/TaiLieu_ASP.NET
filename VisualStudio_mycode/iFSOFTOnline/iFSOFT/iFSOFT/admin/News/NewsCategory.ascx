<%@ Control Language="C#" AutoEventWireup="true" CodeBehind="NewsCategory.ascx.cs" Inherits="iFSOFT.admin.News.NewsCategory" %>
<div>DANH SÁCH TIN TỨC</div>
<asp:MultiView ID="mul" runat="server" ActiveViewIndex="0">
    <asp:View ID="v1" runat="server">
        <div>
            <asp:Repeater ID="rptNewsCategory" runat="server">
                <HeaderTemplate>
                    <table style="width:100%">
                        <tr>
                            <td style="width:300px;">Tên Danh Mục</td>
                            <td style="width:50px">Order</td>
                            <td style="width:100px;">Trạng thái</td>
                            <td></td>
                        </tr>
                </HeaderTemplate>
                <ItemTemplate>
                        <tr>
                            <td><%#:Eval("vName") %></td>
                            <td><%#:Eval("vOrder") %></td>
                            <td><%#:Eval("Active") %></td>
                        </tr>
                </ItemTemplate>
                <FooterTemplate>
                    </table>
                </FooterTemplate>
            </asp:Repeater>
        </div>
        <%------------------------------------Button View 1------------------------------------%>
        <div>
            <asp:LinkButton ID="LinkButton1" runat="server" OnClick="LinkButton1_Click">LinkButton</asp:LinkButton>
        </div>

    </asp:View>
    <asp:View ID="v2" runat="server">
        <table>
            <tr>
                <td>Tên Danh Mục</td>
                <td><asp:TextBox ID="txtCategoryName" runat="server"></asp:TextBox></td>
                <td>Order</td>
                <td><asp:TextBox ID="txtOrder" runat="server"></asp:TextBox></td>
                <td>Active</td>
                <td><asp:CheckBox ID="chkActive" runat="server" Checked="true" /></td>
            </tr>
        </table>
    </asp:View>
</asp:MultiView>
