#pragma checksum "C:\P3\tarea9\Pages\Index.razor" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "1df761746f5d6462f4bc13d8817852d19b5c0b44"
// <auto-generated/>
#pragma warning disable 1591
namespace tarea9.Pages
{
    #line hidden
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;
    using Microsoft.AspNetCore.Components;
#nullable restore
#line 1 "C:\P3\tarea9\_Imports.razor"
using System.Net.Http;

#line default
#line hidden
#nullable disable
#nullable restore
#line 2 "C:\P3\tarea9\_Imports.razor"
using Microsoft.AspNetCore.Authorization;

#line default
#line hidden
#nullable disable
#nullable restore
#line 3 "C:\P3\tarea9\_Imports.razor"
using Microsoft.AspNetCore.Components.Authorization;

#line default
#line hidden
#nullable disable
#nullable restore
#line 4 "C:\P3\tarea9\_Imports.razor"
using Microsoft.AspNetCore.Components.Forms;

#line default
#line hidden
#nullable disable
#nullable restore
#line 5 "C:\P3\tarea9\_Imports.razor"
using Microsoft.AspNetCore.Components.Routing;

#line default
#line hidden
#nullable disable
#nullable restore
#line 6 "C:\P3\tarea9\_Imports.razor"
using Microsoft.AspNetCore.Components.Web;

#line default
#line hidden
#nullable disable
#nullable restore
#line 7 "C:\P3\tarea9\_Imports.razor"
using Microsoft.JSInterop;

#line default
#line hidden
#nullable disable
#nullable restore
#line 8 "C:\P3\tarea9\_Imports.razor"
using tarea9;

#line default
#line hidden
#nullable disable
#nullable restore
#line 9 "C:\P3\tarea9\_Imports.razor"
using tarea9.Shared;

#line default
#line hidden
#nullable disable
#nullable restore
#line 10 "C:\P3\tarea9\_Imports.razor"
using DB;

#line default
#line hidden
#nullable disable
#nullable restore
#line 11 "C:\P3\tarea9\_Imports.razor"
using sistema;

#line default
#line hidden
#nullable disable
    [Microsoft.AspNetCore.Components.RouteAttribute("/")]
    public partial class Index : Microsoft.AspNetCore.Components.ComponentBase
    {
        #pragma warning disable 1998
        protected override void BuildRenderTree(Microsoft.AspNetCore.Components.Rendering.RenderTreeBuilder __builder)
        {
#nullable restore
#line 6 "C:\P3\tarea9\Pages\Index.razor"
 if (registro)
{

#line default
#line hidden
#nullable disable
            __builder.AddContent(0, "    ");
            __builder.OpenElement(1, "form");
            __builder.AddMarkupContent(2, "\r\n        ");
            __builder.OpenElement(3, "div");
            __builder.AddAttribute(4, "class", "container");
            __builder.AddMarkupContent(5, "\r\n\r\n            ");
            __builder.OpenElement(6, "div");
            __builder.AddAttribute(7, "class", "row mt-5");
            __builder.AddAttribute(8, "style", "text-align:center;");
            __builder.AddMarkupContent(9, "\r\n                <div class=\"col\"></div>\r\n                ");
            __builder.OpenElement(10, "div");
            __builder.AddAttribute(11, "class", "col");
            __builder.AddMarkupContent(12, "\r\n                    ");
            __builder.OpenElement(13, "div");
            __builder.AddAttribute(14, "class", "form-group");
            __builder.AddMarkupContent(15, "\r\n                        ");
            __builder.AddMarkupContent(16, "<label for=\"exampleInputEmail1\">Nombre</label>\r\n                        ");
            __builder.OpenElement(17, "input");
            __builder.AddAttribute(18, "type", "text");
            __builder.AddAttribute(19, "class", "form-control");
            __builder.AddAttribute(20, "id", "exampleInputEmail1");
            __builder.AddAttribute(21, "aria-describedby", "emailHelp");
            __builder.AddAttribute(22, "style", "width: 100%;");
            __builder.AddAttribute(23, "value", Microsoft.AspNetCore.Components.BindConverter.FormatValue(
#nullable restore
#line 17 "C:\P3\tarea9\Pages\Index.razor"
                                      Nombre

#line default
#line hidden
#nullable disable
            ));
            __builder.AddAttribute(24, "onchange", Microsoft.AspNetCore.Components.EventCallback.Factory.CreateBinder(this, __value => Nombre = __value, Nombre));
            __builder.SetUpdatesAttributeName("value");
            __builder.CloseElement();
            __builder.AddMarkupContent(25, "\r\n                    ");
            __builder.CloseElement();
            __builder.AddMarkupContent(26, "\r\n                    ");
            __builder.OpenElement(27, "div");
            __builder.AddAttribute(28, "class", "form-group");
            __builder.AddMarkupContent(29, "\r\n                        ");
            __builder.AddMarkupContent(30, "<label for=\"exampleInputPassword1\">Contraseña</label>\r\n                        ");
            __builder.OpenElement(31, "input");
            __builder.AddAttribute(32, "type", "password");
            __builder.AddAttribute(33, "class", "form-control");
            __builder.AddAttribute(34, "id", "exampleInputPassword1");
            __builder.AddAttribute(35, "style", "width: 100%;");
            __builder.AddAttribute(36, "value", Microsoft.AspNetCore.Components.BindConverter.FormatValue(
#nullable restore
#line 22 "C:\P3\tarea9\Pages\Index.razor"
                                     passw

#line default
#line hidden
#nullable disable
            ));
            __builder.AddAttribute(37, "onchange", Microsoft.AspNetCore.Components.EventCallback.Factory.CreateBinder(this, __value => passw = __value, passw));
            __builder.SetUpdatesAttributeName("value");
            __builder.CloseElement();
            __builder.AddMarkupContent(38, "\r\n\r\n                    ");
            __builder.CloseElement();
            __builder.AddMarkupContent(39, "\r\n\r\n                    ");
            __builder.OpenElement(40, "button");
            __builder.AddAttribute(41, "type", "button");
            __builder.AddAttribute(42, "class", "btn btn-primary");
            __builder.AddAttribute(43, "style", "margin-right: 48%;");
            __builder.AddAttribute(44, "onclick", Microsoft.AspNetCore.Components.EventCallback.Factory.Create<Microsoft.AspNetCore.Components.Web.MouseEventArgs>(this, 
#nullable restore
#line 27 "C:\P3\tarea9\Pages\Index.razor"
                              login

#line default
#line hidden
#nullable disable
            ));
            __builder.AddContent(45, "Registrarse");
            __builder.CloseElement();
            __builder.AddMarkupContent(46, "\r\n                    ");
            __builder.OpenElement(47, "button");
            __builder.AddAttribute(48, "type", "button");
            __builder.AddAttribute(49, "class", "btn btn-primary");
            __builder.AddAttribute(50, "onclick", Microsoft.AspNetCore.Components.EventCallback.Factory.Create<Microsoft.AspNetCore.Components.Web.MouseEventArgs>(this, 
#nullable restore
#line 28 "C:\P3\tarea9\Pages\Index.razor"
                                                                            volver

#line default
#line hidden
#nullable disable
            ));
            __builder.AddContent(51, "volver");
            __builder.CloseElement();
            __builder.AddMarkupContent(52, "\r\n\r\n                ");
            __builder.CloseElement();
            __builder.AddMarkupContent(53, "\r\n                <div class=\"col\"></div>\r\n            ");
            __builder.CloseElement();
            __builder.AddMarkupContent(54, "\r\n\r\n\r\n        ");
            __builder.CloseElement();
            __builder.AddMarkupContent(55, "\r\n    ");
            __builder.CloseElement();
            __builder.AddMarkupContent(56, "\r\n");
#nullable restore
#line 37 "C:\P3\tarea9\Pages\Index.razor"
}
else
{

#line default
#line hidden
#nullable disable
            __builder.AddContent(57, "    ");
            __builder.OpenElement(58, "form");
            __builder.AddMarkupContent(59, "\r\n        ");
            __builder.OpenElement(60, "div");
            __builder.AddAttribute(61, "class", "container");
            __builder.AddMarkupContent(62, "\r\n\r\n            ");
            __builder.OpenElement(63, "div");
            __builder.AddAttribute(64, "class", "row mt-5");
            __builder.AddAttribute(65, "style", "text-align:center;");
            __builder.AddMarkupContent(66, "\r\n                <div class=\"col\"></div>\r\n                ");
            __builder.OpenElement(67, "div");
            __builder.AddAttribute(68, "class", "col");
            __builder.AddMarkupContent(69, "\r\n                    ");
            __builder.OpenElement(70, "div");
            __builder.AddAttribute(71, "class", "form-group");
            __builder.AddMarkupContent(72, "\r\n                        ");
            __builder.AddMarkupContent(73, "<label for=\"exampleInputEmail1\">Nombre</label>\r\n                        ");
            __builder.OpenElement(74, "input");
            __builder.AddAttribute(75, "type", "text");
            __builder.AddAttribute(76, "class", "form-control");
            __builder.AddAttribute(77, "id", "exampleInputEmail1");
            __builder.AddAttribute(78, "aria-describedby", "emailHelp");
            __builder.AddAttribute(79, "style", "width: 100%;");
            __builder.AddAttribute(80, "value", Microsoft.AspNetCore.Components.BindConverter.FormatValue(
#nullable restore
#line 49 "C:\P3\tarea9\Pages\Index.razor"
                                      LogNombre

#line default
#line hidden
#nullable disable
            ));
            __builder.AddAttribute(81, "onchange", Microsoft.AspNetCore.Components.EventCallback.Factory.CreateBinder(this, __value => LogNombre = __value, LogNombre));
            __builder.SetUpdatesAttributeName("value");
            __builder.CloseElement();
            __builder.AddMarkupContent(82, "\r\n                        ");
            __builder.AddMarkupContent(83, "<small id=\"emailHelp\" class=\"form-text text-muted\">Aqui ingresara su Nombre de usuario</small>\r\n                    ");
            __builder.CloseElement();
            __builder.AddMarkupContent(84, "\r\n                    ");
            __builder.OpenElement(85, "div");
            __builder.AddAttribute(86, "class", "form-group");
            __builder.AddMarkupContent(87, "\r\n                        ");
            __builder.AddMarkupContent(88, "<label for=\"exampleInputPassword1\">Contraseña</label>\r\n                        ");
            __builder.OpenElement(89, "input");
            __builder.AddAttribute(90, "type", "password");
            __builder.AddAttribute(91, "class", "form-control");
            __builder.AddAttribute(92, "id", "exampleInputPassword1");
            __builder.AddAttribute(93, "style", "width: 100%;");
            __builder.AddAttribute(94, "value", Microsoft.AspNetCore.Components.BindConverter.FormatValue(
#nullable restore
#line 55 "C:\P3\tarea9\Pages\Index.razor"
                                     Logpassw

#line default
#line hidden
#nullable disable
            ));
            __builder.AddAttribute(95, "onchange", Microsoft.AspNetCore.Components.EventCallback.Factory.CreateBinder(this, __value => Logpassw = __value, Logpassw));
            __builder.SetUpdatesAttributeName("value");
            __builder.CloseElement();
            __builder.AddMarkupContent(96, "\r\n                        ");
            __builder.OpenElement(97, "a");
            __builder.AddAttribute(98, "href", "");
            __builder.AddAttribute(99, "onclick", Microsoft.AspNetCore.Components.EventCallback.Factory.Create<Microsoft.AspNetCore.Components.Web.MouseEventArgs>(this, 
#nullable restore
#line 56 "C:\P3\tarea9\Pages\Index.razor"
                                             registrar

#line default
#line hidden
#nullable disable
            ));
            __builder.AddMarkupContent(100, "Si no te has registrado, click\r\n                            aqui");
            __builder.CloseElement();
            __builder.AddMarkupContent(101, "\r\n                    ");
            __builder.CloseElement();
            __builder.AddMarkupContent(102, "\r\n\r\n                    ");
            __builder.OpenElement(103, "button");
            __builder.AddAttribute(104, "type", "button");
            __builder.AddAttribute(105, "class", "btn btn-primary");
            __builder.AddAttribute(106, "onclick", Microsoft.AspNetCore.Components.EventCallback.Factory.Create<Microsoft.AspNetCore.Components.Web.MouseEventArgs>(this, 
#nullable restore
#line 60 "C:\P3\tarea9\Pages\Index.razor"
                                                                            verificar

#line default
#line hidden
#nullable disable
            ));
            __builder.AddContent(107, "Ingresar");
            __builder.CloseElement();
            __builder.AddMarkupContent(108, "\r\n\r\n                ");
            __builder.CloseElement();
            __builder.AddMarkupContent(109, "\r\n                <div class=\"col\"></div>\r\n            ");
            __builder.CloseElement();
            __builder.AddMarkupContent(110, "\r\n\r\n\r\n        ");
            __builder.CloseElement();
            __builder.AddMarkupContent(111, "\r\n    ");
            __builder.CloseElement();
            __builder.AddMarkupContent(112, "\r\n");
#nullable restore
#line 69 "C:\P3\tarea9\Pages\Index.razor"
}

#line default
#line hidden
#nullable disable
        }
        #pragma warning restore 1998
#nullable restore
#line 72 "C:\P3\tarea9\Pages\Index.razor"
 
    iglesiaContext db = new iglesiaContext();
    string Nombre { get; set; }
    string LogNombre { get; set; }
    string passw { get; set; }
    string Logpassw { get; set; }
    string cambia { get; set; }
    string t {get;set;}

    bool registro = false;
    bool entra = false;




    private void login()
    {
        db.Add(new User{
            UserName = Nombre,
            password = passw
        });
        db.SaveChanges();
        registro = false;
    }

    private void verificar()
    {
        var conf = db.Users.First();
        if(conf.UserName == LogNombre && conf.password == Logpassw)
        {
            navi.NavigateTo("menu");
        }
    }


    private void registrar()
    {
        registro = true;
    }
    private void volver()
    {
        registro = false;
    }




#line default
#line hidden
#nullable disable
        [global::Microsoft.AspNetCore.Components.InjectAttribute] private NavigationManager navi { get; set; }
    }
}
#pragma warning restore 1591
