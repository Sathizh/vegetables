!function(t,o,e){setTimeout();var r=o.getElementById("thisYearRevenue").getContext("2d"),a=o.getElementById("lastYearRevenue").getContext("2d");Chart.defaults.LineAlt=Chart.defaults.line;var i=Chart.controllers.line.prototype.draw,d=Chart.controllers.line.extend({draw:function(){i.apply(this,arguments);var t=this.chart.chart.ctx,o=t.stroke;t.stroke=function(){t.save(),t.shadowColor="rgba(156, 46, 157,0.5)",t.shadowBlur=20,t.shadowOffsetX=2,t.shadowOffsetY=20,o.apply(this,arguments),t.restore()}}});Chart.controllers.LineAlt=d,Chart.defaults.LineAlt2=Chart.defaults.line;i=Chart.controllers.line.prototype.draw,d=Chart.controllers.line.extend({draw:function(){i.apply(this,arguments);var t=this.chart.chart.ctx,o=t.stroke;t.stroke=function(){t.save(),o.apply(this,arguments),t.restore()}}});Chart.controllers.LineAlt2=d;new Chart(r,{type:"LineAlt",data:{labels:["January","February","March","April","May","June"],datasets:[{label:"This year",data:[45,62,15,78,58,98],fill:!1,pointRadius:2.2,pointBorderWidth:1,borderColor:"#9C2E9D",borderWidth:5,pointBorderColor:"#9C2E9D",pointHighlightFill:"#9C2E9D",pointHoverBackgroundColor:"#9C2E9D",pointHoverBorderWidth:2}]},options:{responsive:!0,maintainAspectRatio:!0,datasetStrokeWidth:3,pointDotStrokeWidth:4,tooltipFillColor:"rgba(0,0,0,0.6)",legend:{display:!1,position:"bottom"},hover:{mode:"label"},scales:{xAxes:[{display:!1}],yAxes:[{ticks:{padding:10,stepSize:20,max:100,min:0,fontColor:"#9e9e9e"},gridLines:{display:!0,drawBorder:!1,lineWidth:1,zeroLineColor:"#e5e5e5"}}]},title:{display:!1,fontColor:"#FFF",fullWidth:!1,fontSize:40,text:"82%"}}}),new Chart(a,{type:"LineAlt2",data:{labels:["January","February","March","April","May","June"],datasets:[{label:"Last year dataset",data:[12,6,25,58,38,68],borderDash:[15,5],fill:!1,pointRadius:0,pointBorderWidth:0,borderColor:"#E4E4E4",borderWidth:5}]},options:{responsive:!0,maintainAspectRatio:!0,datasetStrokeWidth:3,pointDotStrokeWidth:4,tooltipFillColor:"rgba(0,0,0,0.6)",legend:{display:!1,position:"bottom"},hover:{mode:"label"},scales:{xAxes:[{display:!1}],yAxes:[{ticks:{padding:10,stepSize:20,max:100,min:0},gridLines:{display:!0,drawBorder:!1,lineWidth:1}}]},title:{display:!1,fontColor:"#FFF",fullWidth:!1,fontSize:40,text:"82%"}}});Chart.defaults.earnningLineShadow=Chart.defaults.line;i=Chart.controllers.line.prototype.draw,d=Chart.controllers.line.extend({draw:function(){i.apply(this,arguments);var t=this.chart.chart.ctx,o=t.stroke;t.stroke=function(){t.save(),t.shadowColor="rgba(255, 111, 0, 0.3",t.shadowBlur=14,t.shadowOffsetX=2,t.shadowOffsetY=16,o.apply(this,arguments),t.restore()}}});Chart.controllers.earnningLineShadow=d;var l=o.getElementById("monthlyEarning").getContext("2d");(C=l.createLinearGradient(500,0,0,200)).addColorStop(0,"#ffca28"),C.addColorStop(1,"#ff6f00");new Chart(l,{type:"earnningLineShadow",data:{labels:["1","2","3","4","5","6","7","8","8","8","8","8","8","8"],datasets:[{label:"This year dataset",lineTension:0,fill:!1,pointRadius:0,pointBorderWidth:0,borderColor:C,borderWidth:3,data:[50,40,30,55,50,90,40,50,40,70,55,80,50,55]}]},options:{responsive:!0,maintainAspectRatio:!0,datasetStrokeWidth:3,pointDotStrokeWidth:4,tooltipFillColor:"rgba(0,0,0,0.6)",layout:{padding:{left:50,right:0,top:0,bottom:0}},legend:{display:!1,position:"bottom"},hover:{mode:"label"},scales:{xAxes:[{display:!1}],yAxes:[{display:!1}]},title:{display:!1,fontColor:"#FFF",fullWidth:!1,fontSize:40,text:"82%"}}});var n={responsive:!0,maintainAspectRatio:!0,datasetStrokeWidth:3,pointDotStrokeWidth:4,tooltipFillColor:"rgba(0,0,0,0.6)",legend:{display:!1,position:"bottom"},hover:{mode:"label"},scales:{xAxes:[{display:!1}],yAxes:[{display:!1}]},title:{display:!1,fontColor:"#FFF",fullWidth:!1,fontSize:40,text:"82%"}},s=["January","February","March","April","May","June"],p=o.getElementById("custom-line-chart-sample-one").getContext("2d");(C=p.createLinearGradient(300,0,0,300)).addColorStop(0,"#0288d1"),C.addColorStop(1,"#26c6da"),(f=p.createLinearGradient(300,0,0,300)).addColorStop(0,"#0288d1"),f.addColorStop(1,"#26c6da");new Chart(p,{type:"line",data:{labels:s,datasets:[{label:"My Second dataset",borderColor:C,pointColor:"#fff",pointBorderColor:C,pointBackgroundColor:"#fff",pointHoverBackgroundColor:C,pointHoverBorderColor:C,pointRadius:4,pointBorderWidth:1,pointHoverRadius:4,pointHoverBorderWidth:1,fill:!0,backgroundColor:f,borderWidth:1,data:[24,18,20,30,40,43]}]},options:n});var h=o.getElementById("custom-line-chart-sample-two").getContext("2d");(C=h.createLinearGradient(500,0,0,200)).addColorStop(0,"#8e24aa"),C.addColorStop(1,"#ff6e40"),(f=h.createLinearGradient(500,0,0,200)).addColorStop(0,"#8e24aa"),f.addColorStop(1,"#ff6e40");new Chart(h,{type:"line",data:{labels:s,datasets:[{label:"My Second dataset",borderColor:C,pointColor:"#fff",pointBorderColor:C,pointBackgroundColor:"#fff",pointHoverBackgroundColor:C,pointHoverBorderColor:C,pointRadius:4,pointBorderWidth:1,pointHoverRadius:4,pointHoverBorderWidth:1,fill:!0,backgroundColor:f,borderWidth:1,data:[24,18,20,30,40,43]}]},options:n});var C,f,c=o.getElementById("custom-line-chart-sample-three").getContext("2d");(C=c.createLinearGradient(500,0,0,200)).addColorStop(0,"#ff6f00"),C.addColorStop(1,"#ffca28"),(f=c.createLinearGradient(500,0,0,200)).addColorStop(0,"#ff6f00"),f.addColorStop(1,"#ffca28");new Chart(c,{type:"line",data:{labels:s,datasets:[{label:"My Second dataset",borderColor:C,pointColor:"#fff",pointBorderColor:C,pointBackgroundColor:"#fff",pointHoverBackgroundColor:C,pointHoverBorderColor:C,pointRadius:4,pointBorderWidth:1,pointHoverRadius:4,pointHoverBorderWidth:1,fill:!0,backgroundColor:f,borderWidth:1,data:[24,18,20,30,40,43]}]},options:n})}(window,document,jQuery);
