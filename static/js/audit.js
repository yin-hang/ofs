/**
 * Created by jiangzhibin on 13-10-31.
 */
var Audit = (function(){
    function init(){
        $('#j_select_audit_user').change(function(e){
            var url = '/teacher/admin/audit.php';
            var value = $('#j_select_audit_user').val();
            if(value == 'all_apply'){
                url += '?all_apply=1' ;
<<<<<<< HEAD
            }else if(value != 'audit'){
=======
            }else if(value != 'all'){
>>>>>>> eca022c7ff46462bc0cb6735bc5714d0f06478aa
                url +='?stat=' + value;
            }
            window.location.href = url;
        });
        $('.j_audit_pass_btn').on('click',function(e){
            jumpStat(e,1);
        });
        $('.j_audit_reject_btn').on('click',function(e){
            jumpStat(e,0);
        });
    }
    function jumpStat(e,isPass){
           var $node = $(e.target).parents('tr');
            var stat = $node.data('stat');
            var url = '/teacher/commit/audit.php';
            var id = $node.data('id');
            var remark = $node.find('textarea').val();
            if(!isPass && remark == ''){
                alert('����д��˲�ͨ����ԭ��');
                return false;
            }
            var data = {
                'pass':isPass,
                'id':id,
                'stat':stat,
                'remark':remark
            }
            $.ajax({
                type:'POST',
                dataType:'json',
                url:url,
                data:data,
                success:function(json){
                    if(json&&json.errno == 0){
                        alert('�����ɹ�!');
                        window.location.reload();//ҳ������ˢ��
                    }else{
                        alert(json.errmsg);
                    }
                }
            });
        }

    return {
        init:function(){
            init();
        }
    }
})();

$(document).ready(function(){

    Audit.init();
});