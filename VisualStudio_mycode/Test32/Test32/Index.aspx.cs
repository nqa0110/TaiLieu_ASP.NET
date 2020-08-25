using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Test32
{
    public partial class Index : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            //Load Control có tên News_Category.ascx
            plLoad.Controls.Add(LoadControl("News_Category.ascx"));
        }
    }
}