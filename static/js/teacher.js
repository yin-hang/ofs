/**
 * Created with JetBrains PhpStorm.
 * User: jiangzhibin
 * Date: 13-8-29
 * Time: 下午9:09
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    $('#j_star_test').bind('click',function(e){
        e.preventDefault();
        $.ajax({
            'type':'post',
            'dataType':'json',
            'url':'/teacher/commit/starTest.php',
            'success':function(json){
                console.log(json);
                if(json&&json.errno == 0){
//                    window.location.href = $(e.target).attr('href');
                    window.open($(e.target).attr('href'),'_blank');
                    setTimeout(function(){
                        window.location.href = '/teacher/index.php';    
                    },1000);
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
                    //window.Location.refresh();
                }
            }
    });
    });
});
