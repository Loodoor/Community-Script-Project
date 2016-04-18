//--
// load.js - Script de chargement de Community Script Project
// Contributeurs :
// > Nuri Yuri
// > Folaefolc :p
//   document.body.onload <- En cours
//   dce
//   qsd
//   load_settings <- En cours...
//   load_modal
//   load_script
//   extract_url_params
//   set_as_active
//   create_breadcumb
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

//--
// set_as_active : Met en actif un élément de la main barre
//--
function set_as_active(id)
{
    if (id == "forum")
    {
        dce("navbar-forum-lnk").setAttribute("class", "active");
        dce("navbar-accueil-lnk").removeAttribute("class");
        dce("navbar-starters-kit-dropdown").removeAttribute("class");
    }
    else if (id == "accueil")
    {
        dce("navbar-accueil-lnk").setAttribute("class", "active");
        dce("navbar-forum-lnk").removeAttribute("class");
        dce("navbar-starters-kit-dropdown").removeAttribute("class");
    }
    else if (id == "starters-kits")
    {
        dce("navbar-accueil-lnk").removeAttribute("class");
        dce("navbar-forum-lnk").removeAttribute("class");
        dce("navbar-starters-kit-dropdown").setAttribute("class", "active");
    }
}

//--
// create_breadcumb : Créer le breadcumb (son contenu) avec le chemin actuel
//--
function create_breadcumb()
{
    var array_current_path = extract_url_params();
    var objet = qsd("li");
    objet.innerHTML = "<a href='index.php?action=accueil'>Accueil</a>";
    if (array_current_path.size == 1 || array_current_path.size == 0)
        objet.setAttribute("class", "active");
    CSP_CurPath.appendChild(objet);
    
    if (array_current_path.has("action") && array_current_path.get("action") === "forum")
    {
        set_as_active("forum");
        
        objet2 = qsd("li");
        objet2.innerHTML = "<a href='index.php?action=forum'>Forum</a>";
        if (array_current_path.size == 1)
            objet2.setAttribute("class", "active");
        CSP_CurPath.appendChild(objet2);
        
        if (array_current_path.size > 1)
        {
            objet3 = qsd("li");
            
            var categorie_name = "";
            if (array_current_path.get('forum') == 0)
                categorie_name = "Catégorie 1";
            if (array_current_path.get('forum') == 1)
                categorie_name = "Catégorie 2";
            if (array_current_path.get('forum') == 2)
                categorie_name = "Catégorie 3";
            if (array_current_path.get('forum') == 3)
                categorie_name = "Catégorie 4";
            
            objet3.innerHTML = "<a href='index.php?action=forum&forum="+array_current_path.get('forum')+"'>"+categorie_name+"</a>";
            objet3.setAttribute("class", "active");
            CSP_CurPath.appendChild(objet3);
        }
    }
    else if (array_current_path.has("action") && array_current_path.get("action") === "post")
    {
        set_as_active("forum");
        
        objet2 = qsd("li");
        objet2.innerHTML = "<a href='index.php?action=forum'>Forum</a>";
        CSP_CurPath.appendChild(objet2);
        
        objet3 = qsd("li");
        if (array_current_path.has("message"))
            objet3.innerHTML = "<a href='index.php"+location.search+"'>Editer un message</a>";
        if (array_current_path.has("topic"))
            objet3.innerHTML = "<a href='index.php"+location.search+"'>Poster une réponse</a>";
        if (array_current_path.has("category"))
            objet3.innerHTML = "<a href='index.php"+location.search+"'>Créer un nouveau topic</a>";
        objet3.setAttribute("class", "active");
        CSP_CurPath.appendChild(objet3);
    }
    else if (array_current_path.has("action") && array_current_path.get("action") === "viewtopic")
    {
        set_as_active("forum");
        
        objet2 = qsd("li");
        objet2.innerHTML = "<a href='index.php?action=forum'>Forum</a>";
        CSP_CurPath.appendChild(objet2);
        
        objet3 = qsd("li");
        objet3.innerHTML = "<a href='index.php?action=viewtopic&topic="+array_current_path.get("topic")+"'>Nom du topic ici</a>";
        if (!array_current_path.has("message"))
            objet3.setAttribute("class", "active");
        CSP_CurPath.appendChild(objet3);
        
        if (array_current_path.has("message"))
        {
            objet4 = qsd("li");
            objet4.innerHTML = "<a href='index.php"+location.search+"'>Message de pseudo ici</a>";
            objet4.setAttribute("class", "active");
            CSP_CurPath.append(objet4);
        }
        if (array_current_path.has("variables") && array_current_path.get("variables").indexOf("reports") > -1)
        {
            objet5 = qsd("li");
            objet5.innerHTML = "<a href='index.php"+location.search+"'>Messages reportés sur ce topic</a>";
            objet5.setAttribute("class", "active");
            CSP_CurPath.appendChild(objet5);
        }
    }
    else if (array_current_path.has("action") && array_current_path.get("action") === "accueil" || array_current_path.size == 0)
    {
        set_as_active("accueil");
    }
    else if (array_current_path.has("action") && array_current_path.get("action") === "viewarticle")
    {
        set_as_active("accueil");
        
        objet2 = qsd("li");
        objet2.innerHTML = "<a href='index.php?action=viewarticle'>Articles</a>";
        if (!array_current_path.has("article"))
            objet2.setAttribute("class", "active");
        CSP_CurPath.appendChild(objet2);
        
        if (array_current_path.has("article"))
        {
            objet3 = qsd("li");
            objet3.innerHTML = "<a href='index.php"+location.search+"'>Nom de l'article ici</a>";
            if (!array_current_path.has("variables"))
                objet3.setAttribute("class", "active");
            CSP_CurPath.appendChild(objet3);
            
            if (array_current_path.has("variables") && array_current_path.get("variables").indexOf("viewcomments") > -1)
            {
                objet4 = qsd("li");
                objet4.innerHTML = "<a href='index.php"+location.search+"'>Commentaire de l'article</a>";
                objet4.setAttribute("class", "active");
                CSP_CurPath.appendChild(objet4);
            }
        }
    }
    else if (array_current_path.has("action") && array_current_path.get("action") === "chat")
    {
        set_as_active("accueil");
        
        objet2 = qsd("li");
        objet2.innerHTML = "<a href='index.php?action=chat'>Chat</a>";
        CSP_CurPath.appendChild(objet2);
    }
    else if (array_current_path.has("action") && array_current_path.get("action") === "starters-kits")
    {
        set_as_active("starters-kits");
        
        objet2 = qsd("li");
        objet2.innerHTML = "<a href='index.php?action=starters-kits'>Starters-Kits</a>";
        if (array_current_path.size == 1)
            objet2.setAttribute("class", "active");
        CSP_CurPath.appendChild(objet2);
        
        if (array_current_path.size > 1)
        {
            objet3 = qsd("li");
            
            var skname = "";
            if (array_current_path.get('v') == 1)
                skname = "Pokémon Script Project 0.7";
            if (array_current_path.get('v') == 2)
                skname = "Pokémon Script Project 4G+";
            if (array_current_path.get('v') == 3)
                skname = "Pokémon Script Project DS";
            if (array_current_path.get('v') == 4)
                skname = "Pokémon SDK";
            if (array_current_path.get('v') == 5)
                skname = "Donjon Mystère Ace - DMA";
            
            objet3.innerHTML = "<a href='index.php"+location.search+"'>"+skname+"</a>";
            if (array_current_path.size == 2)
                objet3.setAttribute("class", "active");
            CSP_CurPath.setAttribute("class", "active");
        }
    }
}

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
    
    create_breadcumb();
};

//---
// extract_url_params : Extrait les paramètres de l'url et les renvoie sous forme d'array
//---
function extract_url_params() {
    var t = location.search.substring(1).split('&'),
        f = new Map(),
        v = [];
    
    if (t)
    {
        for (var i=0; i < t.length; i++)
        {
            var s = t[i].split(';');
            var x = t[i].split('=');
            
            if (s != true)
                f.set(x[0], x[1]);
            else
            {
                if (!f.has("variables"))
                {
                    f.set("variables") = s;
                }
                else
                {
                    var last = f.get("variables");
                    for (var k=0; k < s.length; k++)
                        last.push(s[k]);
                    f.set("variables") = last;
                }
            }
        }
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