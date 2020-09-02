using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;
using iFSOFT_DAL;

namespace iFSOFT.admin.News
{
    public partial class NewsCategory : System.Web.UI.UserControl
    {
        clsNews _news = new clsNews();
        protected void Page_Load(object sender, EventArgs e)
        {
            if(!IsPostBack)
            {
                LoadData();
            }
        }
        void LoadData()
        {
            //Truy vấn từ GetList() trong clsNews==>DataSource==>Đổ dữ liệu==>rptNewsCategory
            rptNewsCategory.DataSource = _news.GetList();
            rptNewsCategory.DataBind();// Chạy
        }

        protected void LinkButton1_Click(object sender, EventArgs e)
        {

        }
    }
}