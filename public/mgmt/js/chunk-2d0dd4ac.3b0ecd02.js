(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0dd4ac"],{8185:function(t,s,e){"use strict";e.r(s);var a=function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"column is-4"},[e("div",{staticClass:"field"},[e("label",{staticClass:"label",attrs:{for:""}},[t._v("Password-Current")]),e("div",{staticClass:"control has-icons-left"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.pwd_now,expression:"pwd_now"}],staticClass:"input",attrs:{type:"password",placeholder:"*******",required:""},domProps:{value:t.pwd_now},on:{input:function(s){s.target.composing||(t.pwd_now=s.target.value)}}}),t._m(0)])]),e("hr"),e("div",{staticClass:"field"},[e("label",{staticClass:"label",attrs:{for:""}},[t._v("New Password")]),e("div",{staticClass:"control has-icons-left"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.pwd_new,expression:"pwd_new"}],staticClass:"input",attrs:{type:"password",placeholder:"*******",required:""},domProps:{value:t.pwd_new},on:{input:function(s){s.target.composing||(t.pwd_new=s.target.value)}}}),t._m(1)])]),e("div",{staticClass:"field"},[e("label",{staticClass:"label",attrs:{for:""}},[t._v("re-type")]),e("div",{staticClass:"control has-icons-left"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.pwd_retype,expression:"pwd_retype"}],staticClass:"input",attrs:{type:"password",placeholder:"*******",required:""},domProps:{value:t.pwd_retype},on:{input:function(s){s.target.composing||(t.pwd_retype=s.target.value)}}}),t._m(2)])]),e("button",{staticClass:"button",on:{click:t.submit}},[t._v(" Submit ")])])},i=[function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("span",{staticClass:"icon is-small is-left"},[e("i",{staticClass:"ri-lock-line"})])},function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("span",{staticClass:"icon is-small is-left"},[e("i",{staticClass:"ri-lock-line"})])},function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("span",{staticClass:"icon is-small is-left"},[e("i",{staticClass:"ri-lock-line"})])}],n={data:function(){return{pwd_now:"",pwd_new:"",pwd_retype:""}},methods:{submit:function(){var t=this;this.pwd_new==this.pwd_retype?this.$axios.post("/admin/pwdmodify",{pwd_new:this.pwd_new,pwd_now:this.pwd_now,pwd_retype:this.pwd_retype}).then((function(s){200===s.data.status?t.$notify("Done."):t.$notify("Error: "+s.data.msg)})):this.$notify("Check your retype and try again.")}}},l=n,r=e("2877"),o=Object(r["a"])(l,a,i,!1,null,null,null);s["default"]=o.exports}}]);
//# sourceMappingURL=chunk-2d0dd4ac.3b0ecd02.js.map