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
                d = document.getElementById("segunda").value;
                if (d == 'aberto'){
                document.getElementById("closed-name").removeAttribute("disabled");
                document.getElementById("open-name").removeAttribute("disabled");                  
                } else if (d == 'fechado'){  
                document.getElementById('closed-segunda').value="";
                document.getElementById('open-segunda').value="";
                document.getElementById("closed-segunda").setAttribute("disabled", "disabled");
                document.getElementById("open-segunda").setAttribute("disabled", "disabled");
                }
            }
 	
	function terca() {
                d = document.getElementById("segunda").value;
                if (d == 'aberto'){
                	document.getElementById("closed-name").removeAttribute("disabled");
                	document.getElementById("open-name").removeAttribute("disabled");                  
                } else if (d == 'fechado'){  
                	document.getElementById('closed-segunda').value="";
                	document.getElementById('open-segunda').value="";
                	document.getElementById("closed-segunda").setAttribute("disabled", "disabled");
                	document.getElementById("open-segunda").setAttribute("disabled", "disabled");
                }
            }















</script>

