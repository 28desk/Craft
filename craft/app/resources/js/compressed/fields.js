!function(s){var e=Garnish.Base.extend({$groups:null,$selectedGroup:null,init:function(){this.$groups=s("#groups"),this.$selectedGroup=this.$groups.find("a.sel:first"),this.addListener(s("#newgroupbtn"),"activate","addNewGroup");var e=s("#groupsettingsbtn");e.length&&(e.data("menubtn").settings.onOptionSelect=s.proxy(function(e){switch(s(e).data("action")){case"rename":this.renameSelectedGroup();break;case"delete":this.deleteSelectedGroup()}},this))},addNewGroup:function(){var e=this.promptForGroupName("");if(e){var t={name:e};Craft.postActionRequest("fields/saveGroup",t,s.proxy(function(e,t){if("success"==t)if(e.success)location.href=Craft.getUrl("settings/fields/"+e.group.id);else if(e.errors){var r=this.flattenErrors(e.errors);alert(Craft.t("Could not create the group:")+"\n\n"+r.join("\n"))}else Craft.cp.displayError()},this))}},renameSelectedGroup:function(){var e=this.$selectedGroup.text(),t=this.promptForGroupName(e);if(t&&t!=e){var r={id:this.$selectedGroup.data("id"),name:t};Craft.postActionRequest("fields/saveGroup",r,s.proxy(function(e,t){if("success"==t)if(e.success)this.$selectedGroup.text(e.group.name),Craft.cp.displayNotice(Craft.t("Group renamed."));else if(e.errors){var r=this.flattenErrors(e.errors);alert(Craft.t("Could not rename the group:")+"\n\n"+r.join("\n"))}else Craft.cp.displayError()},this))}},promptForGroupName:function(e){return prompt(Craft.t("What do you want to name your group?"),e)},deleteSelectedGroup:function(){if(confirm(Craft.t("Are you sure you want to delete this group and all its fields?"))){var e={id:this.$selectedGroup.data("id")};Craft.postActionRequest("fields/deleteGroup",e,s.proxy(function(e,t){"success"==t&&(e.success?location.href=Craft.getUrl("settings/fields"):Craft.cp.displayError())},this))}},flattenErrors:function(e){var t=[];for(var r in e)t=t.concat(e[r]);return t}});Garnish.$doc.ready(function(){Craft.FieldsAdmin=new e})}(jQuery);
//# sourceMappingURL=fields.js.map