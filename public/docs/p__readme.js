(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([[6],{"1Yp+":function(e,t,n){"use strict";n.d(t,"a",(function(){return p}));var a=n("nKUr"),c=n("ODXe"),r=n("q1tI"),s=n("IujW"),o=n.n(s),i=n("wH4i"),l=n.n(i),u=(n("5MvH"),n("9kvl")),d=n("3Lvi"),j=n("IYj4");function p(e){var t=Object(r["useState"])(""),n=Object(c["a"])(t,2),s=n[0],i=n[1];return Object(r["useEffect"])((()=>{var t;console.log("markdown.tsx:::history",u["a"].location.query),void 0!=(null===(t=u["a"].location.query)||void 0===t?void 0:t.selected)&&d["a"].post(j["a"].getContent,{data:{type:e.type,key:u["a"].location.query.selected}}).then((e=>{i(e.data.content)}))}),[u["a"].location.query]),Object(a["jsx"])(o.a,{plugins:[l.a],className:"markdown-body",children:s})}},"3Lvi":function(e,t,n){"use strict";var a=n("o0o1"),c=n.n(a),r=n("HaE+"),s=(n("/xke"),n("TeRw")),o=n("io9h"),i=Object(o["a"])({prefix:"/api/docs/",timeout:1e4,headers:{"Content-Type":"application/json"},errorHandler:function(e){s["default"]["error"]({message:e.message})}});i.interceptors.response.use(function(){var e=Object(r["a"])(c.a.mark((function e(t){var n;return c.a.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,t.clone().json();case 2:return n=e.sent,console.log("response data",n),0!==n.code&&(s["default"]["error"]({message:n.message,description:n.description}),Promise.reject(n)),e.abrupt("return",t);case 6:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}()),t["a"]=i},IYj4:function(e,t,n){"use strict";n.d(t,"a",(function(){return a}));var a={getMenu:"docs/get_menu",getContent:"docs/get_content"}},u7h9:function(e,t,n){"use strict";n.r(t);var a=n("nKUr"),c=n("1Yp+"),r=n("x8nm"),s=n("nhC9");n("q1tI");t["default"]=()=>Object(a["jsxs"])(s["a"],{split:"vertical",className:"body-card",children:[Object(a["jsx"])(s["a"],{colSpan:"300px",children:Object(a["jsx"])(r["a"],{type:"readme"})}),Object(a["jsx"])(s["a"],{style:{padding:"40px"},children:Object(a["jsx"])(c["a"],{type:"readme"})})]})},x8nm:function(e,t,n){"use strict";n.d(t,"a",(function(){return j}));var a=n("ODXe"),c=n("nKUr"),r=(n("ozfa"),n("MJZm")),s=n("3Lvi"),o=n("IYj4"),i=n("q1tI"),l=n("9kvl"),u=r["a"].DirectoryTree,d=e=>{var t=e.title,n=e.subTitle,a=e.multi,r=n?a?"tree-title-multi":"tree-title-multi-inline":"tree-title-single";return Object(c["jsxs"])("div",{className:r,children:[Object(c["jsx"])("p",{children:t}),Object(c["jsx"])("p",{children:n})]})};function j(e){var t=Object(i["useState"])([]),n=Object(a["a"])(t,2),r=n[0],j=n[1],p=Object(i["useState"])(""),b=Object(a["a"])(p,2),v=(b[0],b[1],Object(i["useState"])([])),O=Object(a["a"])(v,2),f=O[0],h=O[1],y=Object(i["useState"])([]),x=Object(a["a"])(y,2),m=x[0],g=x[1],k=Object(i["useState"])([]),w=Object(a["a"])(k,2),S=w[0],q=w[1],I=Object(i["useState"])(!1),C=Object(a["a"])(I,2),E=C[0],K=C[1],T=Object(i["useState"])([]),Y=Object(a["a"])(T,2),D=(Y[0],Y[1],e=>{console.log("onExpand",e),h(e),K(!0)}),H=t=>{console.log(t,"\u70b9\u51fbskkk\u6d4b\u8bd5"),l["a"].push({pathname:"/"+e.type,query:{selected:t}}),q([t]),D([t])},L=e=>{console.log(e,"cxss");for(var t="",n=0;n<e.length;n++){if(e[n].children){t=L(e[n].children);break}t=e[n].key;break}return t},M=e=>{console.log("onCheck",e),g(e)},N=(e,t)=>{console.log("onSelect",t),t.node.isLeaf&&H(e[0])};return Object(i["useEffect"])((()=>{s["a"].post(o["a"].getMenu,{data:{type:e.type}}).then((e=>{var t;if(j(e.data),null===(t=l["a"].location.query)||void 0===t?void 0:t.selected){var n=l["a"].location.query;H(null===n||void 0===n?void 0:n.selected),D([null===n||void 0===n?void 0:n.selected])}else{var a=L(e.data);H(a),D([a])}}))}),[]),Object(c["jsx"])("div",{children:E?Object(c["jsx"])(u,{onExpand:D,defaultExpandedKeys:f,onCheck:M,checkedKeys:m,onSelect:N,treeData:r,className:"sidebar",titleRender:e=>Object(c["jsx"])(d,{title:e.title,subTitle:e.subTitle,multi:null===e||void 0===e?void 0:e.children}),selectedKeys:S}):""})}}}]);