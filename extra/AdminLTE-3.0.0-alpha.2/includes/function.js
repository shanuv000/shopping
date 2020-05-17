

productMasterSearch();

	
function InsertProductMasterData(){
	
    var txt_pcode=$('#txt_pcode').val()
    var txt_pname=$('#txt_pname').val()
    var txt_pdesc=$('#txt_pdesc').val()
    var txt_pmrp=$('#txt_pmrp').val()
    var txt_prate=$('#txt_prate').val()
    var txt_ptax=$('#txt_ptax').val()
    var txt_pcat=$('#txt_pcat').val()
    var txt_pmodel=$('#txt_pmodel').val()
	$.ajax({
        type: 'post',
        url: 'ProductMasterInsert.php',
        data: { txt_pcode:txt_pcode,txt_pname:txt_pname,txt_pdesc:txt_pdesc,txt_pmrp:txt_pmrp,txt_prate:txt_prate,txt_ptax:txt_ptax,txt_pcat:txt_pcat,txt_pmodel:txt_pmodel
        },

        success: function (response) {
            $('#DispAllData').html(response);
			productMasterSearch()
        },
    });
}

function productMasterSearch(){
	$.ajax({
			url: 'p_master_search.php',
			success:function(data){
					$("#DispAllData").html(data)
				},
		})
	}
	

function EditData(id){
	$('#btn_submit').hide();
	$.ajax({		
		
		
			type:'POST',
			url: 'p_m_edit.php',
			data:{id:id},
			success:function(data){
					$("#DispAllData").html(data)
					productMasterSearch()
				},
		});
	}
	

function deleteData(id){
	$.ajax({
			type:'POST',
			url: 'p_master_delete.php',
			data:{id:id},
			success:function(data){
					$("#DispAllData").html(data)
					productMasterSearch()
				},
		})
	}
	

