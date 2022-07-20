//2100018060
// Memasukkan angka ke textarea
function insert(num){
	document.form.textarea.value = document.form.textarea.value + num;
}

// Fungsi Hitung
function equal(){
	var hasil = document.form.textarea.value;
	document.form.textarea.value = eval(hasil);
}

// Clean textview
function clean(){
	document.form.textarea.value = "";
}

// Delete angka satu demi satu
function back(){
	var hasil = document.form.textarea.value;
	document.form.textarea.value = hasil.substring(0,hasil.length-1);
}