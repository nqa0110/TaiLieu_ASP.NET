using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data.SqlClient;

namespace Bai32
{
    public partial class News_Category : System.Web.UI.UserControl
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            //Chuoi ket noi den CSDL
            SQLDB.SQLDB.ConnectionString = "Data Source=DESKTOP-GE5FPCU\\SQLEXPRESS;Initial Catalog=Hoc;Integrated Security=True";
            //Cau Truy Van Du Lieu
            SqlCommand sqlCom = new SqlCommand("select * from News_Category");
            //Dua du lieu tu DB => Dropdownlist
            drpNews_Category.DataSource = SQLDB.SQLDB.GetData(sqlCom);//Lay cau Truy Van
            drpNews_Category.DataValueField = "CategoryID";//ID
            drpNews_Category.DataTextField = "CategoryName";//Name
            drpNews_Category.DataBind();//Chay
        }
    }
}