using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Test32.Startup))]
namespace Test32
{
    public partial class Startup {
        public void Configuration(IAppBuilder app) {
            ConfigureAuth(app);
        }
    }
}
