Interpr�tation du lien d'acc�s � CSP
====================================

Le lien d'acc�s � CSP suivera toujours une logique assez simple : action => donn�es relatives

Voici les diff�rentes actions avec les donn�es qui doivent/peuvent �tre transmises
* action non d�finie ou action=index
  * Affichage de l'index du site de CSP avec les news et le tralala

* action=forum
  * Affichage de l'index du forum
  * forum=catid
    * Affichage plus sp�cifique o� seul la cat�gorie concern�e est charg�e
    * newmessages (pr�sence de la variable)
      * Affiche uniquement les nouveaux messages du forum concern�e
  * newmessages (pr�sence de la variable)
    * Affiche uniquement les nouveaux message sur le forum

* action=notifications
  * Affiche un rapport d�taill� des notifications (citations/r�ponses/messagesperso/avertissement)
  * notifications=quotes
    * Affiche uniquement les citations
  * notifications=replies
    * Affiche uniquement les r�ponses
  * notifications=personnalmessages
    * Affiche uniquement les notifications relatives aux messages priv�s.
  * notifications=warnings
    * Affiche uniquement les avertissements

_**Note** : Les notifications sont automatiquement charg�es toute les 5 minutes (storage local: `date - last_notification > 3000s`)_

* action=post
  * category=catid
    * Affiche l'interface de post d'un message dans une cat�gorie
  * topic=tid
    * Affiche l'interface de post dans un sujet
  * message=mid
    * Affiche l'interface d'�dition d'un message

* action=viewtopic&topic=tid
  * Affiche un sujet
  * start=page
    * Affiche la bonne page du sujet (calcul� en fonction du MessageNumber???)
  * message=messageid
    * Affiche principalement le message concern� (et calcule la page en fonction de ce param�tre)
  * reports (pr�sence)
    * Affiche les messages rapport�s aux mod�rateurs avec les d�tails

* action=viewarticle&article=aid
  * Affiche un article en fonction de son id
  * viewcomments (pr�sence)
    * Affiche les commentaires (si l'article d�coule d'un sujet)

* action=conversations
  * Affiche l'interface des conversations (dernier message + liste)
  * page=pagenumber
    * Affiche la liste des conversations � la page pagenumber
  * conversation=cid
    * Affiche le contenu de la conversation cid
    * reply (pr�sence)
      * Affiche l'interface de r�ponse � une conversation

* action=chat
  * Affiche le chat (si permi)

- - -
_**Petite note** : Syst�me de citation : messageid, startphrase, endphrase (Pour �viter les manipulations) => Emp�cher les messages d'�tre fondamentalement modifi�s (unit� de sens)_
