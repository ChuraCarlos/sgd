// $(document).ready(function (){
// 	buscar();
// });
const editar = (a,b) =>{

	$("#iden").val(a);
	$("#nombre").val(b);
}
const eliminar = (a) =>{
	$("#identi").val(a);
	$("#quitar").submit();
}
// const do_editar = () =>{
// 	let a = $("#iden").val();
// 	let b = $("#nombre").val();

// 	$.ajax({
// 		method:"POST",
// 		url:"/estado/buscar",
// 		data:{
// 			id:a,
// 			nombre:b,
// 			_token:$("input[name='_token']").val()
// 		},
// 		success:function(box){
// 			alert();
// 		}
// 	});
// }