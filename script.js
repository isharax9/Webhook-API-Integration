let merchantSecret  = 'MjA2NjE5MTYyMTM5NTQ0NzQ0NDQzODE0Mjc0NjY4MjQ3NDExMzk3Ng==';
let merchantId      = '1224207';
let orderId         = '12345';
let amount          = 1000;
let hashedSecret    = md5(merchantSecret).toString().toUpperCase();
let amountFormated  = parseFloat( amount ).toLocaleString( 'en-us', { minimumFractionDigits : 2 } ).replaceAll(',', '');
let currency        = 'LKR';
let hash            = md5(merchantId + orderId + amountFormated + currency + hashedSecret).toString().toUpperCase();



