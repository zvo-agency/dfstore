var devOrProd;
var apiServerUrl;

devOrProd = 'dev';

if(devOrProd === 'dev') {
  apiServerUrl = 'http://localhost';
} else if(devOrProd === 'prod') {
  apiServerUrl = 'http://dfstore-frontend.lalajs.com'; 
}
