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
  ....
5. Can a cookie be changed by an attacker in the network ? justify  
  ....
6. Can a cookie be changed by an attacker in power of a JavaScript script in a page of the same origin ? Justify  
  ....
7. Can a cookie be changed by an attacker in power of JavaScript script in a page of a different origin ? Justify  
  ....
8. What are the parameters to set (on server side) for a cookie to be best protected from attackers? Justify. Do those parameters help protect the integrity of the value of the cookie?  
  ....  
9. What is the Content Security Policy and what is it useful for?    
  ....  
10. Why a random token in web pages can protect against CSRF attacks? What happens if the token is not random? What happens if the token is random but only stored in a cookie?  
  ....
