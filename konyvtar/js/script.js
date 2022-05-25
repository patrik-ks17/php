$(document).ready(function(){
    szamlalok = {}
    elemek = $('#kategoriak').find('input');
    for (elem of elemek){
        szamlalok[elem['id']] = 0;        
    }

    if (localStorage.getItem("panel")=="closed") {
        $('#kategoria').addClass('rejtett');
        $('.rejtett').css('width','0');
    }
        
    $('#panel-zaro').click(function(){
        $('#kategoria').animate({
            width: "0"
        }, 700, function(){
            $('#kategoria').addClass('rejtett');
            localStorage.setItem('panel','closed');
        });
    });

    $('#panel-nyito').click(function(){
        $('#kategoria').removeClass('rejtett');
        $('#kategoria').animate({
            width: "25%"
        }, 700, function(){
            localStorage.setItem('panel','opened');
        });
    });

    $('#kereso').click(function(){
        $('#megse').show();
    });
    $('#megse').click(function(){
        $(this).hide();
    });
    // $('#fantasy').click(function(){
    //     if($('#fantasy').prop('checked')) {
    //         fantasyDb++;        
    //         sessionStorage.setItem('fantasy',fantasyDb);
    //         $('#fantasy_lbl').text("Fantasy (" + fantasyDb + ")");
    //     }       
    // });
    // $('#motivacios').click(function(){
    //     if($('#motivacios').prop('checked')) {
    //         motivaciosDb++;        
    //         sessionStorage.setItem('motivacios',motivaciosDb);
    //         $('#motivacios_lbl').text("Motivációs (" + motivaciosDb + ")");
    //     }       
    // });
    // $('#regeny').click(function(){
    //     if($('#regeny').prop('checked')) {
    //         regenyDb++;        
    //         sessionStorage.setItem('regeny',regenyDb);
    //         $('#regeny_lbl').text("Regény (" + regenyDb + ")");
    //     }       
    // });
    $('#kategoriak').on('click', 'input', function(event){
        //azonosito = $(event.target).prop('id');
        if(event.target['checked']){
            const azonosito = event.target['id'];
            szamlalok[azonosito]++;
            const cimke = '#' + azonosito + '_lbl'
            const kiirando = $(event.target).data('szoveg')
            sessionStorage.setItem(azonosito,szamlalok[azonosito]);
            $(cimke).text(`${kiirando} (${szamlalok[azonosito]})`);
        }
    });
});