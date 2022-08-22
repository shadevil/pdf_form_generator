$(document).ready(function(){
    resize();
    $('#clientTypes').change(function(){
        var val = $(this).val();
        var data;
        $.post('form.php', { type: val }, function(data){
            $('.formContainer').html("<table>" +
                "<tbody>" + data +
                "<tr><td></td><td><button type='submit'>Отправить</button><button class='reset' type='reset'>Очистить</button></td></tr></tbody></table>");
        });
        // $('#sendform').submit()(function (){
        //     $('form#sendform :input').each(function () {
        //         data.push($(this));
        //     })
        //
        // })
    });
    $(window).resize(function () {
        resize();

    })
});

function resize() {
    if($(window).width() < 1050)
    {
        $('.part1').css('float','none');
        $('.part2').css('float','none');
        // $('.part1').css('max-width', '100%');
        // $('.part2').css('max-width', '100%');
        // $('.part1').css('height', 'auto');
        // $('.part2').css('height', 'auto');
    }
    if($(window).width() > 1050)
    {
        $('.part1').css('float','left');
        $('.part2').css('float','right');
        // $('.part1').css('max-width', '');
        // $('.part2').css('max-width', '');
        // $('.part1').css('height', '');
        // $('.part2').css('height', '');
    }
}
