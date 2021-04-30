!function(o,e,t){function a(o){t(o).is(":checked")?t(o).next().css("text-decoration","line-through"):t(o).next().css("text-decoration","none")}setTimeout(),t("#task-card input:checkbox").each(function(){a(this)}),t("#task-card input:checkbox").change(function(){a(this)});var r,i=t("#revenue-line-chart"),l={labels:["Apple","Samsung","Sony","Motorola","Nokia","Microsoft","Xiaomi"],datasets:[{label:"Today",data:[100,50,20,40,80,50,80],backgroundColor:"rgba(128, 222, 234, 0.5)",borderColor:"#d1faff",pointBorderColor:"#d1faff",pointBackgroundColor:"#00bcd4",pointHighlightFill:"#d1faff",pointHoverBackgroundColor:"#d1faff",borderWidth:2,pointBorderWidth:2,pointHoverBorderWidth:4,pointRadius:4},{label:"Second dataset",data:[60,20,90,80,50,85,40],borderDash:[15,5],backgroundColor:"rgba(128, 222, 234, 0.2)",borderColor:"#80deea",pointBorderColor:"#80deea",pointBackgroundColor:"#00bcd4",pointHighlightFill:"#80deea",pointHoverBackgroundColor:"#80deea",borderWidth:2,pointBorderWidth:2,pointHoverBorderWidth:4,pointRadius:4}]};setInterval(function(){var o=Math.round(Math.random()*(l.labels.length-1));void 0!==r&&(l.datasets[0].data[o]&&(l.datasets[0].data[o]=Math.round(100*Math.random())),l.datasets[1].data[o]&&(l.datasets[1].data[o]=Math.round(100*Math.random())),r.update())},2e3);var n,d={type:"line",options:{responsive:!0,legend:{display:!1},hover:{mode:"label"},scales:{xAxes:[{display:!0,gridLines:{display:!1},ticks:{fontColor:"#fff"}}],yAxes:[{display:!0,fontColor:"#fff",gridLines:{display:!0,color:"rgba(255,255,255,0.3)"},ticks:{beginAtZero:!1,fontColor:"#fff"}}]}},data:l},s=t("#doughnut-chart"),f={type:"doughnut",options:y={cutoutPercentage:70,legend:{display:!1}},data:{labels:["Mobile","Kitchen","Home"],datasets:[{label:"Sales",data:[3e3,500,1e3],backgroundColor:["#F7464A","#46BFBD","#FDB45C"]}]}},p=t("#trending-bar-chart"),h={labels:["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept"],datasets:[{label:"Sales",data:[6,9,8,4,6,7,9,4,8],backgroundColor:"#46BFBD",hoverBackgroundColor:"#009688"}]},c=1,g=10;setInterval(function(){if(void 0!==n){0;var o=Math.floor(Math.random()*(g-c+1))+c;h.datasets[0].data.shift(),h.datasets[0].data.push([o]),n.update()}},2e3);var b,C={type:"bar",options:{responsive:!0,legend:{display:!1},hover:{mode:"label"},scales:{xAxes:[{display:!0,gridLines:{display:!1}}],yAxes:[{display:!0,fontColor:"#fff",gridLines:{display:!1},ticks:{beginAtZero:!0}}]},tooltips:{titleFontSize:0,callbacks:{label:function(o,e){return o.yLabel}}}},data:h},u=t("#trending-radar-chart"),y={responsive:!0,legend:{display:!1},hover:{mode:"label"},scale:{angleLines:{color:"rgba(255,255,255,0.4)"},gridLines:{color:"rgba(255,255,255,0.2)"},ticks:{display:!1},pointLabels:{fontColor:"#fff"}}},k={labels:["Chrome","Mozilla","Safari","IE10","Opera"],datasets:[{label:"Browser",data:[5,6,7,8,6],fillColor:"rgba(255,255,255,0.2)",borderColor:"#fff",pointBorderColor:"#fff",pointBackgroundColor:"#00bfa5",pointHighlightFill:"#fff",pointHoverBackgroundColor:"#fff",borderWidth:2,pointBorderWidth:2,pointHoverBorderWidth:4}]},v=1,B=10;setInterval(function(){if(void 0!==b){0;var o=Math.floor(Math.random()*(B-v+1))+v;k.datasets[0].data.pop(),k.datasets[0].data.push([o]),b.update()}},2e3);var m={type:"radar",options:y,data:k},S=t("#line-chart"),W={type:"line",options:{responsive:!0,legend:{display:!1},hover:{mode:"label"},scales:{xAxes:[{display:!0,gridLines:{display:!1},ticks:{fontColor:"#fff"}}],yAxes:[{display:!0,fontColor:"#fff",gridLines:{display:!1},ticks:{beginAtZero:!1,fontColor:"#fff"}}]}},data:{labels:["USA","UK","UAE","AUS","IN","SA"],datasets:[{label:"Sales",data:[65,45,50,30,63,45],fill:!1,lineTension:0,borderColor:"#fff",pointBorderColor:"#fff",pointBackgroundColor:"#009688",pointHighlightFill:"#fff",pointHoverBackgroundColor:"#fff",borderWidth:2,pointBorderWidth:2,pointHoverBorderWidth:4,pointRadius:4}]}};o.onload=function(){r=new Chart(i,d),n=new Chart(p,C);new Chart(s,f);b=new Chart(u,m);new Chart(S,W)},t(function(){t("#clients-bar").sparkline([70,80,65,78,58,80,78,80,70,50,75,65,80,70,65,90,65,80,70,65,90],{type:"bar",height:"25",barWidth:7,barSpacing:4,barColor:"#b2ebf2",negBarColor:"#81d4fa",zeroColor:"#81d4fa"}),t("#sales-compositebar").sparkline([4,6,7,7,4,3,2,3,1,4,6,5,9,4,6,7,7,4,6,5,9],{type:"bar",barColor:"#F6CAFD",height:"25",width:"100%",barWidth:"7",barSpacing:4}),t("#sales-compositebar").sparkline([4,1,5,7,9,9,8,8,4,2,5,6,7],{composite:!0,type:"line",width:"100%",lineWidth:2,lineColor:"#fff3e0",fillColor:"rgba(255, 82, 82, 0.25)",highlightSpotColor:"#fff3e0",highlightLineColor:"#fff3e0",minSpotColor:"#00bcd4",maxSpotColor:"#00e676",spotColor:"#fff3e0",spotRadius:4}),t("#profit-tristate").sparkline([2,3,0,4,-5,-6,7,-2,3,0,2,3,-1,0,2,3,3,-1,0,2,3],{type:"tristate",width:"100%",height:"25",posBarColor:"#ffecb3",negBarColor:"#fff8e1",barWidth:7,barSpacing:4,zeroAxis:!1}),t("#invoice-line").sparkline([5,6,7,9,9,5,3,2,2,4,6,7,5,6,7,9,9,5],{type:"line",width:"100%",height:"25",lineWidth:2,lineColor:"#E1D0FF",fillColor:"rgba(255, 255, 255, 0.2)",highlightSpotColor:"#E1D0FF",highlightLineColor:"#E1D0FF",minSpotColor:"#00bcd4",maxSpotColor:"#4caf50",spotColor:"#E1D0FF",spotRadius:4}),t("#project-line-1").sparkline([5,6,7,9,9,5,3,2,2,4,6,7,5,6,7,9,9,5,3,2,2,4,6,7],{type:"line",width:"100%",height:"30",lineWidth:2,lineColor:"#00bcd4",fillColor:"rgba(0, 188, 212, 0.2)"}),t("#project-line-2").sparkline([6,7,5,6,7,9,9,5,3,2,2,4,6,7,5,6,7,9,9,5,3,2,2,4],{type:"line",width:"100%",height:"30",lineWidth:2,lineColor:"#00bcd4",fillColor:"rgba(0, 188, 212, 0.2)"}),t("#project-line-3").sparkline([2,4,6,7,5,6,7,9,5,6,7,9,9,5,3,2,9,5,3,2,2,4,6,7],{type:"line",width:"100%",height:"30",lineWidth:2,lineColor:"#00bcd4",fillColor:"rgba(0, 188, 212, 0.2)"}),t("#project-line-4").sparkline([9,5,3,2,2,4,6,7,5,6,7,9,5,6,7,9,9,5,3,2,2,4,6,7],{type:"line",width:"100%",height:"30",lineWidth:2,lineColor:"#00bcd4",fillColor:"rgba(0, 188, 212, 0.2)"})})}(window,document,jQuery);
