//--
// load.js - Script de chargement de Community Script Project
// Contributeurs :
// > Nuri Yuri
// > Folaefolc :p
//   document.body.onload
//   dce
//   qsd
//   load_settings <- En cours...
//   load_modal
//   load_script
//   extract_url_params
//--

//---
// Variables globales
//---
var CSP_Body = {};
var CSP_CopyRights = {};
var CSP_Logo = {};
var CSP_UserSettings = {};
var CSP_CurPath = {};
var BS_Types = ["default", "primary", "success", "info", "warning", "danger"];

//---
// Fonction de déclenchement du chargement de CSP
//---
document.body.onload = function() {
    CSP_Body = dce("body");
    CSP_CopyRights = dce("copyrights");
    CSP_Logo = dce("logo");
    CSP_CurPath = dce("breadcumb-cur-path");
    
    if (!load_settings())
        return;
    
    var array_current_path = extract_url_params();
    
    if (array_current_path.indexOf("forum") >= 0)
    {
        dce("navbar-forum-lnk").setAttribute("class", "active");
        dce("navbar-accueil-lnk").removeAttribute("class");
        dce("navbar-starters-kit-dropdown").removeAttribute("class");
    }
    else if (array_current_path.indexOf("accueil") >= 0 || array_current_path.length == 0)
    {
        dce("navbar-accueil-lnk").setAttribute("class", "active");
        dce("navbar-forum-lnk").removeAttribute("class");
        dce("navbar-starters-kit-dropdown").removeAttribute("class");
    }
    else if (array_current_path.indexOf("starters-kit") >= 0)
    {
        dce("navbar-accueil-lnk").removeAttribute("class");
        dce("navbar-forum-lnk").removeAttribute("class");
        dce("navbar-starters-kit-dropdown").setAttribute("class", "active");
    }
    
    // faire les disjonctions de cas pour modifier le CSP_CurPath (breadcumb-cur-path)
};

//---
// extract_url_params : Extrait les paramètres de l'url et les renvoie sous forme d'array
//---
function extract_url_params() {
    var t = location.search.substring(8).split('&'),
        f = [];
    for (var i = 0; i < t.length; i++) {
        if (t[i] == true)
            f.push(t[i]);
    }
    return f;
}

//---
// load_settings : Chargement des paramètres de l'utilisateur
//---
function load_settings()
{
    //> Vérification du stockage local
    if(typeof(localStorage) === "undefined")
    {
        load_modal("ls_error_mod");
        load_script("display.panel", function() {
            CSP_Body.removeChild(CSP_CopyRights);
            display_panel("<strong>Impossible de charger CSP...</strong>", null, "danger", dce("initial_content") || CSP_Body);
            CSP_Body.appendChild(CSP_CopyRights);
        });
        return false;
    }
    else
    {
        CSP_Body.removeChild(dce("initial_content"));
        return true;
    }
}

//---
// load_modal : Fonction de chargement d'un modal
//---
function load_modal(id)
{
    var el;
    
    if(dce(id))
    {
        $("#"+id).modal("show");
        return;
    }
    else
    {
        var request = new XMLHttpRequest();
        request.open("GET", "./modales/"+id+".html", true);
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                el = document.createElement("div");
                el.id = id;
                el.setAttribute("role", "dialog");
                el.setAttribute("tabindex", "-1");
                el.setAttribute("aria-labelledby", id+"Label");
                el.setAttribute("class", "modal fade");
                el.innerHTML = request.responseText;
                document.body.appendChild(el);
                
                $("#"+id).modal("show");
            }
        }
        
        request.send();
    }
}

//---
// load_script : Chargement d'un script de CSP
//---
function load_script(script_name, onload) 
{
  var script = qsd("script");
  script.src = script_name+".js"
  script.type = "text/javascript";
  script.onload = onload;
  document.head.appendChild(script);
}

//---
// dce : raccourci de document.getElementById()
//---
function dce(id) {return document.getElementById(id);}

//---
// qsd : raccourci de document.createElement()
//---

function qsd(type) {return document.createElement(type);}