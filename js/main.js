document.addEventListener('DOMContentLoaded', function(){
    
    const img = document.querySelector('#img');

    var breed = getBreed();
    var url ;
    img.setAttribute('src', getImg(breed));
 

    function getBreed(){
        var br;
        const xhr = new XMLHttpRequest;
        xhr.open('GET', 'https://dog.ceo/api/breeds/list/all',false);
        xhr.onload = function(e){
            if(xhr.status === 200){
                var respuesta = JSON.parse(xhr.responseText);        
                var breeds = Array();
                for (var breed in respuesta.message){
                    breeds.push(breed);
                }
                n = (Math.random() * (breeds.length - 0))
                n = Math.round(n);   
                br = breeds[n];                
            }
        }
        xhr.send(null); 
        return br;
    }


    function getImg(br){
        var url;
        const xhr = new XMLHttpRequest;
        xhr.open('GET',  'https://dog.ceo/api/breed/' + br + '/images/random',false);
        xhr.onload = function(e){
            if (xhr.status === 200){
                var respuesta = JSON.parse(xhr.responseText);
                 url =  respuesta.message;
            }

        }   
        xhr.send(null);
        return url;
        
    }



});