/*Plus Cross Copy Paste*/(function(){function h(a){return a.forEach(function(a){a.id=elementorCommon.helpers.getUniqueId(),0<a.elements.length&&h(a.elements)}),a}function e(a,b){var c=b,d=b.model.get("elType"),e=a.tpelecode.elType,f=a.tpelecode,g=JSON.stringify(f);console.log(g);var n=/\.(jpg|png|jpeg|gif|svg)/gi.test(g),i={elType:e,settings:f.settings},j=null,o={index:0};switch(e){case"section":i.elements=h(f.elements),j=elementor.getPreviewContainer();break;case"column":i.elements=h(f.elements),"section"===d?j=c.getContainer():"column"===d?(j=c.getContainer().parent,o.index=c.getOption("_index")+1):"widget"===d?(j=c.getContainer().parent.parent,o.index=c.getContainer().parent.view.getOption("_index")+1):void 0;break;case"widget":i.widgetType=a.tpeletype,j=c.getContainer(),"section"===d?j=c.children.findByIndex(0).getContainer():"column"===d?j=c.getContainer():"widget"===d?(j=c.getContainer().parent,d.index=c.getOption("_index")+1,o.index=c.getOption("_index")+1):void 0;case"container":i.elements=h(f.elements),j=elementor.getPreviewContainer();}var l=$e.run("document/elements/create",{model:i,container:j,options:o});n&&jQuery.ajax({url:theplus_cross_cp.ajax_url,method:"POST",data:{nonce:theplus_cross_cp.nonce,action:"plus_cross_cp_import",copy_content:g}}).done(function(c){if(c.success){var a=c.data[0];i.elType=a.elType,i.settings=a.settings,"widget"===i.elType?i.widgetType=a.widgetType:i.elements=a.elements,$e.run("document/elements/delete",{container:l}),$e.run("document/elements/create",{model:i,container:j,options:o})}})}xdLocalStorage.init({iframeUrl:"https://posimyththemes.com/tpcp/",initCallback:function(){}});var b=["section","column","widget","container"],c=[];b.forEach(function(d,g){elementor.hooks.addFilter("elements/"+b[g]+"/contextMenuGroups",function(d,h){return c.push(h),d.push({name:"plus_"+b[g],actions:[{name:"tp_plus_copy",title:"Plus Copy",icon:"far fa-copy",callback:function(){var c={};c.tpeletype="widget"==b[g]?h.model.get("widgetType"):null,c.tpelecode=h.model.toJSON(),xdLocalStorage.setItem("theplus-c-p-element",JSON.stringify(c)),console.log(c)}},{name:"tp_plus_paste",title:"Plus Paste",icon:"fas fa-paste",callback:function(){xdLocalStorage.getItem("theplus-c-p-element",function(b){e(JSON.parse(b.value),h)})}}]}),d})})})(jQuery);