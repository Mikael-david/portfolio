(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-69a43b36"],{"20bc":function(e,o,t){},3141:function(e,o,t){"use strict";t.r(o);var s=function(){var e=this,o=e.$createElement,t=e._self._c||o;return t("div",{staticClass:"container"},[t("input",{directives:[{name:"model",rawName:"v-model",value:e.postBody,expression:"postBody"}],attrs:{type:"text"},domProps:{value:e.postBody},on:{change:function(o){return e.postPost()},input:function(o){o.target.composing||(e.postBody=o.target.value)}}}),t("textarea",{directives:[{name:"model",rawName:"v-model",value:e.message,expression:"message"}],attrs:{placeholder:"ajoutez plusieurs lignes"},domProps:{value:e.message},on:{input:function(o){o.target.composing||(e.message=o.target.value)}}}),e.errors&&e.errors.length?t("ul"):e._e()])},n=[],a=t("bc3a"),r=t.n(a),c=t("b383"),i={data:function(){return{postBody:"",form:{name1:"toto",position:!0},errors:[]}},methods:{postPost:function(){var e=this;console.log("postPost"),r.a.post("api.php",c.stringify(this.form)).then((function(e){console.log("response:"),console.log(e.data)})).catch((function(o){console.log("error"),e.errors.push(o)}))}}},u=i,p=(t("92ec"),t("2877")),l=Object(p["a"])(u,s,n,!1,null,"cba9a370",null);o["default"]=l.exports},"92ec":function(e,o,t){"use strict";var s=t("20bc"),n=t.n(s);n.a}}]);
//# sourceMappingURL=chunk-69a43b36.867fa7be.js.map