function goToByScroll(t){$("html,body").animate({scrollTop:$("#"+t).offset().top-200},600)}function resortGrid(t){t.isotope("updateSortData",t.children());var e={};e.sortBy="programSort",filters=getFilters(),filters&&(filters+=", .expander",e.filter=filters),t.isotope(e)}function getFilters(){$typeCheckboxes=$("input[name='filter-type']"),$programCheckboxes=$("input[name='filter-program']");var t=[],e=[];$typeCheckboxes.filter(":checked").each(function(){t.push("."+this.value)}),$programCheckboxes.filter(":checked").each(function(){e.push("."+this.value)});var r=[];if(t.length&&e.length)jQuery.each(t,function(t,a){jQuery.each(e,function(t,e){r.push(a+e)})});else if(t.length)var r=t;else var r=e;return r.join(", ")}function setLastRows(){$(".program-item").removeClass("last-in-row"),maxLeft=0,$(".program-item:visible").each(function(){if("expanded-content"!=$(this).attr("id")){var t=$(this).position();t.left>maxLeft&&(maxLeft=t.left)}}),$(".program-item:visible").each(function(){if("expanded-content"!=$(this).attr("id")){var t=$(this).position();t.left==maxLeft&&$(this).addClass("last-in-row")}}),"expanded-content"!=$(".program-item:visible:last").attr("id")&&$(".program-item:visible:last").addClass("last-in-row")}$("#form-academics").submit(function(t){alert("Handler for .submit() called."),t.preventDefault()}),$(document).ready(function(){var t=0,e=0;$(".program-item:visible").each(function(){$(this).attr("id")||(t++,$(this).attr("id",t)),e=10*t,$(this).attr("data-program-sort",e)});var r=$("#program-grid");r.isotope({itemSelector:".program-item",layoutMode:"fitRows",itemPositionDataEnabled:!0,getSortData:{programSort:function(t){return parseInt($(t).attr("data-program-sort"))}}}),setLastRows(),$("input.filter").on("click",function(){$(".program-item").removeClass("active-program"),filters=getFilters(),filters&&(filters+=", .expander"),r.isotope({filter:filters}),$("#expanded-content").hide(),$("#expanded-content").attr("data-program-sort",1e4),resortGrid(r)}),$(".program-item").not("#expanded-content").on("click",function(t){if(t.preventDefault(),setLastRows(),$(this).hasClass("active-program"))$("#expanded-content").hide(),$(".program-item").removeClass("active-program"),$("#expanded-content").attr("data-program-sort",1e4),resortGrid(r);else{var e=$(this);$("#expanded-content").css({opacity:"1"}).show();var a="/academics-expander.php?id="+$(this).attr("id");$("#expanded-content").load(a,function(){setTimeout(function(){var t=$("#expanded-content").css("top"),r=Number(t.substring(0,t.length-2)),a=$("#expanded-content").height(),o=e.css("top"),i=Number(o.substring(0,o.length-2)),n=r-i;if(n>1e3){var s=r-a-25;$("#expanded-content").css({top:s+"px"})}},750)}),$(".program-item").removeClass("active-program"),$(this).addClass("active-program");var o,i;o=$(this).hasClass("last-in-row")?$(this).attr("id"):$(".active-program").nextAll(".last-in-row").attr("id");var i=$("#"+o).data("program-sort")+5;$("#expanded-content").attr("data-program-sort",i),resortGrid(r)}}),$("body").on("click","#expander-close",function(t){t.preventDefault(),$("#expanded-content").hide(),$(".program-item").removeClass("active-program"),$("#expanded-content").attr("data-program-sort",1e4),resortGrid(r),$("#expanded-content").hide()})});