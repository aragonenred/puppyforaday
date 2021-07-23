
var url;
var breed = getBreed();
getImg(breed);

function getImg(breed){

    var xhr = new XMLHttpRequest;
    xhr.open('GET',  'https://dog.ceo/api/breed/' + breed + '/images/random');
    xhr.onreadystatechange = function(e){
        if (xhr.status == 200){
            var respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta.message);
            console.log('iii');
        }

    }
    xhr.send(null);

}

function getBreed(){
    var br;
    var hxr = new XMLHttpRequest;
    hxr.open('GET', 'https://dog.ceo/api/breeds/list/all',false);
    hxr.onreadystatechange = function(e){
        if(hxr.status==200){
            var respuesta = JSON.parse(hxr.responseText);
            
             var breeds = Array();
             for (var breed in respuesta.message){
                 breeds.push(breed);
             }
             num = (Math.random() * (breeds.length - 0))
             num = Math.round(num);   
             br = breeds[num];
             
             
        }
    }
    hxr.send(null);    
    return br;
}


