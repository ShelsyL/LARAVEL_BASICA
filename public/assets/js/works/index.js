
// $(function(){
//
//   $(window).scroll(function(e) {
//       e.preventDefault();
//
//        if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
//            let offset = $('#works_list .col-md-4').length;
//            let limit = (typeof $(this).data('limit') !== typeof undefined && $(this).data('limit') !== false)? $(this).data('limit') : 6;
//
//              $.get($(this).data('url'),("works/ajax/more", {
//                  offset,
//                  limit: $(this).data('limit')
//              },function(reponse){
//                // Le PHP devrait retourner la vue complète à appender (li)
//            	  $('#works_list').append(reponse)
//                                .find('.col-md-4:nth-last-of-type(-n+'+offset+')')
//                                .addClass('col-sm-6 ftco-animated');
//              });
//        }
//   });
// });

//--------------------------------------------------------------------------------------

$(function(){

  // remove duplicate event. 2 -> 1
  $(window).unbind('scroll');

  $(window).scroll(function(e) {
      //e.preventDefault();

        // var message = "Info\n";
        //  message += " window.height =" + $(window).height() + "\n";
        //  message += " window.scrollTop =" + $(window).scrollTop() + "\n";
        //  message += " document.height =" + $(document).height() + "\n";
        // alert(message);

        // ($(window).height()  taille de la fenetre glissante
        // $(window).scrollTop()  nbr pixel descendu depuis le top
        // $(document).height() taille de la fenetre total
        if($(window).height() + $(window).scrollTop()  >  $(document).height() - 1) {
           let offset = $('#works_list .col-md-4').length;
           let limit = (typeof $(this).data('limit') !== typeof undefined && $(this).data('limit') !== false)? $(this).data('limit') : 6;
             $.get("works/ajax/more", {
                 offset,
                 limit: $(this).data('limit')
             },function(reponse){
               // Le PHP devrait retourner la vue complète à appender (li)
           	  $('#works_list').append(reponse)
                               .find('.col-md-4:nth-last-of-type(-n+'+offset+')');
             });
       }
  });
});
