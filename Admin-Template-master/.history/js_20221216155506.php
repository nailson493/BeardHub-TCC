<script>
    function addRow(){
	var estilo=document.getElementById('estilo').value;
	var tempo=document.getElementById('tempo').value;
 
	if(estilo =="" || tempo ==""){
		alert("Por favor preencha todos os campos");
	}else{
		var parent=document.createElement('tr');
		var col1=document.createElement('td');
		var col2=document.createElement('p');
		var text1=document.createTextNode(estilo);
		var text2=document.createTextNode(tempo);
        parent.className="bg-white border-b dark:bg-gray-100 dark:border-gray-700";
        col1.className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black";
        col2.className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black";

		col1.appendChild(text1);
		col2.appendChild(text2);
		parent.appendChild(col1);
		parent.appendChild(col2);
 
		document.getElementById('result').appendChild(parent); 
		document.getElementById('estilo').value="";
		document.getElementById('lastname').value="";

		}
	}
</script>

<script>
	function myFunction() {
		document.getElementById('result').remove()
	}
	//quando você clicar no botão, o mesmo será deletado
</script>


<script>       
		
		function segunda() {
                d = document.getElementById("monday").value;
                if (d == 'open'){
                	document.getElementById("closed-monday").removeAttribute("disabled");
                	document.getElementById("open-monday").removeAttribute("disabled");                  
                } else if (d == 'closed'){  
                	document.getElementById('closed-monday').value="";
                	document.getElementById('open-monday').value="";
                	document.getElementById("closed-monday").setAttribute("disabled", "disabled");
                	document.getElementById("open-monday").setAttribute("disabled", "disabled");
                }
        }

			function terca() {
                d = document.getElementById("tuesday").value;
                if (d == 'open'){
                	document.getElementById("closed-tuesday").removeAttribute("disabled");
                	document.getElementById("open-tuesday").removeAttribute("disabled");                  
                } else if (d == 'closed'){  
                	document.getElementById('closed-tuesday').value="";
                	document.getElementById('open-tuesday').value="";
                	document.getElementById("closed-tuesday").setAttribute("disabled", "disabled");
                	document.getElementById("open-tuesday").setAttribute("disabled", "disabled");
                }
            }
			
			function quarta() {
                d = document.getElementById("wednesday").value;
                if (d == 'open'){
                	document.getElementById("closed-wednesday").removeAttribute("disabled");
                	document.getElementById("open-wednesday").removeAttribute("disabled");                  
                } else if (d == 'closed'){  
                	document.getElementById('closed-wednesday').value="";
                	document.getElementById('open-wednesday').value="";
                	document.getElementById("closed-wednesday").setAttribute("disabled", "disabled");
                	document.getElementById("open-wednesday").setAttribute("disabled", "disabled");
                }
            }
			
			function quinta() {
                d = document.getElementById("thursday").value;
                if (d == 'open'){
                	document.getElementById("closed-thursday").removeAttribute("disabled");
                	document.getElementById("open-thursday").removeAttribute("disabled");                  
                } else if (d == 'closed'){  
                	document.getElementById('closed-thursday').value="";
                	document.getElementById('open-thursday').value="";
                	document.getElementById("closed-thursday").setAttribute("disabled", "disabled");
                	document.getElementById("open-thursday").setAttribute("disabled", "disabled");
                }
            }
			
			function sexta() {
                d = document.getElementById("tuesday").value;
                if (d == 'open'){
                	document.getElementById("closed-tuesday").removeAttribute("disabled");
                	document.getElementById("open-tuesday").removeAttribute("disabled");                  
                } else if (d == 'closed'){  
                	document.getElementById('closed-tuesday').value="";
                	document.getElementById('open-tuesday').value="";
                	document.getElementById("closed-tuesday").setAttribute("disabled", "disabled");
                	document.getElementById("open-tuesday").setAttribute("disabled", "disabled");
                }
            }
			
			
			function sabado() {
                d = document.getElementById("tuesday").value;
                if (d == 'open'){
                	document.getElementById("closed-tuesday").removeAttribute("disabled");
                	document.getElementById("open-tuesday").removeAttribute("disabled");                  
                } else if (d == 'closed'){  
                	document.getElementById('closed-tuesday').value="";
                	document.getElementById('open-tuesday').value="";
                	document.getElementById("closed-tuesday").setAttribute("disabled", "disabled");
                	document.getElementById("open-tuesday").setAttribute("disabled", "disabled");
                }
            }	

			function domingo() {
                d = document.getElementById("tuesday").value;
                if (d == 'open'){
                	document.getElementById("closed-tuesday").removeAttribute("disabled");
                	document.getElementById("open-tuesday").removeAttribute("disabled");                  
                } else if (d == 'closed'){  
                	document.getElementById('closed-tuesday').value="";
                	document.getElementById('open-tuesday').value="";
                	document.getElementById("closed-tuesday").setAttribute("disabled", "disabled");
                	document.getElementById("open-tuesday").setAttribute("disabled", "disabled");
                }
            }	

</script>












