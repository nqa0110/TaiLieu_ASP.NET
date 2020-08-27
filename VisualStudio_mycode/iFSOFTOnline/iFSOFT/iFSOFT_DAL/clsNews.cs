using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

namespace iFSOFT_DAL
{
    public class clsNews
    {
        public DataTable GetList()
        {
            SqlCommand sqlCom = new SqlCommand("Select * from News_Categories");
            sqlCom.CommandType = CommandType.Text;
            return SQLDB.SQLDB.GetData(sqlCom);
        }
    }
}
