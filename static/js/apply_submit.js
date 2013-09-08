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
	}
	//��У��
	function formValidator(){
		var validator = new Validator({
                stop:true,
                callback:function(msg){
                    alert(msg);
                }
        }
		);
        var email = $('input[name=email]').val();
        var mobile = $('input[name=mobile]').val();
		validator.add($('input[name=name]').val(),'isNotEmpty','�û�������Ϊ��');
		validator.add($('input[name=birth]').val(),'isNotEmpty','�������²���Ϊ��');
		validator.add($('input[name=hometown]').val(),'isNotEmpty','���岻��Ϊ��');
        validator.add(mobile,'isNotEmpty','�ֻ��Ų���Ϊ��');
        validator.add(mobile,'isMobile','�ֻ��Ÿ�ʽ����ȷ');
        validator.add(email,'isNotEmpty','���䲻��Ϊ��');
        validator.add(email,'isEmail','�����ʽ����ȷ');
		validator.add($('input[name=think]').val(),'isNotEmpty','����д����֧�̵��뷨');
		//validator.add($('input[name=think]').val(),'strLong','����֧�̵��뷨��д��������,��ɾ������');
		validator.add($('input[name=risk]').val(),'strLong','����д����֧�̵ķ��յ���ʶ');
		validator.add($('input[name=hope]').val(),'strLogin','����д����ڲ���֧�̹�������������ϣ������');
		validator.validate();
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
                                    this.callback(datas[item]['msg']);
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
        validate:function(value){
            return !isNaN(value);
        },
        instruction:'����Ϊ����'
    },
    isNotEmpty:{
        validate:function(value){
            return $.trim(value) !== '';
        },
        instruction:'���ݲ���Ϊ��'
    },
	strLong:{
		validate:function(value){
			if(value && value.length > 300){
				return false;
			}
		},
		instruction:'�������ܳ���300'
	},
	isMobile:{
		validate:function(value){
			return /^1[3|4|5|8][0-9]\d{4,8}$/.test(value);
		},
		instruction:'�ֻ�����д����,����'
	},
	isEmail:{
		validate:function(value){
			return /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/.test(value);
		},
		instruction:'������д����,����'
	}
};

ApplySubmit.init();