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
	//表单校验
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
		validator.add($('input[name=name]').val(),'isNotEmpty','用户名不能为空');
		validator.add($('input[name=birth]').val(),'isNotEmpty','出生年月不能为空');
		validator.add($('input[name=hometown]').val(),'isNotEmpty','民族不能为空');
        validator.add(mobile,'isNotEmpty','手机号不能为空');
        validator.add(mobile,'isMobile','手机号格式不正确');
        validator.add(email,'isNotEmpty','邮箱不能为空');
        validator.add(email,'isEmail','邮箱格式不正确');
		validator.add($('input[name=think]').val(),'isNotEmpty','请填写对于支教的想法');
		//validator.add($('input[name=think]').val(),'strLong','对于支教的想法填写字数过多,请删减部分');
		validator.add($('input[name=risk]').val(),'strLong','请填写对于支教的风险的认识');
		validator.add($('input[name=hope]').val(),'strLogin','请填写你对于参与支教工作的期望或者希望贡献');
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
                                datas[item]['msg'](checker.instruction);//使用默认的消息
                                break;
                            default :
                                if(typeof this.callback == 'function'){
                                    this.callback(checker.instruction);
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
        validate:function(value){
            return !isNaN(value);
        },
        instruction:'必须为数字'
    },
    isNotEmpty:{
        validate:function(value){
            return $.trim(value) !== '';
        },
        instruction:'内容不能为空'
    },
	strLong:{
		validate:function(value){
			if(value && value.length > 300){
				return false;
			}
		},
		instruction:'字数不能超过300'
	},
	isMobile:{
		validate:function(value){
			return /^1[3|4|5|8][0-9]\d{4,8}$/.test(value);
		},
		instruction:'手机号填写错误,请检查'
	},
	isEmail:{
		validate:function(value){
			return /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/.test(value);
		},
		instruction:'邮箱填写错误,请检查'
	}
};

ApplySubmit.init();