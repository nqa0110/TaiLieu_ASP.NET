using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Bai32.Startup))]
namespace Bai32
{
    public partial class Startup {
        public void Configuration(IAppBuilder app) {
            ConfigureAuth(app);
        }
    }
}
