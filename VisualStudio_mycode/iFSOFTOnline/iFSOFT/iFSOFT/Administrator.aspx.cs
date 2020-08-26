﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace iFSOFT
{
    public partial class Administrator : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            //dẫn đến control => adminControl vì adminControl sẽ quản lý toàn bộ thư mục admin
            Controls.Add(LoadControl("/admin/adminControl.ascx"));
        }
    }
}