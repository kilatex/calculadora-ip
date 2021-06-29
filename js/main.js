
$(document).ready(function(){


    $('#btn-calcular').click(function(){

        calculo();
    });

    function calculo(){
        var adressp1 = parseInt($('#first').val());
        var adressp1Binary = adressp1.toString(2);
    
        var adressp2 = parseInt($('#second').val());
        var adressp2Binary = adressp2.toString(2);
    
        var adressp3 = parseInt($('#third').val());
        var adressp3Binary = adressp3.toString(2);
    
        var adressp4 = parseInt($('#fourth').val());
        var adressp4Binary = adressp4.toString(2);
    
        var subnet = parseInt($('#subnet'));
        var adress = adressp1+'.'+adressp2+'.'+adressp3+'.'+adressp4;

        if(adressp1 >=0 && adressp1 <=127){
            var typeClass = 'Clase A';
            var netMask = '255.0.0.0 = 8'; 
            var network = adressp1+'.0.0.0';
            var hostMin= adressp1+'.0.0.1';
            var hostMax =  adressp1+'.255.255.254';
            var broadcast =  adressp1+'.255.255.255';
        }   


        if(adressp1 >127 && adressp1 <=191){
            var typeClass = 'Clase B';
            var netMask = '255.255.0.0 = 16'; 
            var network = adressp1+'.'+adressp2+'.0.0';
            var hostMin= adressp1+'.'+adressp2+'.0.1';
            var hostMax =  adressp1+'.'+adressp2+'.255.254';
            var broadcast =  adressp1+'.'+adressp2+'.255.255';
        }   

        if(adressp1 >191 && adressp1 <=223){
            var typeClass = 'Clase C';
            var netMask = '255.255.255.0 = 24'; 
            var network = adressp1+'.'+adressp2+'.'+adressp3+'.0';
            var hostMin= adressp1+'.'+adressp2+'.'+adressp3+'.1';
            var hostMax =  adressp1+'.'+adressp2+'.'+adressp3+'.254';
            var broadcast =  adressp1+'.'+adressp2+'.'+adressp3+'.255';
        }   

        var info = [typeClass,netMask,network,hostMin,hostMax,broadcast,subnet,adress];

        export const messi = info;
        
        alert('MESSI');
    
    
      
    }
    
    
});

