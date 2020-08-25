using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.HtmlControls;
using System.Data.SqlClient;

namespace Test
{
    public partial class News_Category : System.Web.UI.UserControl
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            SQLDB.SQLDB.ConnectionString = "Data Source=DESKTOP-GE5FPCU\\SQLEXPRESS;Initial Catalog=Hoc;Integrated Security=True";
            SqlCommand sqlCom = new SqlCommand("SELECT * FROM News_Category");
            drpNews_Category.DataSource = SQLDB.SQLDB.GetData(sqlCom);
            drpNews_Category.DataValueField = "CategoryID";//ID
            drpNews_Category.DataTextField = "CategoryName";//Name
            drpNews_Category.DataBind();
        }
    }
}