var ApplySubmit = (function(){
	function initEvent(){
        $('input[name=apply]').on('click',function(e){
            var result = formValidator();
            if(!result){
                e.preventDefault();
            }
        });
        $('input[name=birth]').datepicker({
            changeMonth:true,
            changeYear:true,
            dateFormat: "yy-mm-dd"
        });
        $('.time').datepicker({
            changeMonth:true,
            changeYear:true,
            dateFormat: "yy-mm-dd"
        });
        $('input[name=work]').bind('click',function(e){
            if($('input[name=work]:checked').val() == 'work'){
                $('#j_in_work').removeClass('hide');
            }else{
                $('#j_in_work').addClass('hide');
            }
        });
        $('input[name=ill]').bind('click',function(e){
            if($('input[name=ill]:checked').val() == 'yes'){
                $('input[name=illdetail]').removeClass('hide');
            }else{
                $('input[name=illdetail]').addClass('hide');
            }
        });
        $('input[name=exp]').bind('click',function(e){
            if($('input[name=exp]:checked').val() == 'yes'){
                $('input[name=expdetail]').removeClass('hide');
            }else{
                $('input[name=expdetail]').addClass('hide');
            }
        });
	}
	//��У��
	function formValidator(){
		var validator = new Validator({
                stop:true,
                callback:function(msg,$node){
                    if($node.length > 0){
                        window.scrollTo(100,$node.offset().top);//��������Ӧλ��
                    }
                    alert(msg);
                }
        });
        var email = $('input[name=email]');
        var mobile = $('input[name=mobile]');
        validator.add($('input[name=name]'),'isNotEmpty','�û�������Ϊ��');
        validator.add($('input[name=birth]'),'isNotEmpty','�������²���Ϊ��');
        validator.add($('input[name=nation]'),'isNotEmpty','���岻��Ϊ��');
        validator.add($('input[name=hometown]'),'isNotEmpty','���᲻��Ϊ��');
        validator.add($('input[name=edu]'),'isNotEmpty','�����̶Ȳ���Ϊ��');
        validator.add($('input[name=edu]'),'isNotEmpty','�����̶Ȳ���Ϊ��');
        validator.add($('input[name=liveplace]'),'isNotEmpty','�Ⱦ�ס�ز���Ϊ��');
        validator.add(mobile,'isNotEmpty','�ֻ��Ų���Ϊ��');
        validator.add(mobile,'isMobile','�ֻ��Ÿ�ʽ����ȷ');
        validator.add(email,'isNotEmpty','���䲻��Ϊ��');
        validator.add(email,'isEmail','�����ʽ����ȷ');
        validator.add($('input[name=addr]'),'isNotEmpty','ͨѶ��ַ����Ϊ��');
        validator.add($('input[name=postcode]'),'isNotEmpty','�ʱ಻��Ϊ��');

        validator.add($('input[name=edubegintime1]'),'isNotEmpty','��ʼʱ�䲻��Ϊ��');
        validator.add($('input[name=eduendtime1]'),'isNotEmpty','����ʱ�䲻��Ϊ��');
        validator.add($('input[name=edu1]'),'isNotEmpty','��ѧ��Ϣ����Ϊ��');
        validator.add($('input[name=edubegintime2]'),'isNotEmpty','��ʼʱ�䲻��Ϊ��');
        validator.add($('input[name=eduendtime2]'),'isNotEmpty','����ʱ�䲻��Ϊ��');
        validator.add($('input[name=edu2]'),'isNotEmpty','��ѧ��Ϣ����Ϊ��');

        validator.add($('input[name=folkname1]'),'isNotEmpty','��ͥ��Ա����Ϊ��');
        validator.add($('input[name=folk1]'),'isNotEmpty','��ͥ��Ա����Ϊ��');
        validator.add($('input[name=folkjob1]'),'isNotEmpty','����д��ͥ��Ա������λ');
        validator.add($('input[name=positon1]'),'isNotEmpty','���θ�λ����Ϊ��');


        validator.add($('input[name=jobbegintime1]'),'isNotEmpty','��ʼʱ�䲻��Ϊ��');
        validator.add($('input[name=jobendtime1]'),'isNotEmpty','����ʱ�䲻��Ϊ��');
        validator.add($('input[name=job1]'),'isNotEmpty','��λ���Ʋ���Ϊ��');
        validator.add($('input[name=positon1]'),'isNotEmpty','���θ�λ����Ϊ��');

        validator.add($('input[name=exp]:checked'),'isNotEmpty','��ѡ���Ƿ���֧�̾���');

        validator.add($('input[name=EmergencyContactName]'),'isNotEmpty','������ϵ�˲���Ϊ��');
        validator.add($('input[name=EmergencyContact]'),'isNotEmpty','������ϵ����ϵ��ʽ����Ϊ��');
        validator.add($('input[name=EmergencyContactWork]'),'isNotEmpty','������ϵ�˹�����λ����Ϊ��');
        validator.add($('input[name=EmergencyContactRelation]'),'isNotEmpty','������ϵ�˹�ϵ����Ϊ��');

        validator.add($('textarea[name=think]'),'isNotEmpty','����д����֧�̵��뷨');
        validator.add($('textarea[name=risk]'),'isNotEmpty','����д����֧�̵ķ��յ���ʶ');
        validator.add($('textarea[name=hope]'),'isNotEmpty','����д����ڲ���֧�̹�������������ϣ������');
        validator.add($('input[name=work]:checked'),'isNotEmpty','��ѡ���������');
        validator.add($('input[name=money]:checked'),'isNotEmpty','��ѡ��֧�̻Ԥ���ʽ�');
        validator.add($('input[name=support]:checked'),'isNotEmpty','��ѡ���ܱ����Ѷ�����֧�̵�֧�̶ֳ�');

        validator.add($('input[name=lineal_name]'),'isNotEmpty','����дֱϵ����������');
        validator.add($('input[name=lineal_relation]'),'isNotEmpty','����д��ֱϵ�����Ĺ�ϵ');
        validator.add($('input[name=lineal_num]'),'isNotEmpty','����дֱϵ��������ϵ��ʽ');
        validator.add($('input[name=time]:checked'),'isNotEmpty','��ѡ��֧������');
        validator.add($('input[name=msg_from]:checked'),'isNotEmpty','��ѡ����Ϣ��Դ');
//        return true;
        var result =  validator.validate();
        return result;
	}
	return {
		init:function(){
			initEvent();
		}
	}
})();

/**
 * options = {
 *     stop:0//�������ʱ���ֹͣУ��
 *     callback:function(msgs){}//�ص����������addĳ�������ʱ������˻ص���������Ὣ�˺�������
 * }
 */

var Validator = function(options){
    this.messages = [];
    this.datas = [];
    this.stop = options.stop||fasle;//��У������ʱ���ֹͣ
    this.callback = options.callback||{};
    this.checkResult = true;
};
Validator.prototype = {
    /*
     * ���һ��У�����,��һ������Ҫ��֤�����ݣ��ڶ�������Ҫ��֤�ĺ���������������֤ʧ��ʱ�����Ϣ�����Բ�д����Ĭ��
     * */
    add:function(data,type,msg){
        var list = {
            data:data,
            type:type,
            msg:msg
        };
        this.datas.push(list);
    },
    validate:function(){
        var msg,type,checker,
            checkResult = true,
            datas = this.datas;
        for(var item in datas){
            if(datas.hasOwnProperty(item)){
                type = datas[item]['type'];//����key��ѯ�Ƿ����У����������
                checker = this.types[type];
                if(!type){
                    continue;//�����У����򲻴���
                }
                if(!checker){//У����򲻴������У�Ҳ��������һ��û�е�У����򣬱���
                    throw {
                        name:'validator error',
                        message:'No handler to validate type' + type
                    };
                }
                if(typeof checker.validate == 'function'){
                    if(!checker.validate(datas[item]['data'])){//У�����ͨ��
                        switch(typeof datas[item]['msg']){
                            case 'string':
                                if(typeof this.callback == 'function'){
                                    console.log(datas);
                                    this.callback(datas[item]['msg'],datas[item]['data']);
                                }
                                break;
                            case 'function':
                                datas[item]['msg'](checker.instruction);//ʹ��Ĭ�ϵ���Ϣ
                                break;
                            default :
                                if(typeof this.callback == 'function'){
                                    this.callback(checker.instruction);
                                }
                                break;
                        }
                        this.checkResult = false;
                        if(this.stop){//����У�鲻ͨ�����̾�ֹͣ
                            return false;
                        }
                    }
                }
            }
        }
        return checkResult;
    },
    getCheckResult:function(){
        return this.checkResult;
    }
};
Validator.prototype.types = {
    isNumber:{
        validate:function($node){
            return !isNaN($node.val());
        },
        instruction:'����Ϊ����'
    },
    isNotEmpty:{
        validate:function($node){
            if($node == null){
                return false;
            }
            return $.trim($node.val()) !== '';
        },
        instruction:'���ݲ���Ϊ��'
    },
	strLong:{
		validate:function($node){
            var value = $node.val()||'';
			if(value && value.length > 300){
				return false;
			}
			return true;
		},
		instruction:'�������ܳ���300'
	},
	isMobile:{
		validate:function($node){
			return /^1[3|4|5|8][0-9]\d{4,8}$/.test($node.val());
		},
		instruction:'�ֻ�����д����,����'
	},
	isEmail:{
		validate:function($node){
			return /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/.test($node.val());
		},
		instruction:'������д����,����'
	}
};

ApplySubmit.init();
