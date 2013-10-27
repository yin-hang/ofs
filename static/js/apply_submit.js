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
                $('input[name=illdetail').removeClass('hide');
            }else{
                $('input[name=illdetail').addClass('hide');
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
	//表单校验
	function formValidator(){
		var validator = new Validator({
                stop:true,
                callback:function(msg,$node){
                    window.scrollTo($node);//滚动到相应位置
                    alert(msg);
                }
        }
		);
        var email = $('input[name=email]');
        var mobile = $('input[name=mobile]');
        validator.add($('input[name=name]'),'isNotEmpty','用户名不能为空');
        validator.add($('input[name=birth]'),'isNotEmpty','出生年月不能为空');
        validator.add($('input[name=nation]'),'isNotEmpty','民族不能为空');
        validator.add($('input[name=hometown]'),'isNotEmpty','籍贯不能为空');
        validator.add($('input[name=edu]'),'isNotEmpty','教育程度不能为空');
        validator.add($('input[name=edu]'),'isNotEmpty','教育程度不能为空');
        validator.add($('input[name=liveplace]'),'isNotEmpty','先居住地不能为空');
        validator.add(mobile,'isNotEmpty','手机号不能为空');
        validator.add(mobile,'isMobile','手机号格式不正确');
        validator.add(email,'isNotEmpty','邮箱不能为空');
        validator.add(email,'isEmail','邮箱格式不正确');
        validator.add($('input[name=addr]'),'isNotEmpty','通讯地址不能为空');
        validator.add($('input[name=postcode]'),'isNotEmpty','邮编不能为空');

        validator.add($('input[name=edubegintime1]'),'isNotEmpty','开始时间不能为空');
        validator.add($('input[name=eduendtime1]'),'isNotEmpty','结束时间不能为空');
        validator.add($('input[name=edu1]'),'isNotEmpty','中学信息不能为空');
        validator.add($('input[name=edubegintime2]'),'isNotEmpty','开始时间不能为空');
        validator.add($('input[name=eduendtime2]'),'isNotEmpty','结束时间不能为空');
        validator.add($('input[name=edu2]'),'isNotEmpty','大学信息不能为空');

        validator.add($('input[name=jobbegintime1]'),'isNotEmpty','开始时间不能为空');
        validator.add($('input[name=jobendtime1]'),'isNotEmpty','结束时间不能为空');
        validator.add($('input[name=job1]'),'isNotEmpty','单位名称不能为空');
        validator.add($('input[name=positon1]'),'isNotEmpty','担任岗位不能为空');

        validator.add($('input[name=exp]:checked'),'isNotEmpty','请选择是否有支教经验');
        validator.add($('input[name=EmergencyContactName]'),'isNotEmpty','紧急联系人不能为空');
        validator.add($('input[name=EmergencyContact]'),'isNotEmpty','紧急联系人联系方式不能为空');
        validator.add($('input[name=EmergencyContactWork]'),'isNotEmpty','紧急联系人工作单位不能为空');

        validator.add($('textarea[name=think]'),'isNotEmpty','请填写对于支教的想法');
        validator.add($('textarea[name=risk]'),'strLong','请填写对于支教的风险的认识');
        validator.add($('textarea[name=hope]'),'strLogin','请填写你对于参与支教工作的期望或者希望贡献');

        validator.add($('input[name=work]:checked'),'isNotEmpty','请选择您的身份');
        validator.add($('input[name=money]:checked'),'isNotEmpty','请选择支教活动预备资金');
        validator.add($('input[name=support]:checked'),'isNotEmpty','请选择周边好友对于您支教的支持程度');

        validator.add($('input[name=lineal_name]'),'isNotEmpty','请填写直系亲属的姓名');
        validator.add($('input[name=lineal_relation]'),'isNotEmpty','请填写和直系亲属的关系');
        validator.add($('input[name=lineal_num]'),'isNotEmpty','请填写直系亲属的联系方式');
        validator.add($('input[name=time]:checked'),'isNotEmpty','请选择支教期限');
        validator.add($('input[name=msg_from]:checked'),'isNotEmpty','请选择消息来源');
        return true;
        return validator.validate();
	}
	return {
		init:function(){
			initEvent();
		}
	}
})();

/**
 * options = {
 *     stop:0//当出错的时候就停止校验
 *     callback:function(msgs){}//回调函数，如果add某条规则的时候添加了回调函数，则会将此函数覆盖
 * }
 */

var Validator = function(options){
    this.messages = [];
    this.datas = [];
    this.stop = options.stop||fasle;//当校验出错的时候就停止
    this.callback = options.callback||{};
    this.checkResult = true;
};
Validator.prototype = {
    /*
     * 添加一条校验规则,第一个是需要验证的数据，第二个是需要验证的函数，第三个是验证失败时候的消息，可以不写，有默认
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
                type = datas[item]['type'];//根据key查询是否存在校验规则的名称
                checker = this.types[type];
                if(!type){
                    continue;//输入的校验规则不存在
                }
                if(!checker){//校验规则不存在类中，也即调用了一个没有的校验规则，报错
                    throw {
                        name:'validator error',
                        message:'No handler to validate type' + type
                    };
                }
                if(typeof checker.validate == 'function'){
                    if(!checker.validate(datas[item]['data'])){//校验规则不通过
                        switch(typeof datas[item]['msg']){
                            case 'string':
                                if(typeof this.callback == 'function'){
                                    this.callback(datas[item]['msg']);
                                }
                                break;
                            case 'function':
                                datas[item]['msg'](checker.instruction,datas['item']['data']);//使用默认的消息
                                break;
                            default :
                                if(typeof this.callback == 'function'){
                                    this.callback(checker.instruction,datas[item]['data']);
                                }
                                break;
                        }
                        this.checkResult = false;
                        if(this.stop){//遇到校验不通过立刻就停止
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
        instruction:'必须为数字'
    },
    isNotEmpty:{
        validate:function($node){
            if($node == null){
                return false;
            }
            return $.trim($node.val()) !== '';
        },
        instruction:'内容不能为空'
    },
	strLong:{
		validate:function($node){
            var value = $node.val()||'';
			if(value && value.length > 300){
				return false;
			}
			return true;
		},
		instruction:'字数不能超过300'
	},
	isMobile:{
		validate:function($node){
			return /^1[3|4|5|8][0-9]\d{4,8}$/.test($node);
		},
		instruction:'手机号填写错误,请检查'
	},
	isEmail:{
		validate:function($node){
			return /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/.test($node);
		},
		instruction:'邮箱填写错误,请检查'
	}
};

ApplySubmit.init();
