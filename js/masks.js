//Remove Barra Invertida (\), Barra (/) e espaços vazios do texto
function noSlashes_js(value, input){

    value = value.toString();
    var mask = value.replace(/[\/\\ \t\r\n]/g, '');
    
    document.getElementById(input.id).value = mask;

}
