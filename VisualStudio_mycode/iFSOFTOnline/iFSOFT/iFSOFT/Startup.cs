using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(iFSOFT.Startup))]
namespace iFSOFT
{
    public partial class Startup {
        public void Configuration(IAppBuilder app) {
            ConfigureAuth(app);
        }
    }
}
