<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Index.aspx.cs" Inherits="Bai32.Index" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
          <ul id="main_menu">
                        <li><a href="?id=1">1</a></li>
                        <li><a href="?id=2">2</a></li>
                        <li><a href="?id=3">3</a></li>
                        <li><a href="?id=4">4</a></li>
                        <li><a href="?id=5">5</a></li>
                        <li><a href="?id=6">6</a></li>
          </ul>
    </div>
        <asp:PlaceHolder ID="plLoad" runat="server"></asp:PlaceHolder>
    </form>
</body>
</html>
