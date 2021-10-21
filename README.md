# OWASP

https://docs.google.com/document/d/1xbntJplouXmZzvPfukPiyQiGIrma8pyx8gXMqvbJqGg/edit?usp=sharing

Same Origin Policy : Politique de sécurité, implémenté du cotès client et permet de controler l'accès au ressources (DOM (rpz de l'html dans la mémoire JavaScript ou de primitve qui permette d'accéder ou de lire les données de l'arbre))
  
  
1. Explain what are the component of the following URL (their name and usage): http://www.host.com:81/a/b/c.html?user=Alice&year=2016#p2  
Protocol http  
Le domain du site = host.com avec le port 81  
Le chemin vers la ressource /a/b/c.html  
Valeur intégré dans l'url user=Alice et year=2016  
#p2 représente le fragment (permet de pointer vers un endroit de la page par exemple)  
  
2. What is an origin in the Same Origin Policy ?  
composants : domaine, port, chemin
  
3. How to protect a web page using the Same Origin Policy  
Avec un <iframe src="http://a.com/a.html"> </iframe> pour cette exemple il faut que l'url de l'iframe soit identique a celui de l'url. 
Origine de cookie : domain, chemin et aussi si le cookie est sucurisée ou non.
  
4. Can an http breader be changed by an attacker in the network ? Justify  
Oui, car tout est en claire, rien n'est crypté. On peut le modifier avec wireshark par exemple.

5. Can a cookie be changed by an attacker in the network ? justify  
Oui, avec setcookie(same name, new value, etc ...) et à condition qu'il ne soit pas protégé par httponly ou samesite:strict (ex : exo4)  

6. Can a cookie be changed by an attacker in power of a JavaScript script in a page of the same origin ? Justify  
Oui on peut, si on met un script avec src=gadget.js par exemple et que le gadget fasse un setcookie.  

7. Can a cookie be changed by an attacker in power of JavaScript script in a page of a different origin ? Justify  
Oui on peut aussi avec la même façon si le gadget est sur un origine différente mais cela implique de ne pas avoir de protection comme un iframe par exemple.  

8. What are the parameters to set (on server side) for a cookie to be best protected from attackers? Justify. Do those parameters help protect the integrity of the value of the cookie?  
 On peut le mettre en samesite:strict , en httponly et en secure.  
Httponly permet de mettre le cookie dans une zone mémoire différente que celle de javascript : un script ne peut pas récuperer ou modifier sa valeur.  
Samesite:strict permet de bloquer les envoies de cookies vers des origines différentes : cela protège de fuite d'informations et octroie une protection contre les requêtes forgées d'une autre origine.  
secure permet que l'envoie d'un cookie se fasse à travers une connexion HTTPS (SSL/TLS). On se défend contre une attaque "Man-in-the-middle" qui pourrait prendre le sessionID en examinant le web traffic sinon.  
On peut aussi modifier les domain et path attributs pour ne pas les laisser trop permissifs : un cookie pourrait alors être intercepté/redirigé.   
9. What is the Content Security Policy and what is it useful for?    
C'est dans le header de la réponse http. On peut restreindre l'origine du contenu de la page web à une liste de site que l'on a pré définis / autorisés (comme une white list de scripts).  
On peut se prémunir contre l'injection de code par exemple et Cros Site Scripting =XSS.10.  
Why a random token in web pages can protect against CSRF attacks? What happens if the token is not random? What happens if the token is random but only stored in a cookie?  
CSRF = cross site request forgery : prendre le controle d'une session pour lancer des commandes non autorizées.  
Le token permet de créer un lien entre les pages pour ne pas avoir une mauvaise requete qui tombe.
Si le token est pas random on peut réutiliser un token de quelqu'un pour charger ses informations par exemples.
????
