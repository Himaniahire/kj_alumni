var colors=["#727cf5","#0acf97","#fa5c7c","#ffbc00"],dataColors=$("#chart-one").data("colors"),options1={series:[65],chart:{type:"radialBar",height:81,width:81,sparkline:{enabled:!1}},plotOptions:{radialBar:{offsetY:0,hollow:{margin:0,size:"50%"},dataLabels:{name:{show:!1},value:{offsetY:5,fontSize:"14px",fontWeight:"600",formatter:function(o){return o+"k"}}}}},grid:{padding:{top:-18,bottom:-20,left:-20,right:-20}},colors:colors=dataColors?dataColors.split(","):colors},colors=(new ApexCharts(document.querySelector("#chart-one"),options1).render(),["#727cf5","#0acf97","#fa5c7c","#ffbc00"]),dataColors=$("#chart-two").data("colors"),options2={series:[75],chart:{type:"radialBar",height:81,width:81,sparkline:{enabled:!1}},plotOptions:{radialBar:{offsetY:0,hollow:{margin:0,size:"50%"},dataLabels:{name:{show:!1},value:{offsetY:5,fontSize:"14px",fontWeight:"600",formatter:function(o){return o+"k"}}}}},grid:{padding:{top:-18,bottom:-20,left:-20,right:-20}},colors:colors=dataColors?dataColors.split(","):colors},colors=(new ApexCharts(document.querySelector("#chart-two"),options2).render(),["#727cf5","#0acf97","#fa5c7c","#ffbc00"]),dataColors=$("#chart-three").data("colors"),options2={series:[75],chart:{type:"radialBar",height:81,width:81,sparkline:{enabled:!1}},plotOptions:{radialBar:{offsetY:0,hollow:{margin:0,size:"50%"},dataLabels:{name:{show:!1},value:{offsetY:5,fontSize:"14px",fontWeight:"600",formatter:function(o){return o+"k"}}}}},grid:{padding:{top:-18,bottom:-20,left:-20,right:-20}},colors:colors=dataColors?dataColors.split(","):colors},colors=(new ApexCharts(document.querySelector("#chart-three"),options2).render(),["#727cf5","#0acf97","#fa5c7c","#ffbc00"]),dataColors=$("#chart-four").data("colors"),options2={series:[75],chart:{type:"radialBar",height:81,width:81,sparkline:{enabled:!1}},plotOptions:{radialBar:{offsetY:0,hollow:{margin:0,size:"50%"},dataLabels:{name:{show:!1},value:{offsetY:5,fontSize:"14px",fontWeight:"600",formatter:function(o){return o+"k"}}}}},grid:{padding:{top:-18,bottom:-20,left:-20,right:-20}},colors:colors=dataColors?dataColors.split(","):colors};new ApexCharts(document.querySelector("#chart-four"),options2).render();