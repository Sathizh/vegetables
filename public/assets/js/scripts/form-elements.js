$(function(){$("select").formSelect(),$(".timepicker").timepicker({default:"now",fromnow:0,twelvehour:!1,donetext:"OK",cleartext:"Clear",canceltext:"Cancel",autoclose:!1,ampmclickable:!0,aftershow:function(){}});var t=document.getElementById("test-slider");noUiSlider.create(t,{start:[20,80],connect:!0,step:1,orientation:"horizontal",range:{min:0,max:100},format:wNumb({decimals:0})}),$("input.autocomplete").autocomplete({data:{Apple:null,Microsoft:null,Google:"https://placehold.it/250x250"},limit:20,onAutocomplete:function(t){},minLength:1}),$("input#input_text, textarea#textarea1").characterCounter()});
