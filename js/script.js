$(document).ready(function(){
    resize();
    $('#clientTypes').change(function(){
        var val = $(this).val();
        $.post('form.php', { type: val }, function(data){
            $('.formContainer').html("<table>" +
                "<tbody>" + data +
                "<tr><td></td><td><button type='submit'>Отправить</button><button class='reset' type='reset'>Очистить</button></td></tr></tbody></table>");
        });
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
    }
    if($(window).width() > 1050)
    {
        $('.part1').css('float','left');
        $('.part2').css('float','right');
    }
}
