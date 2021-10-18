//npm i --save-dev node-esapi
const ESAPI = require('node-esapi');

const patched = ESAPI.encoder().encodeForJavaScript('1);%20alert(2');
console.log(`http://localhost:80/xss/rule_3.php?xss=${patched}`)
