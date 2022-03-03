$(document).ready(function () { 
    const cat = getUrlParameter('cat');
    const cat_nav = '#faq-nav-' + cat + '-tab';  
    $(cat_nav).tab('show');
});    