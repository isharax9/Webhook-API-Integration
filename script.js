let merchantSecret  = 'NDI5MTcyMjU0OTEwNDUxNDg1MjgyMjM1Mjk2MzQ4Mzk1MDc3OTM4NA==';
let merchantId      = '1224207';
let orderId         = '12345';
let amount          = 1000;
let hashedSecret    = md5(merchantSecret).toString().toUpperCase();
let amountFormated  = parseFloat( amount ).toLocaleString( 'en-us', { minimumFractionDigits : 2 } ).replaceAll(',', '');
let currency        = 'LKR';
let hash            = md5(merchantId + orderId + amountFormated + currency + hashedSecret).toString().toUpperCase();

