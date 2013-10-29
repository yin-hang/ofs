/**
 * Created with JetBrains PhpStorm.
 * User: jiangzhibin
 * Date: 13-8-29
 * Time: ÏÂÎç9:09
 * To change this template use File | Settings | File Templates.
 */
var Teacher = function(){

};
$(document).ready(function(){
    $('#j_star_test').bind('click',function(e){
        e.preventDefault();
        $.ajax({
            'type':'post',
            'dataType':'json',
            'url':'/teacher/commit/starTest.php',
            'success':function(json){
                if(json&&json.errno == 0){
                    window.location = $(e.target).attr('href');
                }
            }
        });
    });
    $('#j_finish_test').bind('click',function(e){
        e.preventDefault();
        $.ajax({
            'type':'post',
            'dataType':'json',
            'url':'/teacher/commit/finishTest.php',
            'success':function(json){
                if(json&&json.errno == 0){
                    window.location = $(e.target).attr('href');
                    window.Location.refresh();
                }
            }
    });
    });
});
