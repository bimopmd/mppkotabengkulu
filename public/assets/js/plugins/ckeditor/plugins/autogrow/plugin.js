/*
 Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
(function(){function h(a){function m(){e=a.document;n=e[CKEDITOR.env.ie?"getBody":"getDocumentElement"]();d=CKEDITOR.env.quirks?e.getBody():e.getDocumentElement();var c=CKEDITOR.env.quirks?d:d.findOne("body");c&&(c.setStyle("height","auto"),c.setStyle("min-height",CKEDITOR.env.safari?"0%":"auto"));f=CKEDITOR.dom.element.createFromHtml('\x3cspan style\x3d"margin:0;padding:0;border:0;clear:both;width:1px;height:1px;display:block;"\x3e'+(CKEDITOR.env.webkit?"\x26nbsp;":"")+"\x3c/span\x3e",e)}function g(){k&&
d.setStyle("overflow-y","hidden");var c=a.window.getViewPaneSize().height,b;n.append(f);b=f.getDocumentPosition(e).y+f.$.offsetHeight;f.remove();b+=h;b=Math.max(b,r);b=Math.min(b,p);b!=c&&l!=b&&(b=a.fire("autoGrow",{currentHeight:c,newHeight:b}).newHeight,c="border-box"===a.container.getComputedStyle("box-sizing"),c=a.container.getSize("width",c),a.resize(c,b,!0),l=b);k||(b<p&&d.$.scrollHeight>d.$.clientHeight?d.setStyle("overflow-y","hidden"):d.removeStyle("overflow-y"))}var l,e,n,d,f,h=a.config.autoGrow_bottomSpace||
0,r=void 0!==a.config.autoGrow_minHeight?a.config.autoGrow_minHeight:200,p=a.config.autoGrow_maxHeight||Infinity,k=!a.config.autoGrow_maxHeight;a.addCommand("autogrow",{exec:g,modes:{wysiwyg:1},readOnly:1,canUndo:!1,editorFocus:!1});var t={contentDom:1,key:1,selectionChange:1,insertElement:1,mode:1},q;for(q in t)a.on(q,function(c){"wysiwyg"==c.editor.mode&&setTimeout(function(){var b=a.getCommand("maximize");!a.window||b&&b.state==CKEDITOR.TRISTATE_ON?l=null:(g(),k||g())},100)});a.on("afterCommandExec",
function(a){"maximize"==a.data.name&&"wysiwyg"==a.editor.mode&&(a.data.command.state==CKEDITOR.TRISTATE_ON?d.removeStyle("overflow-y"):g())});a.on("contentDom",m);m();a.config.autoGrow_onStartup&&a.editable().isVisible()&&a.execCommand("autogrow")}CKEDITOR.plugins.add("autogrow",{init:function(a){if(a.elementMode!=CKEDITOR.ELEMENT_MODE_INLINE)a.on("instanceReady",function(){a.editable().isInline()?a.ui.space("contents").setStyle("height","auto"):h(a)})}})})();