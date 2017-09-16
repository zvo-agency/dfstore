var devOrProd;
var apiServerUrl;

devOrProd = 'prod';

if(devOrProd === 'dev') {
  apiServerUrl = 'http://localhost';
} else if(devOrProd === 'prod') {
  apiServerUrl = 'http://dfstore-frontend.lalajs.com'; 
}
