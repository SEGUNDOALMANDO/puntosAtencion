/**
 * Created by pdelacruz on 23/11/14.
 */
jQuery(function($){
    var formmyactivity=$('.myactivity'),
        statusfilter    =   $('#filterstatus'),
        rolfilter       =   $('#rolfilter')

    statusfilter.on('change', function(){
        formmyactivity.submit()
    })

    rolfilter.on('change', function(){
        formmyactivity.submit()
    })


})