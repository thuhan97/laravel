
function validateFrm(){
var name=$("#name").val();
var gender= $('input[name=gender]:checked').val();
console.log(gender);
var faculty=$('#faculty').val()
var birthday_year=$("#birthday_year").val();
//console.log(x);
// alert(gender);
// alert(faculty);
// alert(birthday_year);
if(name==''){
	$("#error").html('<span id="error">Hay nhap ten</span>');
}
else if(gender === undefined){
	$("#error").html('<span id="error">Hay chon gioi tinh</span>');
}
// else if(gender!==){
// 	$("#error").html('<span id="error">Hay chon  gioi tinh</span>');
// }
else if(faculty === ''){
	$("#error").html('<span id="error">Hay chon phan khoa</span>');
}
else if(birthday_year ===''){
	$("#error").html('<span id="error">Hay nhap nam sinh</span>');
}
else return true;
return false;
}

