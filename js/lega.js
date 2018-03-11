
//Két string közötti substring visszaadása
function StringBetween(str, str1, str2, sorveg_hossza) {
    //sorveg_hossza = 1 ha LF, 2 ha CRLF
    var pos1 = str.indexOf(str1, 0);
    var honnan = pos1 + str1.length + sorveg_hossza;
    var pos2 = str.indexOf(str2, honnan) - 1 - sorveg_hossza;
    return str.substring( honnan, pos2 );
}

