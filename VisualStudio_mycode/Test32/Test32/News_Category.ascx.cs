using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Configuration;
using System.Data.SqlClient;
using System.Data;

namespace Test32
{
    public partial class News_Category : System.Web.UI.UserControl
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack) //Load 1 lần tránh nạp lại
            {
                SqlCommand sqlCom = new SqlCommand("Select * From News_Category");

                drpNews_Category.DataSource = SQLDB.SQLDB.GetData(sqlCom);
                drpNews_Category.DataValueField = "CategoryID";
                drpNews_Category.DataTextField = "CategoryName";
                drpNews_Category.DataBind();
            }
        }
        //Sự kiện Click ở DropDownList
        protected void drpNews_Category_SelectedIndexChanged(object sender, EventArgs e)
        {
            SqlCommand sqlCom = new SqlCommand("Select * from News_Detail Where CategoryID=@CategoryID And Active = 'true'");
            sqlCom.CommandType = CommandType.Text;
            //Vì ở trên đã Set cho drpNews_Category.DataValueField = "CategoryID" => Dạng số => Parse về dạng số cho giống ID
            sqlCom.Parameters.AddWithValue("@CategoryID", int.Parse(drpNews_Category.SelectedValue.ToString()));
            //Truy vấn đi vào DataSource để đổ dữ liệu =>
            rptNews.DataSource = SQLDB.SQLDB.GetData(sqlCom);//rptNews là ID đã đặt lúc ở phần design
            rptNews.DataBind();// Chạy

        }
    }
}