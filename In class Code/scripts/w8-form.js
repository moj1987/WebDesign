// action="url"
//GET
//POST
//Target: __self or __blank
//type = text
//size = 25
function validateCoord(lat, lng){
    if(lat>90 || lat <-90) {return false;}
    if(lng>90 || lng <-90) {return false;}
    return true;
    };

function toKebab(str){
    str = str.trim();
   str = str.replace(".", " ");
   str = str.replace(/\s+/g, '-').toUpperCase();
};