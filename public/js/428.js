"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[428],{5428:(t,a,s)=>{s.r(a),s.d(a,{default:()=>i});const e={props:["category"],data:function(){return{items:[],pdfs:[],snippets:[],links:[]}},watch:{category:function(t){this.getData()}},methods:{getData:function(){var t=this;axios.get("/gethomedata").then((function(a){var s=a.data;"pdfs"==t.category?t.items=s.data.pdfs:"htmlsnippets"==t.category?t.items=s.data.snippets:t.items=s.data.links})).catch((function(t){console.log(error)}))},copyToClipboard:function(t){navigator.clipboard.writeText(t),toast.fire({icon:"success",title:"Copied the snippet "})}},created:function(){this.getData()}};const i=(0,s(1900).Z)(e,(function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",[s("div",{staticClass:"row"},[t._l(t.items,(function(a,e){return s("div",{key:e,staticClass:"col-md-6",staticStyle:{"padding-bottom":"25px"}},[s("div",{staticClass:"card"},[s("div",{staticClass:"card-body"},[s("h5",{staticClass:"card-title"},[t._v(t._s(t._f("uppercaseText")(a.title)))]),t._v(" "),s("p",{staticClass:"card-text"},[t._v("\n                        "+t._s(t._f("uppercaseText")(a.description))+"\n                    ")]),t._v(" "),a.storageLink?s("a",{staticClass:"btn btn-primary",staticStyle:{float:"right"},attrs:{href:"/PDF/"+a.storageLink,download:a.title}},[t._v("Download")]):t._e(),t._v(" "),a.snippet?s("a",{staticClass:"btn btn-primary",staticStyle:{float:"right"},attrs:{href:"javascript:void(0)"},on:{click:function(s){return t.copyToClipboard(a.snippet)}}},[t._v("Copy to clipboard")]):t._e(),t._v(" "),a.link?s("a",{staticClass:"btn btn-primary",staticStyle:{float:"right"},attrs:{href:a.link,target:1==a.open_in_new_tab?"_blank":"_self"}},[t._v("Open link")]):t._e()])])])})),t._v(" "),s("br")],2)])}),[],!1,null,null,null).exports}}]);