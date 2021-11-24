function clearScreen() {
 document.getElementById("result").value = "";
}


function display(value) {
 document.getElementById("result").value += value;
}


function calculate() {
 var p = document.getElementById("result").value;
 var q = eval(p);
 document.getElementById("result").value = q;
}

function clearScreen() {
 document.getElementById("result").value = "";
}

function display(value) {
 document.getElementById("result").value += value;
}

function calculate() {
 var p = document.getElementById("result").value;
 var q = eval(p);
 document.getElementById("result").value = q;
}

function ajax(){
	let name = document.getElementById('result').value;

	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'calc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(result);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){

			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}
