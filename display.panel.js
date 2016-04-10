//---
// display.panel.js - Script d'affichage de panels
// Contributeurs :
// > Nuri Yuri
//   display_panel
//---

//---
// display_panel : Affichage d'un panel
//---
function display_panel(header, content, type, where)
{
  if(BS_Types.indexOf(type) < 0)
    type = BS_Types[0];
  var panel = document.createElement("div");
  var panel_obj;
  panel.className = "panel panel-"+type;
  if(header != null)
  {
    panel_obj = document.createElement("div");
    panel_obj.className = "panel-heading";
    if(typeof(header) === "string")
      panel_obj.innerHTML = header;
    else
      panel_obj.appendChild(header);
    panel.appendChild(panel_obj);
  }
  if(content != null)
  {
    panel_obj = document.createElement("div");
    panel_obj.className = "panel-body";
    if(typeof(content) === "string")
      panel_obj.innerHTML = content;
    else
      panel_obj.appendChild(content);
    panel.appendChild(panel_obj);
  }
  if(where != null)
    where.appendChild(panel);
  return panel;
}
