let theme = document.querySelectorAll('.theme');
for (i = 0; i < theme.length; i++) {
    theme[i].addEventListener('click', handler_theme_onclick, false);
}

function handler_theme_onclick () {
    //var das = '<?php echo $gas ?>'

    let data01 = document.querySelector('.data01').getAttribute('data-attr');
    let s1 = data01.split('|');
    var s2=s1.indexOf(this.innerHTML);

    console.log(data01);
    // document.location.href = 'links/'+this.innerHTML;
   document.location.href = 'links/'+s2;
}
