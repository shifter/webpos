	<script>
		/*patientinfo_edit*/
       /* var btn_patientinfo_edit='<button class="btn btn-success btn-xs" name="edit_info"   data-toggle="tooltip" data-placement="left" title="Edit" style="margin-left:5px;"><i class="fa fa-pencil-square-o"></i> </button>';
        var btn_patientinfo_trash='<button class="btn btn-danger btn-xs" name="remove_info"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash"></i> </button>';
        *
        //*patient prescription buttons*/
        var edit_prescription='<button class="btn btn-success btn-xs" name="edit_prescription_details"   data-toggle="tooltip" data-placement="left" title="Edit Details" style="margin-left:5px;"><i class="fa fa-pencil-square-o"></i> </button>';
        var delete_prescription='<button class="btn btn-danger btn-xs" name="remove_prescription"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash"></i> </button>';
		/*patient lab buttons*/
        var edit_lab='<button class="btn btn-success btn-xs" name="edit_lab_details"   data-toggle="tooltip" data-placement="left" title="Edit Details" style="margin-left:5px;"><i class="fa fa-pencil-square-o"></i> </button>';
        var remove_lab='<button class="btn btn-danger btn-xs" name="remove_lab"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash"></i> </button>';
		/*patient billing buttons*/
		var edit_billing='<button class="btn btn-success btn-xs" name="edit_billing_details"   data-toggle="tooltip" data-placement="left" title="Edit Details" style="margin-left:5px;"><i class="fa fa-pencil-square-o"></i> </button>';
        var remove_billing='<button class="btn btn-danger btn-xs" name="remove_billing"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash"></i> </button>';
		/*patient visiting buttons*/
		var edit_visiting='<button class="btn btn-success btn-xs" name="edit_visiting_record"   data-toggle="tooltip" data-placement="left" title="Edit Details" style="margin-left:5px;"><i class="fa fa-pencil-square-o"></i> </button>';
        var remove_visiting='<button class="btn btn-danger btn-xs" name="remove_visiting_record"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash"></i> </button>';
		/*patient visiting buttons*/
		var edit_clinical='<button class="btn btn-success btn-xs" name="edit_clinical"   data-toggle="tooltip" data-placement="left" title="Edit Details" style="margin-left:5px;"><i class="fa fa-pencil-square-o"></i> </button>';
        
		/*ref patient button*/
		var btn_refpatient_edit='<button class="btn btn-success btn-xs" name="edit_info"   data-toggle="tooltip" data-placement="left" title="Edit" style="margin-left:5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>';
        var btn_refpatient_trash='<button class="btn btn-danger btn-xs" name="remove_info"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash" aria-hidden="true"></i></button>';
		/*service button*/
		var btn_services_edit='<button class="btn btn-success btn-xs" name="edit_info"   data-toggle="tooltip" data-placement="left" title="Edit" style="margin-left:5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>';
        var btn_services_trash='<button class="btn btn-danger btn-xs" name="remove_info"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash" aria-hidden="true"></i> </button>';
		/*service ref buttons*/
		var btn_refservice_edit='<button class="btn btn-success btn-xs" name="edit_info"   data-toggle="tooltip" data-placement="left" title="Edit" style="margin-left:5px;"><i class="fa fa-pencil-square-o"></i> </button>';
        var btn_refservice_trash='<button class="btn btn-danger btn-xs" name="remove_info"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash"></i> </button>';
		/*user accounts dt buttons */
		var btn_user_edit='<button class="btn btn-success btn-xs" name="edit_info"   data-toggle="tooltip" data-placement="left" title="Edit" style="margin-left:5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>';
    	var btn_user_trash='<button class="btn btn-danger btn-xs" name="remove_info"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash"></i> </button>';
		/*user group dt buttons*/
		var btn_usergroup_edit='<button class="btn btn-success btn-xs" name="edit_info"   data-toggle="tooltip" data-placement="left" title="Edit" style="margin-left:5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>';
		var btn_usergroup_trash='<button class="btn btn-danger btn-xs" name="remove_info"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash"></i> </button>';

		/*nephro record button*/
		var btn_nephrorecord_edit='<button class="btn btn-success btn-xs" name="edit_info"   data-toggle="tooltip" data-placement="left" title="Edit" style="margin-left:5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>';
        var btn_nephrorecord_trash='<button class="btn btn-danger btn-xs" name="remove_info"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="fa fa-trash" aria-hidden="true"></i></button>';

	</script>

	<!-- rights start -->
<?php
	echo ($this->session->right_patientinfo_view==0 || NULL ? '<script> $(".right_nephrorecord_view").remove(); </script>' : '');
	echo ($this->session->right_patientinfo_create==0 || NULL ? '<script> $(".right_patientinfo_create").remove(); </script>' : '');
	echo ($this->session->right_patientinfo_edit==0 || NULL ? '<script> var btn_nephrorecord_edit=" "; </script>' : '');
 	echo ($this->session->right_patientinfo_delete==0 || NULL ? '<script> var btn_nephrorecord_trash=" "; </script>' : '');

 	echo ($this->session->right_prescription_view==0 || NULL ? '<script> $(".right_prescription_view").remove(); </script>' : '');
	echo ($this->session->right_prescription_create==0 || NULL ? '<script> $(".right_prescription_create").remove(); </script>' : '');
	echo ($this->session->right_prescription_edit==0 || NULL ? '<script> var edit_prescription=" "; </script>' : '');
 	echo ($this->session->right_prescription_delete==0 || NULL ? '<script> var delete_prescription=" "; </script>' : '');

 	echo ($this->session->right_medlab_view==0 || NULL ? '<script> $(".right_medlab_view").remove(); </script>' : '');
	echo ($this->session->right_medlab_create==0 || NULL ? '<script> $(".right_medlab_create").remove(); </script>' : '');
	echo ($this->session->right_medlab_edit==0 || NULL ? '<script> var edit_prescription=" "; </script>' : '');
 	echo ($this->session->right_medlab_delete==0 || NULL ? '<script> var delete_prescription=" "; </script>' : '');

 	echo ($this->session->right_billing_view==0 || NULL ? '<script> $(".right_billing_view").remove(); </script>' : '');
	echo ($this->session->right_billing_create==0 || NULL ? '<script> $(".right_billing_create").remove(); </script>' : '');
	echo ($this->session->right_billing_edit==0 || NULL ? '<script> var edit_prescription=" "; </script>' : '');
 	echo ($this->session->right_billing_delete==0 || NULL ? '<script> var delete_prescription=" "; </script>' : '');

 	echo ($this->session->right_visiting_view==0 || NULL ? '<script> $(".right_visiting_view").remove(); </script>' : '');
	echo ($this->session->right_visiting_create==0 || NULL ? '<script> $(".right_visiting_create").remove(); </script>' : '');
	echo ($this->session->right_visiting_edit==0 || NULL ? '<script> var edit_prescription=" "; </script>' : '');
 	echo ($this->session->right_visiting_delete==0 || NULL ? '<script> var delete_prescription=" "; </script>' : '');

 	echo ($this->session->right_clinicaldb_view==0 || NULL ? '<script> $(".right_clinical_view").remove(); </script>' : '');
	echo ($this->session->right_clinicaldb_create==0 || NULL ? '<script> $(".right_clinicaldb_create").remove(); </script>' : '');
	echo ($this->session->right_clinicaldb_edit==0 || NULL ? '<script> var edit_clinical=" "; </script>' : '');

 	echo ($this->session->right_medabstract_view==0 || NULL ? '<script> $(".right_medabstract_view").remove(); </script>' : '');
	echo ($this->session->right_medabstract_create==0 || NULL ? '<script> $(".right_medabstract_create").remove(); </script>' : '');

	echo ($this->session->right_nephro_view==0 || NULL ? '<script> $(".right_nephro_view").remove(); </script>' : '');
	echo ($this->session->right_nephro_create==0 || NULL ? '<script> $(".right_nephro_create").remove(); </script>' : '');

	echo ($this->session->right_labreport_view==0 || NULL ? '<script> $(".right_labreport_view").remove(); </script>' : '');
	echo ($this->session->right_labreport_create==0 || NULL ? '<script> $(".right_labreport_create").remove(); </script>' : '');

	echo ($this->session->right_medcert_view==0 || NULL ? '<script> $(".right_medcert_view").remove(); </script>' : '');
	echo ($this->session->right_medcert_create==0 || NULL ? '<script> $(".right_medcert_create").remove(); </script>' : '');

	echo ($this->session->right_patientref_view==0 || NULL ? '<script> $(".right_patientref_view").remove(); </script>' : '');
	echo ($this->session->right_patientref_create==0 || NULL ? '<script> $(".right_patientref_create").remove(); </script>' : '');
	echo ($this->session->right_patientref_edit==0 || NULL ? '<script> var btn_refpatient_edit=" "; </script>' : '');
 	echo ($this->session->right_patientref_delete==0 || NULL ? '<script> var btn_refpatient_trash=" "; </script>' : '');

	echo ($this->session->right_services_view==0 || NULL ? '<script> $(".right_services_view").remove(); </script>' : '');
	echo ($this->session->right_services_create==0 || NULL ? '<script> $(".right_services_create").remove(); </script>' : '');
	echo ($this->session->right_services_edit==0 || NULL ? '<script> var btn_services_edit=" "; </script>' : '');
 	echo ($this->session->right_services_delete==0 || NULL ? '<script> var btn_services_trash=" "; </script>' : '');

	echo ($this->session->right_servicedesc_view==0 || NULL ? '<script> $(".right_servicedesc_view").remove(); </script>' : '');
	echo ($this->session->right_servicedesc_create==0 || NULL ? '<script> $(".right_servicedesc_create").remove(); </script>' : '');
	echo ($this->session->right_servicedesc_edit==0 || NULL ? '<script> var btn_refservice_edit=" "; </script>' : '');
 	echo ($this->session->right_servicedesc_delete==0 || NULL ? '<script> var btn_refservice_trash=" "; </script>' : '');

 	echo ($this->session->right_useraccount_view==0 || NULL ? '<script> $(".right_useraccount_view").remove(); </script>' : '');
	echo ($this->session->right_useraccount_create==0 || NULL ? '<script> $(".right_useraccount_create").remove(); </script>' : '');
	echo ($this->session->right_useraccount_edit==0 || NULL ? '<script> var btn_user_edit=" "; </script>' : '');
 	echo ($this->session->right_useraccount_delete==0 || NULL ? '<script> var btn_user_trash=" "; </script>' : '');

 	echo ($this->session->right_usergroup_view==0 || NULL ? '<script> $(".right_usergroup_view").remove(); </script>' : '');
	echo ($this->session->right_usergroup_create==0 || NULL ? '<script> $(".right_usergroup_create").remove(); </script>' : '');
	echo ($this->session->right_usergroup_edit==0 || NULL ? '<script> var btn_usergroup_edit=" "; </script>' : '');
 	echo ($this->session->right_usergroup_delete==0 || NULL ? '<script> var btn_usergroup_trash=" "; </script>' : '');

?>
  