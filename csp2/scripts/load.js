//--
// load.js - Script de chargement de Community Script Project
// Contributeurs :
// > Nuri Yuri
//   document.body.onload
//   dce
//   qsd
//   load_settings <- En cours...
//   load_modal
//   load_script
//--

//---
// Variables globales
//---
var CSP_Body = {};
var CSP_CopyRights = {};
var CSP_Logo = {};
var CSP_UserSettings = {};
var BS_Types = ["default", "primary", "success", "info", "warning", "danger"];

//---
// Fonction de déclenchement du chargement de CSP
//---
document.body.onload = function() {
    CSP_Body = dce("body");
    CSP_CopyRights = dce("copyrights");
    CSP_Logo = dce("logo");
    
    if (!load_settings())
        return;
};

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