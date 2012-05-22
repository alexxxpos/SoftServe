 $(document).ready(function() {
   
	var a=new Array();
	var b=new Array();
	for (var i = 0;i<1000;i++){ 
	a[i]=Math.random();
	$("#first").append(a[i]);
	$("#first").append("  |  ");
	
		if((a[i]>=0.2)&&(a[i]<=0.5)){
			j=b.length;
			b[j]=a[i];
			$("#second").append(b[j]);
			$("#second").append(" | ");
		}	

	}


 });