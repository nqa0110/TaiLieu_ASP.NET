using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.HtmlControls;


namespace Bai32
{
    public partial class Index : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            string s = Request.QueryString["id"];
            switch (s)
            {
                case "1":
                    plLoad.Controls.Add(LoadControl("Display/Menu/MenuControl.ascx"));
                    break;
                case "2":
                    plLoad.Controls.Add(LoadControl("Display/Menu/MenuControl.ascx"));
                    break;
                case "3":
                    plLoad.Controls.Add(LoadControl("Display/Menu/MenuControl.ascx"));
                    break;
                case "4":
                    plLoad.Controls.Add(LoadControl("Display/Menu/MenuControl.ascx"));
                    break;
                case "5":
                    plLoad.Controls.Add(LoadControl("Display/Menu/MenuControl.ascx"));
                    break;
                case "6":
                    plLoad.Controls.Add(LoadControl("Display/Menu/MenuControl.ascx"));
                    break;
                default:
                    plLoad.Controls.Add(LoadControl("News_Category.ascx"));
                    break;
            }
        }
    }
}