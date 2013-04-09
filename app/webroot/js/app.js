;
(function ($, window, undefined) {
    'use strict';

    var $doc = $(document),
    Modernizr = window.Modernizr;

    $(document).ready(function() {
        $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
        $.fn.foundationButtons          ? $doc.foundationButtons() : null;
        $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
        $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
        $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
        $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
        $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
        $.fn.foundationTabs             ? $doc.foundationTabs({
            callback : $.foundation.customForms.appendCustomMarkup
        }) : null;
        $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
        $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
        $.fn.foundationClearing         ? $doc.foundationClearing() : null;

        $.fn.placeholder                ? $('input, textarea').placeholder() : null;
    });

    // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
    // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
    // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
    // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
    // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

    // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
    if (Modernizr.touch && !window.location.hash) {
        $(window).load(function () {
            setTimeout(function () {
                window.scrollTo(0, 1);
            }, 0);
        });
    }




})(jQuery, this);

function ajax_menu_delete(id , path)
{
    $('#dialog-confirm').dialog({
        resizable: false,
        modal: false,
        title: 'Delete Item?',
        buttons: {
            "Delete": function() {
                $.post("/admin/menus/" + path + "/", {
                    id: id
                },
                function(data){
                    if(data > 0)
                    {
                        if(path == 'groupdelete' || path == 'delete')
                        {
                            window.location.href="/admin/menus";
                        }
                        else
                        {
                            window.location.href="/admin/menus/edit/"+data;
                        }
                    }

                }, 'json');
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
}

function ajax_event_delete(id , path)
{
    $('#dialog-confirm').dialog({
        resizable: false,
        modal: true,
        title: 'Delete Event?',
        buttons: {
            "Delete": function() {
                $.post("/admin/events/" + path + "/", {
                    id: id
                },
                function(data){
                    if(data )
                    {
                        window.location.href="/admin/events";
                    }

                }, 'json');
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
}


$(function()
{
    $('.eventDelete').click(function()
    {
        ajax_event_delete($(this).attr('data') , 'delete');
    })

    $('#itemdelete').click(function()
    {
        ajax_menu_delete($(this).attr('data') , 'itemdelete');
    })


    $('#groupdelete').click(function()
    {
        ajax_menu_delete($(this).attr('data') , 'groupdelete');
    })

    $('#menudelete').click(function()
    {
        ajax_menu_delete($(this).attr('data') , 'delete');
    })


    function resconfirm(id)
    {

        $.post("/admin/reservations/confirm/", {
            id: id
        },
        function(data){
            if(data > 0)
            {
                window.location.href="/admin/reservations/";
            }

        }, 'json');
    }

    $("#reservation_lookup").autocomplete({
      source : function(request, response)
      {
        $('#lookup_status').removeClass('foundicon-search').parent().addClass('ajax-load');
       $.post("/admin/reservations/lookup",
       {
        term : request.term
       }, function(data)
       {
        response(data);
        $('#lookup_status').addClass('foundicon-search').parent().removeClass('ajax-load');
       }, 'json');
      },
      select : function(event, ui)
      {
       var selectedObj = ui.item;
       //console.log(selectedObj.id);//selected id
       window.location.href= '/admin/reservations/details/' +selectedObj.id;
      }
    });

    $("#menu_lookup").autocomplete({
      source : function(request, response)
      {
        $('#lookup_status').removeClass('foundicon-search').parent().addClass('ajax-load');
       $.post("/admin/menus/lookup",
       {
        term : request.term
       }, function(data)
       {
        response(data);
        $('#lookup_status').addClass('foundicon-search').parent().removeClass('ajax-load');
       }, 'json');
      },
      select : function(event, ui)
      {
       var selectedObj = ui.item;
       //console.log(selectedObj.id);//selected id
       window.location.href= '/admin/menus/itemedit/' +selectedObj.id;
      }
    });
        
        $('#calendar').fullCalendar({
        
            editable: true,
            
            events: "/admin/reservations/calendar",
            
            eventDrop: function(event, delta) {
                alert(event.title + ' was moved ' + delta + ' days\n' +
                    '(should probably update your database)');
            },
            
            loading: function(bool) {
                if (bool) $('#loading').show();
                else $('#loading').hide();
            }
            
        });

})
