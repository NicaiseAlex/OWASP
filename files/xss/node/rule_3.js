const ESAPI = require('node-esapi');

const patched = ESAPI.encoder().encodeForJavaScript('\'Attack 1\');%20alert(\' Attack 2\'');
console.log(`http://localhost:80/xss/rule_3.php?xss=${patched}`)