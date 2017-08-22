
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $_def_css_files ?> 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    td.patient-details {
        cursor: pointer;
    }
    .modal { overflow: auto !important; }
    .btn-group-sm .btn-fab{
      position: fixed !important;
      right: 29px;
    }
    .btn-group .btn-fab{
      position: fixed !important;
      right: 20px;
    }
    #main{
      bottom: 20px;
    }
    #mail{
      bottom: 80px
    }
    #sms{
      bottom: 125px
    }
    #autre{
      bottom: 170px
    }
    .imagelight{
            }
    .margin{
        margin-top:3px !important;
    }
    .onemargin{
        margin-top:1px !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    
    <?php echo $_top_navigation; ?>
    <?php echo $_side_navigation; ?>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Patient Information
        <small>info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Patient Information</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header" style="">
              <button class="btn btn-success right_patientinfo_create" id="btn_new"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Patient Information</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive" style="overflow:hidden;">
              <table id="tbl_patientinfo" class="table table-bordered table-striped">
                <thead class="tbl-header">
                    <tr>
                        <th ></th>
                        <th >Attending Physician</th>
                        <th >Treatment No.</th>
                        <th >Patient Name</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th >Attending Physician</th>
                        <th >Treatment No.</th>
                        <th >Patient Name</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          <!-- modal patient info-->
        <div id="modal_patient_Info" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bgm-green">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title">Create New Patient Info</h4>
                        </div>
                        <div class="modal-body">
                            <div role="tabpanel" class="container-fluid">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                      <li class=""><a href="#settings11" data-toggle="tab" aria-expanded="false">Step 4</a></li>
                                      <li class=""><a href="#messages11" data-toggle="tab" aria-expanded="true">Step 3</a></li>
                                      <li class=""><a href="#profile11" data-toggle="tab" aria-expanded="false">Step 2</a></li>
                                      <li class="active"><a href="#home11" data-toggle="tab" aria-expanded="false">Step 1</a></li>
                                      <li class="pull-left header"><i class="fa fa-th"></i> Pages</li>
                                    </ul>
                                    <!-- /.tab-content -->
                                  </div>
                                <form id="frm_patientinfo" role="form">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home11">
                                        <h3 style="color:#2c3e50;">Patient Information</h3>
                                        <hr style="border:1px solid #2c3e50"></hr>
                                        <div class="col-md-12" style="padding-bottom:0px;,margin:0px;">
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1">* Attending Physician</label>
                                                        <div class="fg-line fg-toggled">
                                                            <input type="text" data-toggle="tooltip" data-original-title="Attending Physician" class="form-control" name="attending_physc" placeholder="Physician Name" data-error-msg="Attending Physician is required!" required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1">* Treatment No</label>
                                                        <div class="fg-line">
                                                            <input type="text" data-toggle="tooltip" data-original-title="Treatment #" class="form-control" name="treatment_no" placeholder="Physician Name" data-error-msg="Treatment No!" required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;" data-toggle="tooltip" data-original-title="Cash">
                                                        <input type="checkbox" id="cash">
                                                        <i class="input-helper"></i>
                                                        Cash
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;" data-toggle="tooltip" data-original-title="PCSO">
                                                        <input type="checkbox" id="pcso" value="" >
                                                        <i class="input-helper"></i>
                                                        PCSO
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;" data-toggle="tooltip" data-original-title="Philhealth">
                                                        <input type="checkbox" id="philhealth" value="">
                                                        <i class="input-helper"></i>
                                                        Philhealth
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                           <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Lastname</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Lastname" name="lastname" class="form-control" placeholder="Last Name" data-error-msg="Last Name is required" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Firstname</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="firstname" data-toggle="tooltip" data-original-title="Firstname" class="form-control" placeholder="First Name" data-error-msg="First Name is required" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Middlename</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="middlename" data-toggle="tooltip" data-original-title="Middlename" class="form-control" placeholder="Middle Name">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-md-6">
                                                <div class="form-group" data-toggle="tooltip" data-original-title="Patient Name">
                                                <label for="exampleInputEmail1"> Patient Name :</label>
                                                <select class="form-control select2" name="ref_patient_id" id="ref_patient_id" data-placeholder="Choose a Patient..." data-error-msg="Patient Name is required" required>
                                                     <option value="0">[ New Patient ]</option>
                                                     <?php
                                                        foreach($patient_name as $row)
                                                        {
                                                            echo '<option value="'.$row->ref_patient_id  .'">'.$row->fullname.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Sex</label>
                                                    <div class="fg-line">
                                                        <div class="select">
                                                            <select class="form-control" name="sex" data-toggle="tooltip" data-original-title="Sex">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Na</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="na" class="form-control" placeholder="Na" data-toggle="tooltip" data-original-title="NA">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Height(foot)</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="height" data-toggle="tooltip" data-original-title="Height(foot)" class="form-control" placeholder="Height(foot) eg 5'8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dry Weight(kg)</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Dry Weight(kg)" name="dry_weight" class="form-control" placeholder="Dry Weight(kilogram)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1">Temp(C)</lab el>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Temp(C)" name="temp" class="form-control" placeholder="Temp Celsius">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Pre-HD Weight</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Pre-HD Weight" name="pre_hd_weight" class="form-control" placeholder="Pre-HD Weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Previous Post Hd Weight</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Previous Post HD Weight" name="pre_post_hd_weight" class="form-control" placeholder="Previous Post Hd Weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Weight Gain</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Weight Gain" name="weight_gain" class="form-control" placeholder="Weight Gain">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Post HD Weight(kg)</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Post HD Weight(kg)" name="post_hd_weight" class="form-control" placeholder="Post HD Weight(kilograms)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> UF Goal</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="UF Goal" name="uf_goal" class="form-control" placeholder="UF Goal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Duration</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Duration" name="duration" class="form-control" placeholder="Duration">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dialyzer</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Dialyzer" name="dialyzer" class="form-control" placeholder="Dialyzer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Hepatitis Status</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Clean" style="margin-top:5px;">
                                                        <input type="checkbox" id="clean" value="clean" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Clean
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hepatitis B" style="margin-top:5px;">
                                                        <input type="checkbox" id="hepatitis_b" value="hepatitis_b" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Hepatitis B
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hepatitis C" style="margin-top:5px;">
                                                        <input type="checkbox" id="hepatitis_c" value="hepatitis_c" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Hepatitis C
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Other</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Anticoagulant" style="margin-top:5px;">
                                                        <input type="checkbox" id="anticoagulant" value="1">
                                                        <i class="input-helper"></i>
                                                        Anticoagulant
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Routine Heparin(2-1-1)" style="margin-top:5px;">
                                                        <input type="checkbox" id="routine_heparin" value="option1">
                                                        <i class="input-helper"></i>
                                                        Routine Heparin(2-1-1)
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Low Dose Heparin(1-5-5)">
                                                        <input type="checkbox" id="lowdoseheparin"value="option1">
                                                        <i class="input-helper"></i>
                                                        Low Dose Heparin(1-5-5)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> PNSS Flushing</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="PNSS Flushing" name="other_pnssflushing" class="form-control" placeholder="PNSS Flushing">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> LMWH</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="other_lmwh" data-toggle="tooltip" data-original-title="LMWH" class="form-control" placeholder="Duration">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> KCL/Meqs</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="KCL/Meqs" name="kcl" class="form-control" placeholder="Dialyzer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                           <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dialysis Bath</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Dialysis Bath" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialysisbath_bicarbonate" value="option1">
                                                        <i class="input-helper"></i>
                                                        Bicarbonate
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dialysis Acid</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Dialysis Acid" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialysisacid_hd144a" value="option1">
                                                        <i class="input-helper"></i>
                                                        HD 144 A
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> QB</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="QB" name="qb" class="form-control" placeholder="QB">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> QD</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="QD" name="qd" class="form-control" placeholder="QD">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> No. of use</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Number of Use" name="no_of_use" class="form-control" placeholder="No. of use">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dialyzer</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Conventional" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_conventional" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        Conventional
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="High Efficiency" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_highefficiency" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        High Efficiency
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="High Flux" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_highflux" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        High Flux
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Renalin Strip Test" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_renalinstrip" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        Renalin Strip Test
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Others</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="Other Dialyzer" id="other_dialyzer" class="form-control" placeholder="Other Dialyzer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile11">
                                        <div class="col-md-6">
                                            <!-- ROW 1 -->
                                            <div class="row">
                                                <center><h4 style="color:#2c3e50;">PRE-HD</h4></center>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <center>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Ambulatory" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_ambulatory">
                                                        <i class="input-helper"></i>
                                                        Ambulatory
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Wheelchair" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_wheelchair">
                                                        <i class="input-helper"></i>
                                                        WheelChair
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Bed Stretcher" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_bedstretcher">
                                                        <i class="input-helper"></i>
                                                        Bed Stretcher
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Ambulatory W/ Assistance" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_ambulatory_assistance">
                                                        <i class="input-helper"></i>
                                                        Ambulatory w/ Assistance
                                                    </label>
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> Date and Time Arrived</label>
                                                        <div class="fg-line">
                                                            <input type="text" data-toggle="tooltip" data-original-title="Date and Time Arrrived" name="prehd_date_time_arrived" class="form-control date-time-picker" placeholder="Date Time Arrived" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> BP</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="tooltip" data-original-title="BP" name="prehd_bp" class="form-control" placeholder="BP" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1"  style="font-weight: bold;margin-top: 5px;"> HR</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="tooltip" data-original-title="HR" name="prehd_hr" class="form-control" placeholder="HR" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> RR</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="tooltip" data-original-title="RR" name="prehd_rr" class="form-control" placeholder="RR" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> TEMP</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="tooltip" data-original-title="TEMP" name="prehd_temp" class="form-control" placeholder="TEMP" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </div>

                                            <!--ROW-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Pulse (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Regular" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_pulse_regular">
                                                                <i class="input-helper"></i>
                                                                Regular
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Irregular" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_pulse_irregular">
                                                                <i class="input-helper"></i>
                                                                Irregular
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Lungs (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Clear" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_clear">
                                                                <i class="input-helper"></i>
                                                                Clear
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Crackles" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_crackles">
                                                                <i class="input-helper"></i>
                                                                Crackles
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="DOB" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_dob">
                                                                <i class="input-helper"></i>
                                                                DOB
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Wheezing" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_wheezzing">
                                                                <i class="input-helper"></i>
                                                                Wheezing
                                                            </label><br>
                                                             <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hemoptysis" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_hemoptysis">
                                                                <i class="input-helper"></i>
                                                                Hemoptysis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Neuro (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Comatose" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_neuro_comatose">
                                                                <i class="input-helper"></i>
                                                                Comatose
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Lethargic" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_neuro_lethargic">
                                                                <i class="input-helper"></i>
                                                                Lethargic
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Conscious" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_neuro_conscious">
                                                                <i class="input-helper"></i>
                                                                Conscious
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="GCS" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_neuro_gcs">
                                                                <i class="input-helper"></i>
                                                                GCS
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> EDEMA (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="None" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_none" value="option1">
                                                                <i class="input-helper"></i>
                                                                None
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Facial" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_facial" value="option1">
                                                                <i class="input-helper"></i>
                                                                Facial
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Pedal" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_pedal" value="option1">
                                                                <i class="input-helper"></i>
                                                                Pedal
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Periorbital" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_periorbital" value="option1">
                                                                <i class="input-helper"></i>
                                                                Periorbital
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Ascitis" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_ascitis" value="option1">
                                                                <i class="input-helper"></i>
                                                                Ascitis
                                                            </label><br>
                                                            <center><label style="margin-top:5px;">
                                                                <div class="fg-line">
                                                                <input type="text" data-toggle="tooltip" data-original-title="EDEMA( OTHERS )" class="form-control" name="prehd_edema_other">
                                                                </div>
                                                                <i class="input-helper"></i>
                                                                Others
                                                            </label></center>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> GASTRO (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Good Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_good_appetite">
                                                                <i class="input-helper"></i>
                                                                Good Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="No Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_no_appetite">
                                                                <i class="input-helper"></i>
                                                                No Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Fair Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_fair_appetite">
                                                                <i class="input-helper"></i>
                                                                Fair Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Melena" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_melena">
                                                                <i class="input-helper"></i>
                                                                Melena
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hematochezia" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_hematochezia">
                                                                <i class="input-helper"></i>
                                                                Hematochezia
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hematemesis" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_hematemesis">
                                                                <i class="input-helper"></i>
                                                                Hematemesis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Skin Color (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Normal" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_skincolor_normal">
                                                                <i class="input-helper"></i>
                                                                Normal
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Pale" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_skincolor_pale">
                                                                <i class="input-helper"></i>
                                                                Pale
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Cyanotic" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_skincolor_cyanotic">
                                                                <i class="input-helper"></i>
                                                                Cyanotic
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Turgor (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Good" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_turgor_good">
                                                                <i class="input-helper"></i>
                                                                Good
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Poor" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_turgor_poor">
                                                                <i class="input-helper"></i>
                                                                Poor
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Others (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Ecchymosis" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_others_ecchymosis">
                                                                <i class="input-helper"></i>
                                                                Ecchymosis
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Bruises" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_others_bruises">
                                                                <i class="input-helper"></i>
                                                                Bruises
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Neck Veins (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Flat" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_neckveins_flat">
                                                                <i class="input-helper"></i>
                                                                Flat
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Slightly Distented" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_neckveins_slightlydistented">
                                                                <i class="input-helper"></i>
                                                                Slightly Distented
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Distented" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_neckveins_distented">
                                                                <i class="input-helper"></i>
                                                                Distented
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Genito-Urinary (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hematuria" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_genitourinary_hematuria">
                                                                <i class="input-helper"></i>
                                                                Hematuria
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Dysuria"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_genitourinary_dysuria">
                                                                <i class="input-helper"></i>
                                                                Dysuria
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Menstruation"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_genitourinary_menstruation">
                                                                <i class="input-helper"></i>
                                                                Menstruation
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Problems/Complaints (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="None"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_problems_none">
                                                                <i class="input-helper"></i>
                                                                None
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Chest Pain"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_problems_chest_pain">
                                                                <i class="input-helper"></i>
                                                                Chest Pain
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Cough"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_problems_cough">
                                                                <i class="input-helper"></i>
                                                                Cough
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Abdominal Pain"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_problems_abdominal_pain">
                                                                <i class="input-helper"></i>
                                                                Abdominal Pain
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="LBM"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_problems_lbm">
                                                                <i class="input-helper"></i>
                                                                LBM
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Orthopnea"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_problems_orthopnea">
                                                                <i class="input-helper"></i>
                                                                Orthopnea
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Fever"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_problems_fever">
                                                                <i class="input-helper"></i>
                                                                Fever
                                                            </label>
                                                            <div class="fg-line">
                                                            <input type="text" class="form-control"  data-toggle="tooltip" data-original-title="Specify Other Problems"  name="posthd_problems_others" placeholder="Others (Specify)" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Vascular Access (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20"  data-toggle="tooltip" data-original-title="PC"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_vascularaccess_pc">
                                                                <i class="input-helper"></i>
                                                                PC
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20"  data-toggle="tooltip" data-original-title="TLC"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_vascularaccess_tlc">
                                                                <i class="input-helper"></i>
                                                                TLC
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20"  data-toggle="tooltip" data-original-title="AVF"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_vascularaccess_avf">
                                                                <i class="input-helper"></i>
                                                                AVF
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20"  data-toggle="tooltip" data-original-title="AVG (L/R)"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_vascularaccess_avg">
                                                                <i class="input-helper"></i>
                                                                AVG (L/R)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Bruit"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_bruit">
                                                                <i class="input-helper"></i>
                                                                Bruit
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Thrill (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20"  data-toggle="tooltip" data-original-title="Strong"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_strong">
                                                                <i class="input-helper"></i>
                                                                Strong
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Weak"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_weak">
                                                                <i class="input-helper"></i>
                                                                Weak
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Patent"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_patent">
                                                                <i class="input-helper"></i>
                                                                Patent
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Clotted"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_clotted">
                                                                <i class="input-helper"></i>
                                                                Clotted
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Redness"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_redness">
                                                                <i class="input-helper"></i>
                                                                Redness
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Swelling"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_swelling">
                                                                <i class="input-helper"></i>
                                                                Swelling
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hematoma"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_hematoma">
                                                                <i class="input-helper"></i>
                                                                Hematoma
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Pus Secretion"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_pus_secretion">
                                                                <i class="input-helper"></i>
                                                                Pus Secretion
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="No Signs and Symptoms"  style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_thrill_no_signs">
                                                                <i class="input-helper"></i>
                                                                No Sign and Symptoms
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--END TAG after 2 rows-->
                                        </div><!--END TAG for col-md-6-->
                                        <div class="col-md-6"><!--OTHER HALF col-md-6-->
                                            <div class="row">
                                                <center><h4 style="color:#2c3e50;">POST-HD</h4></center>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <center>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Ambulatory" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_ambulatory">
                                                        <i class="input-helper"></i>
                                                        Ambulatory
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Wheelchair" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_wheelchair">
                                                        <i class="input-helper"></i>
                                                        WheelChair
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Bed Stretcher" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_bedstretcher">
                                                        <i class="input-helper"></i>
                                                        Bed Stretcher
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Ambulatory W/ Assistance" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_ambulatory_assistance">
                                                        <i class="input-helper"></i>
                                                        Ambulatory w/ Assistance
                                                    </label>
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> Date and Time Discharged</label>
                                                        <div class="fg-line">
                                                            <input type="text" data-toggle="tooltip" data-original-title="Date and Time Discharged" name="posthd_date_time_discharged" class="form-control date-time-picker" placeholder="Date and Time Discharged" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> BP</label>
                                                            <div class="fg-line">
                                                                <input type="text"  data-toggle="tooltip" data-original-title="BP" name="posthd_bp" class="form-control" placeholder="BP" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1" data-toggle="tooltip" data-original-title="HR" style="font-weight: bold;margin-top: 5px;"> HR</label>
                                                            <div class="fg-line">
                                                                <input type="text" name="posthd_hr" class="form-control" placeholder="HR" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1" data-toggle="tooltip" data-original-title="RR" style="font-weight: bold;margin-top: 5px;"> RR</label>
                                                            <div class="fg-line">
                                                                <input type="text" name="posthd_rr" class="form-control" placeholder="RR" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1" data-toggle="tooltip" data-original-title="TEMP" style="font-weight: bold;margin-top: 5px;"> TEMP</label>
                                                            <div class="fg-line">
                                                                <input type="text" name="posthd_temp" class="form-control" placeholder="TEMP" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </div>

                                            <!--ROW-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Pulse (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Regular" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_pulse_regular">
                                                                <i class="input-helper"></i>
                                                                Regular
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Irregular" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_pulse_irregular">
                                                                <i class="input-helper"></i>
                                                                Irregular
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Lungs (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Clear" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_clear">
                                                                <i class="input-helper"></i>
                                                                Clear
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Crackles" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_crackles">
                                                                <i class="input-helper"></i>
                                                                Crackles
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="DOB" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_dob">
                                                                <i class="input-helper"></i>
                                                                DOB
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Wheezing" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_wheezzing">
                                                                <i class="input-helper"></i>
                                                                Wheezing
                                                            </label><br>
                                                             <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hemoptysis" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_hemoptysis">
                                                                <i class="input-helper"></i>
                                                                Hemoptysis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Neuro (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20"  data-toggle="tooltip" data-original-title="Comatose" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neuro_comatose">
                                                                <i class="input-helper"></i>
                                                                Comatose
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Lethargic" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neuro_lethargic">
                                                                <i class="input-helper"></i>
                                                                Lethargic
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20"  data-toggle="tooltip" data-original-title="Conscious" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neuro_conscious">
                                                                <i class="input-helper"></i>
                                                                Conscious
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="GCS" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neuro_gcs">
                                                                <i class="input-helper"></i>
                                                                GCS
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> EDEMA (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="None" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_none" value="option1">
                                                                <i class="input-helper"></i>
                                                                None
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Facial" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_facial" value="option1">
                                                                <i class="input-helper"></i>
                                                                Facial
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Pedal" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_pedal" value="option1">
                                                                <i class="input-helper"></i>
                                                                Pedal
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Periorbital" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_periorbital" value="option1">
                                                                <i class="input-helper"></i>
                                                                Periorbital
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Ascitis" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_ascitis" value="option1">
                                                                <i class="input-helper"></i>
                                                                Ascitis
                                                            </label><br>
                                                            <center><label style="margin-top:5px;">
                                                                <div class="fg-line">
                                                                <input type="text" class="form-control" data-toggle="tooltip" data-original-title="Edema Others" name="posthd_edema_other" value="option1">
                                                                </div>
                                                                <i class="input-helper"></i>
                                                                Others
                                                            </label></center>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> GASTRO (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Good Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_good_appetite">
                                                                <i class="input-helper"></i>
                                                                Good Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="No Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_no_appetite">
                                                                <i class="input-helper"></i>
                                                                No Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Fair Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_fair_appetite">
                                                                <i class="input-helper"></i>
                                                                Fair Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Melena" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_melena">
                                                                <i class="input-helper"></i>
                                                                Melena
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hematochezia" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_hematochezia">
                                                                <i class="input-helper"></i>
                                                                Hematochezia
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hematemesis" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_hematemesis">
                                                                <i class="input-helper"></i>
                                                                Hematemesis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Skin Color (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Normal" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_skincolor_normal">
                                                                <i class="input-helper"></i>
                                                                Normal
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Pale" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_skincolor_pale">
                                                                <i class="input-helper"></i>
                                                                Pale
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Cyanotic" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_skincolor_cyanotic">
                                                                <i class="input-helper"></i>
                                                                Cyanotic
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Turgor (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Good" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_turgor_good">
                                                                <i class="input-helper"></i>
                                                                Good
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Poor" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_turgor_poor">
                                                                <i class="input-helper"></i>
                                                                Poor
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Others (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Ecchymosis" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_others_ecchymosis">
                                                                <i class="input-helper"></i>
                                                                Ecchymosis
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Bruises" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_others_bruises">
                                                                <i class="input-helper"></i>
                                                                Bruises
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Neck Veins (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Flat" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neckveins_flat">
                                                                <i class="input-helper"></i>
                                                                Flat
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Slightly Distented" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neckveins_slightlydistented">
                                                                <i class="input-helper"></i>
                                                                Slightly Distented
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Distented" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neckveins_distented">
                                                                <i class="input-helper"></i>
                                                                Distented
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Genito-Urinary (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hematuria" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_genitourinary_hematuria">
                                                                <i class="input-helper"></i>
                                                                Hematuria
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20"  data-toggle="tooltip" data-original-title="Dysuria" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_genitourinary_dysuria">
                                                                <i class="input-helper"></i>
                                                                Dysuria
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Menstruation" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_genitourinary_menstruation">
                                                                <i class="input-helper"></i>
                                                                Menstruation
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Problems/Complaints (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="None" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_none">
                                                                <i class="input-helper"></i>
                                                                None
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Chest Pain" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_chest_pain">
                                                                <i class="input-helper"></i>
                                                                Chest Pain
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Cough" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_cough">
                                                                <i class="input-helper"></i>
                                                                Cough
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Abdominal Pain" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_abdominal_pain">
                                                                <i class="input-helper"></i>
                                                                Abdominal Pain
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="LBM" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_lbm">
                                                                <i class="input-helper"></i>
                                                                LBM
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Orthopnea" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_orthopnea">
                                                                <i class="input-helper"></i>
                                                                Orthopnea
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Fever" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_fever">
                                                                <i class="input-helper"></i>
                                                                Fever
                                                            </label>
                                                            <div class="fg-line">
                                                            <input type="text" class="form-control"  data-toggle="tooltip" data-original-title="Specify Other Problems" name="posthd_problems_others" placeholder="Others (Specify)" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Vascular Access (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="PC" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_vascularaccess_pc">
                                                                <i class="input-helper"></i>
                                                                PC
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="TLC" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_vascularaccess_tlc">
                                                                <i class="input-helper"></i>
                                                                TLC
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="AVF" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_vascularaccess_avf">
                                                                <i class="input-helper"></i>
                                                                AVF
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="AVG(L/R)" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_vascularaccess_avg">
                                                                <i class="input-helper"></i>
                                                                AVG (L/R)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Bruit" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_bruit">
                                                                <i class="input-helper"></i>
                                                                Bruit
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <div class="col-md-12">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1"> Thrill (Multiple)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Strong" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_strong">
                                                                <i class="input-helper"></i>
                                                                Strong
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Weak" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_weak">
                                                                <i class="input-helper"></i>
                                                                Weak
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Patent" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_patent">
                                                                <i class="input-helper"></i>
                                                                Patent
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Clotted" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_clotted">
                                                                <i class="input-helper"></i>
                                                                Clotted
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Redness" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_redness">
                                                                <i class="input-helper"></i>
                                                                Redness
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Swelling" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_swelling">
                                                                <i class="input-helper"></i>
                                                                Swelling
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Hematoma" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_hematoma">
                                                                <i class="input-helper"></i>
                                                                Hematoma
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Pus Secretion" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_pus_secretion">
                                                                <i class="input-helper"></i>
                                                                Pus Secretion
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="No Sign and Symptoms of Infection" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_no_signs">
                                                                <i class="input-helper"></i>
                                                                No Sign and Symptoms of Infection
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--END TAG after 2 rows-->
                                        </div><!--END TAG for col-md-6-->
                                    </div><!--END TAG for tab-->
                                    <div role="tabpanel" class="tab-pane" id="messages11">
                                        <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <center><label for="exampleInputEmail1"> Catherer Assestment</label></center>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Arterial (Single)</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="With Difficulty(Aspirate/Push)" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_arterial_w_difficulty">
                                                        <i class="input-helper"></i>
                                                        With Difficulty(aspirate/push)
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Without Difficulty" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_arterial_wo_difficulty">
                                                        <i class="input-helper"></i>
                                                        Without Difficulty
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Unable to Aspirate" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_arterial_un_aspirate">
                                                        <i class="input-helper"></i>
                                                        Unable to Aspirate
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> Venous (Single)</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="With Difficulty(Aspirate/Push)" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_venous_w_difficulty">
                                                        <i class="input-helper"></i>
                                                        With Difficulty(aspirate/push)
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Without Difficulty" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_venous_wo_difficulty">
                                                        <i class="input-helper"></i>
                                                        Without Difficulty
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Unable to Aspirate" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_venous_un_aspirate">
                                                        <i class="input-helper"></i>
                                                        Unable to Aspirate
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="INTERCHANGED" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_venous_interchanged">
                                                        <i class="input-helper"></i>
                                                        INTERCHANGED
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> Catherer Dressing (Single)</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="INTACT" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_cath_dressing_intact">
                                                        <i class="input-helper"></i>
                                                        INTACT
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="NOT INTACT" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_cath_dressing_not_intact">
                                                        <i class="input-helper"></i>
                                                        Not Intact
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="SOAKED" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_cath_dressing_soaked">
                                                        <i class="input-helper"></i>
                                                        Soaked
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <center><label for="exampleInputEmail1"> AV Fistula Needle Cannulation</label></center>
                                                <label for="exampleInputEmail1"> IF YES (Single)</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Artery" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_av_fistula_artery">
                                                        <i class="input-helper"></i>
                                                        Artery
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Venous" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_av_fistula_venous">
                                                        <i class="input-helper"></i>
                                                        Venous
                                                    </label>
                                                        <div class="fg-line">
                                                            <input type="text" data-toggle="tooltip" data-original-title="IF NO( Specify )" name="prehd_av_fistula_cannulation_no" class="form-control" placeholder="IF NO SPECIFY" style="text-align:center;">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> Anesthesia (Single)</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="None" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_anesthesia_none">
                                                        <i class="input-helper"></i>
                                                        None
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Lidocalne" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_anesthesia_lidocalne">
                                                        <i class="input-helper"></i>
                                                        Lidocalne
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Topical" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_anesthesia_topical">
                                                        <i class="input-helper"></i>
                                                        Topical
                                                    </label>
                                                    <div class="fg-line">
                                                            <input type="text" name="prehd_cannulated_by" class="form-control" placeholder="Cannulated By" style="text-align:center;">
                                                    </div>
                                                    <center><label for="exampleInputEmail1" style="margin-top:5px;"> NEW Fistula Assestment</label></center>
                                                    <center><label for="exampleInputEmail1" style="margin-top:5px;"> Date Assesed</label></center>
                                                    <div class="fg-line">
                                                            <input type="text" data-toggle="tooltip" data-original-title="Assest Date" name="prehd_new_fistula_assest_date" class="form-control date-picker" placeholder="Date Assesed" style="text-align:center;">
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label for="exampleInputEmail1" style="margin-top:5px;"> Thrill (Single)</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Strong" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_fistula_thrill_strong">
                                                        <i class="input-helper"></i>
                                                        Strong
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Weak" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_fistula_thrill_weak">
                                                        <i class="input-helper"></i>
                                                        Weak
                                                    </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label for="exampleInputEmail1" style="margin-top:5px;"> Bruit (Single)</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Strong" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_fistula_bruit_strong">
                                                        <i class="input-helper"></i>
                                                        Strong
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Weak" style="margin-top:5px;">
                                                        <input type="checkbox" id="prehd_fistula_bruit_weak">
                                                        <i class="input-helper"></i>
                                                        Weak
                                                    </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="exampleInputEmail1" style="margin-top:5px;"> Sings of Infection (Single)</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Signs of Infection(YES)" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_fistula_signs_yes">
                                                            <i class="input-helper"></i>
                                                            Yes
                                                        </label><br>
                                                        <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Sings of Infection(NO)" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_fistula_signs_no">
                                                            <i class="input-helper"></i>
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="exampleInputEmail1" style="margin-top:5px;"> Dressing Done Aseptically</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Dressing is Done Aseptically" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_fistula_dressing_aseptically">
                                                            <i class="input-helper"></i>
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <center><label for="exampleInputEmail1"> Catherer Dressing (Multiple)</label></center>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="No Bleeding" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_no_bleeding">
                                                        <i class="input-helper"></i>
                                                        No Bleeding
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Arterial and Venous Ports Heparenized" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_arterial_venous_ports">
                                                        <i class="input-helper"></i>
                                                        Arterial and Venous Ports Heparenized
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Each Port Capped and Secured Aseptically" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_each_port_capped_secured">
                                                        <i class="input-helper"></i>
                                                        Each Port Capped and Secured Aseptically
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Arterial and Venous Ports Flushed with PNSS" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_arterial_venous_flushed">
                                                        <i class="input-helper"></i>
                                                        Arterial and Venous Ports Flushed with PNSS
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Aseptically Dressed" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_aseptically_dressed">
                                                        <i class="input-helper"></i>
                                                        Aseptically Dressed
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Bactroban ointment applied at exit Site" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_bactroban_ointment">
                                                        <i class="input-helper"></i>
                                                        Bactroban ointment applied at exit site
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Catherer Care</label>
                                                        <div class="fg-line">
                                                            <input type="text" data-toggle="tooltip" data-original-title="Catherer Care" name="catherer_care" class="form-control" placeholder="Catherer Care">
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> Catherer Dressing (Single)</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="INTACT" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_cath_dressing_intact">
                                                        <i class="input-helper"></i>
                                                        INTACT
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="NOT INTACT" style="margin-top:5px;">
                                                        <input type="checkbox" id="posthd_cath_dressing_not_intact">
                                                        <i class="input-helper"></i>
                                                        Not Intact
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="SOAKED" style="margin-top:5px;">
                                                        <input type="checkbox"id="posthd_cath_dressing_soaked">
                                                        <i class="input-helper"></i>
                                                        Soaked
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> Discharged (Single)</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="tooltip" data-original-title="Home With Health Teching Performed" style="margin-top:5px;">
                                                        <input type="checkbox" id="discharge_home_with_health">
                                                        <i class="input-helper"></i>
                                                        Home with Health Teaching Performed
                                                    </label><br>
                                                        <div class="fg-line">
                                                            <input type="text" id="discharge_admitted" data-toggle="tooltip" data-original-title="Admitted and Endorsed To" class="form-control" placeholder="Admitted and Endorsed to:">
                                                        </div>
                                                        <div class="fg-line">
                                                            <input type="text" name="discharge_type_date" data-toggle="tooltip" data-original-title="Date Discharged" class="form-control date-picker" placeholder="Date">
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="settings11">
                                        <div class="col-md-12" style="margin-bottom: 10px;">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> PRIMED BY</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="PRIMED BY" name="primed_by" class="form-control" placeholder="PRIMED BY">
                                                    </div>
                                            </div><br>
                                            <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> HOOKED BY</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="HOOKED BY" name="hooked_by" class="form-control" placeholder="HOOKED BY">
                                                    </div>
                                            </div><br>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> EPREX</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="EPREX" name="eprex" class="form-control" placeholder="EPREX">
                                                    </div>
                                            </div><br>
                                            <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> RECORMON</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="RECORMON" name="recormon" class="form-control" placeholder="RECORMON">
                                                    </div>
                                            </div><br>
                                            <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> FERROFER</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="FERROFER" name="ferrofer" class="form-control" placeholder="FERROFER">
                                                    </div>
                                            </div><br>
                                            <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                <label for="exampleInputEmail1"> TERMINATED BY</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="tooltip" data-original-title="TERMINATED BY" name="terminated_by" class="form-control" placeholder="TERMINATED BY">
                                                    </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </form>
                            <br>
                        <div class="modal-footer">
                            <button id="btn_create" type="button" class="btn bgm-green waves-effect">Save</button>
                            <button id="back_to_top" type="button" class="btn bgm-purple waves-effect">Back to Top</button>
                            <button type="button" class="btn bgm-red" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- modal patient info end -->

        <!-- modal new patient -->
        <div id="modal_ref_patient" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bgm-indigo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Patient Reference</h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_ref_patients">
                        <div class="container-fluid">
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Firstname :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="first_name" class="form-control" placeholder="Firstname" data-error-msg="Firstname is required." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Middlename :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="middle_name" class="form-control" placeholder="Middlename" data-error-msg="Middlename is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Lastname :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="last_name" class="form-control" placeholder="Lastname" data-error-msg="Lastname is required." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Birthdate :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-birthday-cake fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="bdate" class="form-control date-picker" placeholder="Birthdate" data-error-msg="Birthdate is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Sex :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-transgender fa-size" aria-hidden="true"></i></span>
                                                <select class="form-control" name="sex" id="sex" data-error-msg="Sex is required." required>
                                                               <option value="Male">Male</option>
                                                               <option value="Female">Female</option>
                                                           </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Tel # :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="telephone" class="form-control" placeholder="Telephone" data-error-msg="Telephone is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Mobile # :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-mobile fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="mobile" class="form-control" placeholder="Mobile #">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">Address :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow fa-size" aria-hidden="true"></i></span>
                                                <textarea name="address" rows="2" placeholder="Address" class="form-control" data-error-msg="Address is required."></textarea>
                                        </div>            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">Notes :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-sticky-note fa-size"></i></span>
                                                <textarea name="ref_note" name="ref_note" rows="4" placeholder="Notes" class="form-control" data-error-msg="Notes is required."></textarea>
                                        </div>            
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
                    <div class="modal-footer" >
                        <button id="btn_create_patient" style="margin-top:5px;" type="button" class="btn bgm-green">Save
                        </button>
                        <button type="button" style="margin-top:5px;" class="btn bgm-red" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new patient end -->
        <!-- modal process type start -->
        <div class="modal fade" id="modal_process_type" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title text-center" style="color:white;font-weight:bold;">Medical Records</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" class="">
                            <center>
                            <button class="btn btn-primary btn-primary btn-lg right_prescription_view" id="patient_prescription" style="width:95%;">Prescription</button>
                            </center>
                        </div>
                        <div class="row" class="">
                            <center>
                            <button class="btn btn-primary btn-lg right_medlab_view" id="patient_laboratory" style="width:95%;margin-top:5px;">Laboratory</button>
                            </center>
                        </div>
                        <div class="row" class="">
                            <center>
                            <button class="btn btn-primary btn-lg right_billing_view" id="patient_billing" style="width:95%;margin-top:5px;">Billing</button>
                            </center>
                        </div>
                        <div class="row" class="">
                            <center>
                            <button class="btn btn-primary btn-lg right_visiting_view" id="patient_visiting_record" style="width:95%;margin-top:5px;">Visiting Record</button>
                            </center>
                        </div>
                        <div class="row" class="">
                            <center>
                            <button class="btn btn-primary btn-lg right_clinical_view" id="patient_clinical" style="width:95%;margin-top:5px;">Clinical Database</button>
                            </center>
                        </div>
                        <div class="row" class="">
                            <center>
                            <button class="btn btn-primary btn-lg right_medabstract_view" id="patient_medical_abstract" style="width:95%;margin-top:5px;">Medical Abstract</button>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                            <div class="panel panel-collapse" style="width:95%;margin-top:5px;">
                                                    <button class="btn btn-primary btn-lg" id="" style="width:100%;"  data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-two" aria-expanded="false">Request Forms
                                                        <br><i class="zmdi zmdi-chevron-down"></i>
                                                    </button>
                                            <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                                <div class="panel-body" style="padding:5px;"> 
                                                    <div class="row">
                                                        <center>
                                                        <button class="btn btn-primary btn-lg right_nephro_view" id="patient_nephro_order" style="width:85%;margin-top:5px;">Nephro Order</button>
                                                        </center>
                                                    </div>
                                                    <div class="row">
                                                        <center>
                                                        <button class="btn btn-primary btn-lg right_labreport_view" id="patient_laboratory_report" style="width:85%;margin-top:5px;">Laboratory Report</button>
                                                        </center>
                                                    </div>
                                                    <div class="row">
                                                        <center>
                                                        <button class="btn btn-primary btn-lg right_medcert_view" id="patient_medical_certificate" style="width:85%;margin-top:5px;">Medical Certificate</button>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal process type end -->

       <!--  modal patient info details -->
       <div id="modal_patient_Info_print" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bgm-green">
                            <h4 class="modal-title">Printing Patient Information</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel panel-collapse">
                                <!-- <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            PRINTING DETAILS
                                        </a>
                                    </h4>
                                </div> --><!-- accordion best -->
                                <!-- <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;"> -->
                                    <div class="panel-body">
                                        <form id="" role="form">
                                    <div id="printcontentpatientdetails" style="pointer-events: none;">
                                        <h3 style="color:#2c3e50;">Patient Information</h3>
                                        <hr style="border:1px solid #2c3e50"></hr>
                                        <div class="row" style="padding-bottom:0px;,margin:0px;">
                                            <div class="col-md-4" style="float:left;">
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1">* Attending Physician</label>
                                                        <div class="fg-line">
                                                            <input type="text" class="form-control" name="attending_physc" placeholder="Physician Name" data-error-msg="Attending Physician is required!" required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1">* Treatment No</label>
                                                        <div class="fg-line">
                                                            <input type="text" class="form-control" name="treatment_no" placeholder="Physician Name" data-error-msg="Treatment No!" required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detailcash" >
                                                        <i class="input-helper"></i>
                                                        Cash
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detailpcso" value="">
                                                        <i class="input-helper"></i>
                                                        PCSO
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detailphilhealth" value="">
                                                        <i class="input-helper"></i>
                                                        Philhealth
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <!-- <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Lastname</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" data-error-msg="Last Name is required" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Firstname</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="firstname" class="form-control" placeholder="First Name" data-error-msg="First Name is required" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Middlename</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="middlename" class="form-control" placeholder="Middle Name">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-md-12">
                                                <div class="form-group" data-toggle="tooltip" data-original-title="Patient Name">
                                                <label for="exampleInputEmail1"> Patient Name :</label>
                                                <select class="form-control" name="details_ref_patient_id" id="details_ref_patient_id" data-placeholder="Choose a Patient..." data-error-msg="Patient Name is required" required>
                                                     <?php
                                                        foreach($patient_name as $row)
                                                        {
                                                            echo '<option value="'.$row->ref_patient_id  .'">'.$row->fullname.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Age</label>
                                                    <div class="fg-line">
                                                        <div class="select">
                                                            <select class="form-control" name="age">
                                                                <?php 
                                                                    $minage=0;
                                                                    while($minage<=120){
                                                                        echo "<option value=".$minage.">".$minage."</option>";
                                                                        $minage++;
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Sex</label>
                                                    <div class="fg-line">
                                                        <div class="select">
                                                            <select class="form-control" name="sex">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Na</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="na" class="form-control" placeholder="Na">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Height(foot)</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="height" class="form-control" placeholder="Height(foot) eg 5'8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dry Weight(kg)</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="dry_weight" class="form-control" placeholder="Dry Weight(kilogram)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1">Temp(C)</lab el>
                                                    <div class="fg-line">
                                                        <input type="text" name="temp" class="form-control" placeholder="Temp Celsius">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-3" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Pre-HD Weight</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="pre_hd_weight" class="form-control" placeholder="Pre-HD Weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Previous Post Hd Weight</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="pre_post_hd_weight" class="form-control" placeholder="Previous Post Hd Weight">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Weight Gain</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="weight_gain" class="form-control" placeholder="Weight Gain">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Post HD Weight(kg)</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="post_hd_weight" class="form-control" placeholder="Post HD Weight(kilograms)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> UF Goal</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="uf_goal" class="form-control" placeholder="UF Goal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Duration</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="duration" class="form-control" placeholder="Duration">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dialyzer</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="dialyzer" class="form-control" placeholder="Dialyzer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-6" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Hepatitis Status</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detailclean" value="clean" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Clean
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detailhepatitis_b" value="hepatitis_b" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Hepatitis B
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detailhepatitis_c" value="hepatitis_c" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Hepatitis C
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Other</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detailanticoagulant" value="1">
                                                        <i class="input-helper"></i>
                                                        Anticoagulant
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detailroutine_heparin" value="option1">
                                                        <i class="input-helper"></i>
                                                        Routine Heparin(2-1-1)
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20">
                                                        <input type="checkbox" id="detaillowdoseheparin"value="option1">
                                                        <i class="input-helper"></i>
                                                        Low Dose Heparin(1-5-5)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> PNSS Flushing</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="other_pnssflushing" class="form-control" placeholder="PNSS Flushing">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> LMWH</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="other_lmwh" class="form-control" placeholder="Duration">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> KCL/Meqs</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="kcl" class="form-control" placeholder="Dialyzer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dialysis Bath</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detaildialysisbath_bicarbonate" value="option1">
                                                        <i class="input-helper"></i>
                                                        Bicarbonate
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dialysis Acid</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detaildialysisacid_hd144a" value="option1">
                                                        <i class="input-helper"></i>
                                                        HD 144 A
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> QB</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="qb" class="form-control" placeholder="QB">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> QD</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="qd" class="form-control" placeholder="QD">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> No. of use</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="no_of_use" class="form-control" placeholder="No. of use">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Dialyzer</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detaildialyzer_conventional" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        Conventional
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detaildialyzer_highefficiency" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        High Efficiency
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detaildialyzer_highflux" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        High Flux
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                        <input type="checkbox" id="detaildialyzer_renalinstrip" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        Renalin Strip Test
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="float:left;">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Others</label>
                                                    <div class="fg-line">
                                                        <input type="text" id="detailother_dialyzer" class="form-control" placeholder="Other Dialyzer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container-fluid">
                                            <div class="row" style="float:left;width:48%;">
                                                <center><h4 style="color:#2c3e50;">PRE-HD</h4></center>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_ambulatory">
                                                            <i class="input-helper"></i>
                                                            Ambulatory
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_wheelchair">
                                                            <i class="input-helper"></i>
                                                            WheelChair
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_bedstretcher">
                                                            <i class="input-helper"></i>
                                                            Bed Stretcher
                                                        </label>
                                                    </div>
                                                    <div class="col-md-7" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_ambulatory_assistance">
                                                            <i class="input-helper"></i>
                                                            Ambulatory w/ Assistance
                                                        </label>
                                                    </div>
                                                </div>
                                                <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> Date and Time Arrived</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="fg-line">
                                                            <input type="text" name="prehd_date_time_arrived" class="form-control date-time-picker" placeholder="Date Time Arrived" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> BP</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="prehd_bp" class="form-control" placeholder="BP" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> HR</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="prehd_hr" class="form-control" placeholder="HR" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> RR</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="prehd_rr" class="form-control" placeholder="RR" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> TEMP</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="prehd_temp" class="form-control" placeholder="TEMP" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Pulse (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_pulse_regular">
                                                            <i class="input-helper"></i>
                                                            Regular
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_pulse_irregular">
                                                            <i class="input-helper"></i>
                                                            Irregular
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Lungs (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_lungs_clear">
                                                            <i class="input-helper"></i>
                                                            Clear
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_lungs_crackles">
                                                            <i class="input-helper"></i>
                                                            Crackles
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_lungs_dob">
                                                            <i class="input-helper"></i>
                                                            DOB
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_lungs_wheezzing">
                                                            <i class="input-helper"></i>
                                                            Wheezing
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_lungs_hemoptysis">
                                                            <i class="input-helper"></i>
                                                            Hemoptysis
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Neuro (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_neuro_comatose">
                                                            <i class="input-helper"></i>
                                                            Comatose
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_neuro_lethargic">
                                                            <i class="input-helper"></i>
                                                            Lethargic
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_neuro_conscious">
                                                            <i class="input-helper"></i>
                                                            Conscious
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_neuro_gcs">
                                                            <i class="input-helper"></i>
                                                            GCS
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> EDEMA (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_edema_none" value="option1">
                                                            <i class="input-helper"></i>
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_edema_facial" value="option1">
                                                            <i class="input-helper"></i>
                                                            Facial
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_edema_pedal" value="option1">
                                                            <i class="input-helper"></i>
                                                            Pedal
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_edema_periorbital" value="option1">
                                                            <i class="input-helper"></i>
                                                            Periorbital
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_edema_ascitis" value="option1">
                                                            <i class="input-helper"></i>
                                                            Ascitis
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label style="margin-top:5px;">
                                                            <input type="text" class="form-control" name="prehd_edema_other">
                                                            <i class="input-helper"></i>
                                                            Others
                                                        </label>
                                                    </div>
                                                </div><br><br>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> GASTRO (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_gastro_good_appetite">
                                                            <i class="input-helper"></i>
                                                            Good Appetite
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_gastro_no_appetite">
                                                            <i class="input-helper"></i>
                                                            No Appetite
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_gastro_fair_appetite">
                                                            <i class="input-helper"></i>
                                                            Fair Appetite
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_gastro_melena">
                                                            <i class="input-helper"></i>
                                                            Melena
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_gastro_hematochezia">
                                                            <i class="input-helper"></i>
                                                            Hematochezia
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_gastro_hematemesis">
                                                            <i class="input-helper"></i>
                                                            Hematemesis
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Skin Color (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_skincolor_normal">
                                                            <i class="input-helper"></i>
                                                            Normal
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_skincolor_pale">
                                                            <i class="input-helper"></i>
                                                            Pale
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_skincolor_cyanotic">
                                                            <i class="input-helper"></i>
                                                            Cyanotic
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Turgor (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_skincolor_normal">
                                                            <i class="input-helper"></i>
                                                            Normal
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_skincolor_pale">
                                                            <i class="input-helper"></i>
                                                            Pale
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_skincolor_cyanotic">
                                                            <i class="input-helper"></i>
                                                            Cyanotic
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Turgor (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_turgor_good">
                                                            <i class="input-helper"></i>
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_turgor_poor">
                                                            <i class="input-helper"></i>
                                                            Poor
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Others (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_others_ecchymosis">
                                                            <i class="input-helper"></i>
                                                            Ecchymosis
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_others_bruises">
                                                            <i class="input-helper"></i>
                                                            Bruises
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Neck Veins (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_neckveins_flat">
                                                            <i class="input-helper"></i>
                                                            Flat
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_neckveins_slightlydistented">
                                                            <i class="input-helper"></i>
                                                            Slightly Distented
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_neckveins_distented">
                                                            <i class="input-helper"></i>
                                                            Distented
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Genito-Urinary (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_genitourinary_hematuria">
                                                            <i class="input-helper"></i>
                                                            Hematuria
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_genitourinary_dysuria">
                                                            <i class="input-helper"></i>
                                                            Dysuria
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_genitourinary_menstruation">
                                                            <i class="input-helper"></i>
                                                            Menstruation
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Problems/Complaints (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_problems_none">
                                                            <i class="input-helper"></i>
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_problems_chest_pain">
                                                            <i class="input-helper"></i>
                                                            Chest Pain
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_problems_cough">
                                                            <i class="input-helper"></i>
                                                            Cough
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_problems_abdominal_pain">
                                                            <i class="input-helper"></i>
                                                            Abdominal Pain
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_problems_lbm">
                                                            <i class="input-helper"></i>
                                                            LBM
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                         <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_problems_orthopnea">
                                                            <i class="input-helper"></i>
                                                            Orthopnea
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_problems_fever">
                                                            <i class="input-helper"></i>
                                                            Fever
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <div class="fg-line">
                                                        <input type="text" class="form-control" name="prehd_problems_others" placeholder="Others (Specify)" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Vascular Access (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_vascularaccess_pc">
                                                            <i class="input-helper"></i>
                                                            PC
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_vascularaccess_tlc">
                                                            <i class="input-helper"></i>
                                                            TLC
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_vascularaccess_avf">
                                                            <i class="input-helper"></i>
                                                            AVF
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_vascularaccess_avg">
                                                            <i class="input-helper"></i>
                                                            AVG (L/R)
                                                        </label>
                                                    </div>
                                                </div> 
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Bruit</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_bruit">
                                                            <i class="input-helper"></i>
                                                            Bruit
                                                        </label>
                                                    </div>
                                                </div> 
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Thrill (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_thrill_strong">
                                                            <i class="input-helper"></i>
                                                            Strong
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_thrill_weak">
                                                            <i class="input-helper"></i>
                                                            Weak
                                                        </label>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_thrill_patent">
                                                            <i class="input-helper"></i>
                                                            Patent
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_thrill_clotted">
                                                            <i class="input-helper"></i>
                                                            Clotted
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_thrill_redness">
                                                            <i class="input-helper"></i>
                                                            Redness
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_thrill_swelling">
                                                            <i class="input-helper"></i>
                                                            Swelling
                                                        </label>
                                                    </div>
                                                </div>  
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_thrill_hematoma">
                                                            <i class="input-helper"></i>
                                                            Hematoma
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_thrill_pus_secretion">
                                                            <i class="input-helper"></i>
                                                            Pus Secretion
                                                        </label>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                                <input type="checkbox" id="detailprehd_thrill_no_signs">
                                                                <i class="input-helper"></i>
                                                                No Sign and Symptoms
                                                            </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Arterial (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_arterial_w_difficulty">
                                                            <i class="input-helper"></i>
                                                            With Difficulty(aspirate/push)
                                                        </label>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_arterial_wo_difficulty">
                                                            <i class="input-helper"></i>
                                                            Without Difficulty
                                                        </label>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_arterial_un_aspirate">
                                                            <i class="input-helper"></i>
                                                            Unable to Aspirate
                                                        </label>
                                                    </div>
                                                </div>
                                                <label for="exampleInputEmail1"> Venous (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_venous_w_difficulty">
                                                            <i class="input-helper"></i>
                                                            With Difficulty(aspirate/push)
                                                        </label>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_venous_wo_difficulty">
                                                            <i class="input-helper"></i>
                                                            Without Difficulty
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_venous_un_aspirate">
                                                            <i class="input-helper"></i>
                                                            Unable to Aspirate
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_venous_interchanged">
                                                            <i class="input-helper"></i>
                                                            INTERCHANGED
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <label for="exampleInputEmail1"> Catherer Dressing (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_cath_dressing_intact">
                                                            <i class="input-helper"></i>
                                                            INTACT
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_cath_dressing_not_intact">
                                                            <i class="input-helper"></i>
                                                            Not Intact
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_cath_dressing_soaked">
                                                            <i class="input-helper"></i>
                                                            Soaked
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <label for="exampleInputEmail1"> AV Fistula Needle Cannulation</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> IF YES (Single)</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_av_fistula_artery">
                                                            <i class="input-helper"></i>
                                                            Artery
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_av_fistula_venous">
                                                            <i class="input-helper"></i>
                                                            Venous
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> IF NO</label><br>
                                                        <div class="fg-line">
                                                            <input type="text" name="prehd_av_fistula_cannulation_no" class="form-control" placeholder="No" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <label for="exampleInputEmail1"> Anesthesia (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_anesthesia_none">
                                                            <i class="input-helper"></i>
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_anesthesia_lidocalne">
                                                            <i class="input-helper"></i>
                                                            Lidocalne
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_anesthesia_topical">
                                                            <i class="input-helper"></i>
                                                            Topical
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <label for="exampleInputEmail1" style="margin-top:5px;"> NEW Fistula Assestment</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1" style="margin-top:5px;"> Date Assesed</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="prehd_new_fistula_assest_date" class="form-control date-picker" placeholder="Date Assesed" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <label for="exampleInputEmail1" style="margin-top:5px;"> Thrill (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_fistula_thrill_strong">
                                                            <i class="input-helper"></i>
                                                            Strong
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_fistula_thrill_weak">
                                                            <i class="input-helper"></i>
                                                            Weak
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <label for="exampleInputEmail1" style="margin-top:5px;"> Bruit (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_fistula_bruit_strong">
                                                            <i class="input-helper"></i>
                                                            Strong
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_fistula_bruit_weak">
                                                            <i class="input-helper"></i>
                                                            Weak
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <label for="exampleInputEmail1" style="margin-top:5px;"> Sings of Infection (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_fistula_signs_yes">
                                                            <i class="input-helper"></i>
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_fistula_signs_no">
                                                            <i class="input-helper"></i>
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <label for="exampleInputEmail1" style="margin-top:5px;"> Dressing Done Aseptically</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailprehd_fistula_dressing_aseptically">
                                                            <i class="input-helper"></i>
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50;width:95%;float:left;"></hr>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> PRIMED BY</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="primed_by" class="form-control" placeholder="PRIMED BY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> HOOKED BY</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="hooked_by" class="form-control" placeholder="HOOKED BY">
                                                        </div>
                                                    </div>
                                                </div>
                                                </center>
                                                            

                                            </div>

                                            <!-- post hd detail -->
                                            <div class="row" style="float:right;width:48%;">
                                                <center><h4 style="color:#2c3e50;">POST-HD</h4></center>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_ambulatory">
                                                            <i class="input-helper"></i>
                                                            Ambulatory
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_wheelchair">
                                                            <i class="input-helper"></i>
                                                            WheelChair
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_bedstretcher">
                                                            <i class="input-helper"></i>
                                                            Bed Stretcher
                                                        </label>
                                                    </div>
                                                    <div class="col-md-7" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_ambulatory_assistance">
                                                            <i class="input-helper"></i>
                                                            Ambulatory w/ Assistance
                                                        </label>
                                                    </div>
                                                </div>
                                                <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> Date and Time Arrived</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="fg-line">
                                                            <input type="text" name="posthd_date_time_arrived" class="form-control date-time-picker" placeholder="Date Time Arrived" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> BP</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="posthd_bp" class="form-control" placeholder="BP" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> HR</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="posthd_hr" class="form-control" placeholder="HR" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> RR</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="posthd_rr" class="form-control" placeholder="RR" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;margin-top: 5px;"> TEMP</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="posthd_temp" class="form-control" placeholder="TEMP" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Pulse (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_pulse_regular">
                                                            <i class="input-helper"></i>
                                                            Regular
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_pulse_irregular">
                                                            <i class="input-helper"></i>
                                                            Irregular
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Lungs (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_lungs_clear">
                                                            <i class="input-helper"></i>
                                                            Clear
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_lungs_crackles">
                                                            <i class="input-helper"></i>
                                                            Crackles
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_lungs_dob">
                                                            <i class="input-helper"></i>
                                                            DOB
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_lungs_wheezzing">
                                                            <i class="input-helper"></i>
                                                            Wheezing
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_lungs_hemoptysis">
                                                            <i class="input-helper"></i>
                                                            Hemoptysis
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Neuro (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_neuro_comatose">
                                                            <i class="input-helper"></i>
                                                            Comatose
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_neuro_lethargic">
                                                            <i class="input-helper"></i>
                                                            Lethargic
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_neuro_conscious">
                                                            <i class="input-helper"></i>
                                                            Conscious
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_neuro_gcs">
                                                            <i class="input-helper"></i>
                                                            GCS
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> EDEMA (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_edema_none" value="option1">
                                                            <i class="input-helper"></i>
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_edema_facial" value="option1">
                                                            <i class="input-helper"></i>
                                                            Facial
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_edema_pedal" value="option1">
                                                            <i class="input-helper"></i>
                                                            Pedal
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_edema_periorbital" value="option1">
                                                            <i class="input-helper"></i>
                                                            Periorbital
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_edema_ascitis" value="option1">
                                                            <i class="input-helper"></i>
                                                            Ascitis
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label style="margin-top:5px;">
                                                            <div class="fg-line">
                                                            <input type="text" class="form-control" name="posthd_edema_other">
                                                            </div>
                                                            <i class="input-helper"></i>
                                                            Others
                                                        </label>
                                                    </div>
                                                </div><br><br>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> GASTRO (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_gastro_good_appetite">
                                                            <i class="input-helper"></i>
                                                            Good Appetite
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_gastro_no_appetite">
                                                            <i class="input-helper"></i>
                                                            No Appetite
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_gastro_fair_appetite">
                                                            <i class="input-helper"></i>
                                                            Fair Appetite
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_gastro_melena">
                                                            <i class="input-helper"></i>
                                                            Melena
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_gastro_hematochezia">
                                                            <i class="input-helper"></i>
                                                            Hematochezia
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_gastro_hematemesis">
                                                            <i class="input-helper"></i>
                                                            Hematemesis
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Skin Color (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_skincolor_normal">
                                                            <i class="input-helper"></i>
                                                            Normal
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_skincolor_pale">
                                                            <i class="input-helper"></i>
                                                            Pale
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_skincolor_cyanotic">
                                                            <i class="input-helper"></i>
                                                            Cyanotic
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Turgor (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_skincolor_normal">
                                                            <i class="input-helper"></i>
                                                            Normal
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_skincolor_pale">
                                                            <i class="input-helper"></i>
                                                            Pale
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_skincolor_cyanotic">
                                                            <i class="input-helper"></i>
                                                            Cyanotic
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Turgor (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_turgor_good">
                                                            <i class="input-helper"></i>
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_turgor_poor">
                                                            <i class="input-helper"></i>
                                                            Poor
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Others (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_others_ecchymosis">
                                                            <i class="input-helper"></i>
                                                            Ecchymosis
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_others_bruises">
                                                            <i class="input-helper"></i>
                                                            Bruises
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Neck Veins (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_neckveins_flat">
                                                            <i class="input-helper"></i>
                                                            Flat
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_neckveins_slightlydistented">
                                                            <i class="input-helper"></i>
                                                            Slightly Distented
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_neckveins_distented">
                                                            <i class="input-helper"></i>
                                                            Distented
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Genito-Urinary (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_genitourinary_hematuria">
                                                            <i class="input-helper"></i>
                                                            Hematuria
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_genitourinary_dysuria">
                                                            <i class="input-helper"></i>
                                                            Dysuria
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_genitourinary_menstruation">
                                                            <i class="input-helper"></i>
                                                            Menstruation
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Problems/Complaints (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_problems_none">
                                                            <i class="input-helper"></i>
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_problems_chest_pain">
                                                            <i class="input-helper"></i>
                                                            Chest Pain
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_problems_cough">
                                                            <i class="input-helper"></i>
                                                            Cough
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_problems_abdominal_pain">
                                                            <i class="input-helper"></i>
                                                            Abdominal Pain
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_problems_lbm">
                                                            <i class="input-helper"></i>
                                                            LBM
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                         <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_problems_orthopnea">
                                                            <i class="input-helper"></i>
                                                            Orthopnea
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_problems_fever">
                                                            <i class="input-helper"></i>
                                                            Fever
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <div class="fg-line">
                                                        <input type="text" class="form-control" name="posthd_problems_others" placeholder="Others (Specify)" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Vascular Access (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_vascularaccess_pc">
                                                            <i class="input-helper"></i>
                                                            PC
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_vascularaccess_tlc">
                                                            <i class="input-helper"></i>
                                                            TLC
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_vascularaccess_avf">
                                                            <i class="input-helper"></i>
                                                            AVF
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_vascularaccess_avg">
                                                            <i class="input-helper"></i>
                                                            AVG (L/R)
                                                        </label>
                                                    </div>
                                                </div> 
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Bruit</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_bruit">
                                                            <i class="input-helper"></i>
                                                            Bruit
                                                        </label>
                                                    </div>
                                                </div> 
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Thrill (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_thrill_strong">
                                                            <i class="input-helper"></i>
                                                            Strong
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_thrill_weak">
                                                            <i class="input-helper"></i>
                                                            Weak
                                                        </label>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_thrill_patent">
                                                            <i class="input-helper"></i>
                                                            Patent
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_thrill_clotted">
                                                            <i class="input-helper"></i>
                                                            Clotted
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_thrill_redness">
                                                            <i class="input-helper"></i>
                                                            Redness
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_thrill_swelling">
                                                            <i class="input-helper"></i>
                                                            Swelling
                                                        </label>
                                                    </div>
                                                </div>  
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_thrill_hematoma">
                                                            <i class="input-helper"></i>
                                                            Hematoma
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_thrill_pus_secretion">
                                                            <i class="input-helper"></i>
                                                            Pus Secretion
                                                        </label>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                                <input type="checkbox" id="detailposthd_thrill_no_signs">
                                                                <i class="input-helper"></i>
                                                                No Sign and Symptoms
                                                            </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Catherer Dressing (Multiple)</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_no_bleeding">
                                                            <i class="input-helper"></i>
                                                            No Bleeding
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_arterial_venous_ports">
                                                            <i class="input-helper"></i>
                                                            Arterial and Venous Ports Heparenized
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_each_port_capped_secured">
                                                            <i class="input-helper"></i>
                                                            Each Port Capped and Secured Aseptically
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_arterial_venous_flushed">
                                                            <i class="input-helper"></i>
                                                            Arterial and Venous Ports Flushed with PNSS
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_aseptically_dressed">
                                                            <i class="input-helper"></i>
                                                            Aseptically Dressed
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_bactroban_ointment">
                                                            <i class="input-helper"></i>
                                                            Bactroban ointment applied at exit site
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> Catherer Care</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="catherer_care" class="form-control" placeholder="Catherer Care">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Catherer Dressing (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_cath_dressing_intact">
                                                            <i class="input-helper"></i>
                                                            INTACT
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detailposthd_cath_dressing_not_intact">
                                                            <i class="input-helper"></i>
                                                            Not Intact
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox"id="detailposthd_cath_dressing_soaked">
                                                            <i class="input-helper"></i>
                                                            Soaked
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <label for="exampleInputEmail1"> Discharged (Single)</label>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;">
                                                            <input type="checkbox" id="detaildischarge_home_with_health">
                                                            <i class="input-helper"></i>
                                                            Home with Health Teaching Performed
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> Admitted and Endorsed to</label>
                                                        <div class="fg-line">
                                                            <input type="text" id="detaildischarge_admitted" class="form-control" placeholder="Admitted and Endorsed to:">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50"></hr>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> Discharged Date</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="discharge_type_date" class="form-control date-picker" placeholder="Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> EPREX</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="eprex" class="form-control" placeholder="EPREX">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> RECORMON</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="recormon" class="form-control" placeholder="RECORMON">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> FERROFER</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="ferrofer" class="form-control" placeholder="FERROFER">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12" style="float:left;">
                                                        <label for="exampleInputEmail1"> TERMINATED BY</label>
                                                        <div class="fg-line">
                                                            <input type="text" name="terminated_by" class="form-control" placeholder="TERMINATED BY">
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div><!--print content patient detials -->
                            </form>
                                    </div>
                                </div>
                            <!-- </div>  --><!-- ACCORDION :) -->
                                
                            <br>
                        <div class="modal-footer">
                            <button type="button" id="printpatientdetails" class="btn bgm-green waves-effect">Print</button>
                            <button type="button" class="btn bgm-red" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal patient prescription start -->
        <div class="modal fade" id="modal_patient_prescription" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Prescription Of : <areafullname class="areafullname"></areafullname></h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body">
                          <table id="tbl_patient_prescription" class="table table-bordered table-striped">
                            <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">PR #</th>
                                    <th style="color:white;">Date Prescribed</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="color:white;">PR #</th>
                                    <th style="color:white;">Date Prescribed</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                </tr>
                            </tfoot>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_prescription" class="btn bgm-green waves-effect right_prescription_create">New Prescription</button>
                        <button type="button" id="close_prescription" class="btn bgm-red waves-effect" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient presription end -->

        <!-- modal new prescription -->
        <div id="modal_new_prescription" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Patient Prescription : <areafullname class="areafullname"></areafullname></h3>
                        <button type="button" class="close close_new_prescription"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body" style="padding:10px;">
                        <form id="frm_patient_prescription">
                            <div class="row">
                                <div class="col-md-2">
                                <label>Date Prescribed:</label>
                                    <div class="fg-line">
                                        <input type="email" style="text-align:center;" class="form-control date-picker" id="date_prescribed" name="date_prescribed" placeholder="Date Prescribed" data-error-msg="Date Prescribed Is Required!" required>
                                    </div>
                                </div>
                            </div>
                        <div class="table-responsive">
                                <table id="tbl_prescription_add" class="table table-striped" style="margin-top:5px;">
                                    <thead class="tbl-header" id="addrow">
                                        <tr>
                                            <th style="color:white;">Medication</th>
                                            <th style="color:white;">Qty</th>
                                            <th style="color:white;">AM</th>
                                            <th style="color:white;">NN</th>
                                            <th style="color:white;">PM</th>
                                            <th style="color:white;">Bedtime</th>
                                            <th style="color:white;">Remarks</th>
                                            <th style="color:white;text-align:center;">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody class="tbody_new_prescription">
                                        
                                     </tbody>
                                </table>
                            </form>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_prescription" type="button" class="btn bgm-green waves-effect">Save changes</button>
                        <button id="btn_addrow" type="button" class="btn bgm-blue waves-effect">Add Row</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_prescription" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end new prescription -->

        <!--  modal patient prescriotion details -->
        <div id="modal_prescription_details" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Prescription</h3>
                        <button type="button" class="close close_new_prescription"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="printcontentprescription">
                            <div class="card">
                                <!-- <div class="card-header ch-alt text-center">
                                    <img class="i-logo company_print" class="" src="" alt="">
                                </div> -->

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center">
                                                <h4 style="font-family:tahoma;font-size:14pt;">Joy D Mallari - DE LARA ,MD ,FPCP ,FPSN</h4>
                                                
                                                <span class="text-muted">
                                                    <address style="font-family:tahoma;font-size:14pt;">
                                                        Internal Medicine - Nephrology<br>
                                                        Prescription
                                                    </address>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <header2 style="font-size:11pt;">
                                        <div class="col-xs-5" style="padding:0px;float:left;">Patient Name : <areafullname class="areafullname"></areafullname>
                                        </div>
                                        <div class="col-xs-2" style="float:left;">Age : <areaage class="areaage"></areaage>
                                        </div>
                                        <div class="col-xs-2" style="float:left;">Sex : <areasex class="areasex"></areasex>
                                        </div>
                                        <div class="col-xs-3" style="float:left;">Date : <prescriptiondate class="prescriptiondate"></prescriptiondate>
                                        </div>
                                    </header2>
                                    <hr style="margin-top:5px;"></hr>
                                        <div class="table table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="text-uppercase">
                                                <th>Medication</th>
                                                <th>Qty</th>
                                                <th>AM</th>
                                                <th>NN</th>
                                                <th>PM</th>
                                                <th>Bedtime</th>
                                                <th>Remarks</th>
                                                </thead>

                                                <tbody class="prescription_view">
                                                </tbody>
                                            </table>
                                        </div>
                                </div>

                                <footer class="m-t-15 p-20">
                                    <ul class="list-inline text-right list-unstyled" style="font-size:12pt;">
                                            <small>Joy D Mallari, MD, FPCP, FPSN</small><br>
                                            <small>LIC # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small><br>
                                            <small>PTR # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small>
                                    </ul>
                                </footer>
                            </div>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-red waves-effect close_new_prescription" data-dismiss="modal">Back</button>
                        <button type="button" class="btn bgm-green waves-effect close_new_prescription" id="print_prescription">Print</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient prescription end -->

        <!-- modal patient laboratory -->
        <div class="modal fade" id="modal_patient_laboratory" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#e67e22;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Laboratory Results Of : <areafullname class="areafullname"></areafullname></h4>
                    </div>
                    <div class="modal-body">
                        <div class="table table-responsive" style="overflow: hidden;">
                        <table id="tbl_lab" width="100%" class="table table-bordered">
                            <thead class="tbl-header">
                            <tr>
                                <th style="color:white;">Date</th>
                                <th style="color:white;">Details</th>
                                <!-- <th style="color:white;">Note</th> -->
                                <th style="text-align:center;color:white;">Action</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_laboratory" class="btn bgm-green waves-effect right_medlab_create">New Laboratory</button>
                        <button type="button" id="close_laboratory" class="btn bgm-red waves-effect" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient laboratory -->

        <!-- modal newpatient new lab -->
        <div id="modal_new_lab" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#e67e22;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Patient Laboratory</h3>
                        <button type="button" class="close close_new_laboratory"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body">
                            <form id="frm_patient_laboratory">
                                <div class="row">
                                    <div class="col-md-6"><br><br>
                                            <div class="form-group">
                                                <label for="" class="col-sm-4 boldlabel control-label" style="margin-top:6px;">Date :</label>
                                                <div class="col-sm-8">
                                                    <div class="fg-line">
                                                        <input type="text" class="form-control date-picker" name="date_lab" placeholder="Date Lab" data-error-msg="Date Is Required!" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top:10px;">
                                                <label for="" class="col-sm-4 boldlabel control-label" style="margin-top:6px;">Results :</label>
                                                <div class="col-sm-8">
                                                    <div class="fg-line">
                                                        <textarea class="form-control" name="results" id="results" rows="3" placeholder="Results Here" data-error-msg="Results Is required!" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <center>
                                        <div class="row" style="border:2px solid #2c3e50;width:85%;margin-top:15px;padding-bottom:10px;">
                                            <h4 style="padding:0px;margin:0px;font-weight:bold;">Image Attachment</h4>
                                            <hr style="padding:0px;margin:10px;height:2px;background-color:#2c3e50;margin-top:2px;"></hr>
                                                <div id="lightgallery" class="imagelight">
                                                    <a name="img_a" href="assets/img/lab.png">
                                                        <img Name="img_preview" style="width:150px; height:150px;" src="assets/img/lab.png" />
                                                    </a>
                                                </div>
                                        </div>
                                         <button type="button" id="btn_browse" class="btn btn_full">Browse Photo</button>
                                         <input type="file" id="pix_admin" name="file_upload[]" class="hidden">
                                         </center>
                                    </div>
                                </div>
                            </form>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_lab" type="button" class="btn bgm-green waves-effect">Save</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_laboratory" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new patient lab end -->

        <!-- modal patient lab details -->
        <div class="modal fade" id="modal_laboratory_details" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#e67e22;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Laboratory Detailed View Of : <areafullname class="areafullname"></areafullname></h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-12 text-center" style="margin-bottom:10px;">
                        <h4>Date : <datelab id="date_lab"></datelab></h4>
                        <p id="lab_details"></p>
                        <center>
                            <div id="lightgallery" class="imagelight">
                                <a name="img_a" href="assets/img/lab.png">
                                    <img Name="img_preview" style="width:100%;border:2px solid black" src="assets/img/lab.png" />
                                </a>
                            </div>
                            <p>Click the Image to view it in fullscreen mode.</p>
                        </center>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-red waves-effect close_new_laboratory" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient lab details -->

        <!-- modal patient billing start -->
        <div class="modal fade" id="modal_patient_billing" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Patient Billing Of : <areafullname class="areafullname"></areafullname></h4>
                    </div>
                    <div class="modal-body" style="overflow:hidden;">
                        <div>
                        <table id="tbl_billing" width="100%" class="table table-striped">
                            <thead class="tbl-header">
                            <tr>
                                <th style="color:white;">Billing Code</th>
                                <th style="color:white;">Date</th>
                                <th style="text-align:center;color:white;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_billing" class="btn bgm-green waves-effect right_billing_create">New Billing</button>
                        <button type="button" id="close_billing" class="btn bgm-red waves-effect" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient billing end -->

        <!-- modal new billing -->
        <div id="modal_new_billing" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Patient Billing : <areafullname class="areafullname"></areafullname></h3>
                        <button type="button" class="close close_new_billing"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body">
                        <form id="frm_patient_billing">
                            <div class="row">
                                <div class="col-md-2">
                                <label>Date:</label>
                                    <div class="fg-line">
                                        <input type="text" style="text-align:center;" class="form-control date-picker" id="billing_Date" name="billing_date" placeholder="Date Prescribed" data-error-msg="Billing Date Is Required!" required>
                                    </div>
                                </div>
                            </div>
                        <div class="table-responsive">
                                <table id="tbl_billing_add" class="table table-striped" style="margin-top:5px;">
                                    <thead class="tbl-header" id="addrow">
                                        <tr>
                                            <th style="color:white;">Service Desc</th>
                                            <th style="color:white;">Qty</th>
                                            <th style="color:white;">Amount</th>
                                            <th style="color:white;">Total</th>
                                            <th style="color:white;">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody class="tbody_new_billing">
                                        
                                     </tbody>
                                </table>
                            </form>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_billing" type="button" class="btn bgm-green waves-effect">Save changes</button>
                        <button id="btn_addrow_billing" type="button" class="btn bgm-blue waves-effect">Add Row</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_prescription" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new billing end -->

        <!--  modal patient prescriotion details -->
        <div id="modal_billing_details" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Billing Details</h3>
                        <button type="button" class="close close_new_prescription"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body" style="padding:5px;overflow:hidden;">
                        <div id="printcontentbilling">
                            <div class="card">
                                <!-- <div class="card-header ch-alt text-center">
                                    <img class="i-logo company_print" class="" src="" alt="">
                                </div> -->

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center">
                                                <h4 style="font-family:tahoma;font-size:14pt;">Joy D Mallari - DE LARA ,MD ,FPCP ,FPSN</h4>
                                                
                                                <span class="text-muted">
                                                    <address style="font-family:tahoma;font-size:14pt;">
                                                        Internal Medicine - Nephrology<br>
                                                        Billing Details
                                                    </address>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <header2 style="font-size:11pt;">
                                        <div class="col-xs-5" style="padding:0px;float:left;">Patient Name : <areafullname class="areafullname"></areafullname>
                                        </div>
                                        <div class="col-xs-2" style="float:left;">Age : <areaage class="areaage"></areaage>
                                        </div>
                                        <div class="col-xs-2" style="float:left;">Sex : <areasex class="areasex"></areasex>
                                        </div>
                                        <div class="col-xs-3" style="float:left;">Date : <billingdate class="billingdate"></billingdate>
                                        </div>
                                    </header2>
                                    <hr style="margin-top:5px;"></hr>
                                    <h4 class="text-center">Billing Code : <billingcode class="billing_code"></billingcode></h4>
                                    <hr style="margin-top:5px;"></hr>
                                        <div class="table table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="text-uppercase">
                                                <th>Service Desc</th>
                                                <th>Qty</th>
                                                <th>Amount</th>
                                                <th>Total</th>
                                                </thead>

                                                <tbody class="billing_view">
                                                </tbody>
                                            </table>
                                        </div>
                                </div>

                                <footer class="m-t-15 p-20">
                                    <ul class="list-inline text-right list-unstyled" style="font-size:12pt;">
                                            <small>Joy D Mallari, MD, FPCP, FPSN</small><br>
                                            <small>LIC # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small><br>
                                            <small>PTR # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small>
                                    </ul>
                                </footer>
                            </div>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-red waves-effect" data-dismiss="modal">Back</button>
                        <button type="button" class="btn bgm-green waves-effect" id="print_billing">Print</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient prescription end -->

        <!-- modal patient visiting -->
        <div class="modal fade" id="modal_vising_record" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Patient Visiting Of : <areafullname class="areafullname"></areafullname></h4>
                    </div>
                    <div class="modal-body">
                        <div class="table table-responsive" style="height: 400px;overflow: hidden;">
                        <table id="tbl_visiting_record" width="100%" class="table table-bordered">
                            <thead class="tbl-header">
                            <tr>
                                <th style="color:white;">Date</th>
                                <th style="color:white;">Note</th>
                                <th style="color:white;">Diagnostics</th>
                                <!-- <th style="color:white;">Findings</th> -->
                                <th style="text-align:center;color:white;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_visiting_record" class="btn bgm-green waves-effect right_visiting_create">New Visiting Record</button>
                        <button type="button" id="close_visiting" class="btn bgm-red waves-effect" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient visiting end -->

        <!-- modal new p visiting record start -->
        <div id="modal_new_visit" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Patient Visiting Record</h3>
                        <button type="button" class="close close_new_visit"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body">
                            <form id="frm_patient_visiting_record">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-top:10px;">
                                            <label class="" for="inputEmail1">Date Visited :</label>
                                            <div class="fg-line">
                                               <input type="text" name="visiting_date" class="form-control date-picker" placeholder="Date Visited" data-error-msg="Date Visited is required." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-top:10px;">
                                            <label class="" for="inputEmail1">Next Visit Date :</label>
                                            <div class="fg-line">
                                               <input type="text" name="next_visit_date" class="form-control date-picker" placeholder="Next Visit Date" data-error-msg="Next Visit Date is required." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Note :</label>
                                            <div class="fg-line">
                                               <textarea name="visiting_note" placeholder="Note" class="form-control" data-error-msg="Diagnostics is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Diagnostics :</label>
                                            <div class="fg-line">
                                               <textarea name="visiting_diagnostics" placeholder="Diagnostics" class="form-control" data-error-msg="Diagnostics is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Findings :</label>
                                            <div class="fg-line">
                                               <textarea  name="visiting_findings" placeholder="Findings" class="form-control" data-error-msg="Findings is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Treatment :</label>
                                            <div class="fg-line">
                                               <textarea name="treatment" placeholder="Treatment" class="form-control" data-error-msg="Treatment is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Remarks :</label>
                                            <div class="fg-line">
                                               <textarea  name="visiting_remarks" placeholder="Address" class="form-control" data-error-msg="Remarks is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_visiting_record" type="button" class="btn bgm-green waves-effect">Save</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_visit" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new p visitingrecord end -->

        <!-- modal visiting details -->
        <div class="modal fade" id="modal_visiting_details" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#16a085;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Visiting Details Of : <areafullname class="areafullname"></areafullname></h4>
                    </div>
                    <div class="modal-body">
                        <form> 
                            <div id="printcontentvisitingdetails">
                                <div class="row">
                                    <div class="text-center">
                                        <h4 style="font-family:tahoma;font-size:14pt;">Joy D Mallari - DE LARA ,MD ,FPCP ,FPSN</h4>
                                        
                                        <span class="text-muted">
                                            <address style="font-family:tahoma;font-size:14pt;">
                                                Internal Medicine - Nephrology<br>
                                                Visiting Details
                                            </address>
                                        </span>
                                    </div>
                                </div>
                                <div class="card">
                                    <!-- <div class="card-header ch-alt text-center">
                                        <img class="i-logo company_print" id="company_print" src="" alt="">
                                    </div> -->

                                    <div class="card-body card-padding">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="text-right">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">Dizon-Mallari Medical Clinic</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            092 Hi way San Pablo, Mexio, Pampanga<br>
                                                            Clinic hours Mon thru Fridays (except Wed) 9-11am<br>
                                                            Tel # 09156285228 (045) 4353646
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="text-left">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">V.L MAKABALI MEMORIAL HOSPITAL</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Medical Arts Building Rm 2113<br>
                                                            Wednesdays and Fridays 2-4 pm<br>
                                                            Tel # (045) 4361275 / 09267200990
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="text-right">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">ACCU-RENAL MEDICAL SERVICES</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Brgy Mabiga, Mabalacat, Pampanga<br>
                                                            Clinic hours T Th 2-4 pm<br>
                                                            Tel # (045) 6245699
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="text-left">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">THE MEDICAL CITY CLARK</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Global Gateway Logistics City, Clark Free Port Zone<br>
                                                            Wed 10-12nn Room 210<br>
                                                            Tel # 09430100581
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="float:left;font-weight:400;">Date Visited : <datevisited id="datevisited"></datevisited></h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 style="float:right;font-weight:400;">Next Visit Date : <nextvisitdate id="nextvisitdate"></nextvisitdate></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Note :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingnote id="visitingnote"></visitingnote></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Diagnostics :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingdiagnostics id="visitingdiagnostics"></visitingdiagnostics></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Findings :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingfindings id="visitingfindings"></visitingfindings></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Treatment :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingtreatment id="visitingtreatment"></visitingtreatment></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Remarks :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingremarks id="visitingremarks"></visitingremarks></p>
                                        </div>
                                    </div>

                                    <!-- <footer class="m-t-15 p-20">
                                        <ul class="list-inline text-center list-unstyled">
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo "iamjbpv@outlook.com"; ?></small>
                                            </li>
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo '099540932xx'; ?></small>
                                            </li>
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo "www.jbvillamayor.com"; ?></small>
                                            </li>
                                        </ul>
                                    </footer> -->
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green waves-effect" id="printvisitdetails">Print</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_visit" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modalvisiting detailsend -->

        <!-- modal patient clinical -->
        <div class="modal fade" id="modal_clinical" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Patient Clinical Database Of : <areafullname class="areafullname"></areafullname></h4>
                    </div>
                    <div class="modal-body">
                        <div class="table table-responsive" style="height: 400px;overflow: hidden;">
                        <table id="tbl_clinical" width="100%" class="table table-bordered">
                            <thead class="tbl-header">
                            <tr>
                                <th style="color:white;">Diagnostics</th>
                                <th style="color:white;">Treatment</th>
                                <th style="color:white;">Medication</th>
                                <th style="color:white;">Remarks</th>
                                <th style="text-align:center;color:white;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_clinical" class="btn bgm-green waves-effect right_clinicaldb_create">New Clinical Database</button>
                        <button type="button" id="close_visiting" class="btn bgm-red waves-effect" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient clinical end -->

        <!-- modal new clinical start -->
        <div id="modal_new_clinical" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Clinical Database</h3>
                    </div>
                    <div class="modal-body">
                            <form id="frm_clinical_db">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Diagnostics :</label>
                                            <div class="fg-line">
                                               <textarea name="clinical_diagnostics" placeholder="Diagnostics" class="form-control" data-error-msg="Diagnostics is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Treatment :</label>
                                            <div class="fg-line">
                                               <textarea  name="clinical_treatment" placeholder="Findings" class="form-control" data-error-msg="Treatment is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Medications :</label>
                                            <div class="fg-line">
                                               <textarea name="clinical_medication" placeholder="Treatment" class="form-control" data-error-msg="Medications is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1">Remarks :</label>
                                            <div class="fg-line">
                                               <textarea  name="clinical_remarks" placeholder="Address" class="form-control" data-error-msg="Remarks is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_clinical" type="button" class="btn bgm-green waves-effect">Save</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_visit" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new clinical end -->

        <!-- modal clinical details -->
        <div class="modal fade" id="modal_clinical_details" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#16a085;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Clinical Details Of : <areafullname class="areafullname"></areafullname></h4>
                    </div>
                    <div class="modal-body">
                        <form> 
                            <div id="printcontentclinicaldetails">
                                <div class="row">
                                    <div class="text-center">
                                        <h4 style="font-family:tahoma;font-size:14pt;">Joy D Mallari - DE LARA ,MD ,FPCP ,FPSN</h4>
                                        
                                        <span class="text-muted">
                                            <address style="font-family:tahoma;font-size:14pt;">
                                                Internal Medicine - Nephrology<br>
                                                Clinical Database
                                            </address>
                                        </span>
                                    </div>
                                </div>
                                <div class="card">
                                    <!-- <div class="card-header ch-alt text-center">
                                        <img class="i-logo company_print" id="company_print" src="" alt="">
                                    </div> -->

                                    <div class="card-body card-padding">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="text-right">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">Dizon-Mallari Medical Clinic</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            092 Hi way San Pablo, Mexio, Pampanga<br>
                                                            Clinic hours Mon thru Fridays (except Wed) 9-11am<br>
                                                            Tel # 09156285228 (045) 4353646
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="text-left">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">V.L MAKABALI MEMORIAL HOSPITAL</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Medical Arts Building Rm 2113<br>
                                                            Wednesdays and Fridays 2-4 pm<br>
                                                            Tel # (045) 4361275 / 09267200990
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="text-right">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">ACCU-RENAL MEDICAL SERVICES</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Brgy Mabiga, Mabalacat, Pampanga<br>
                                                            Clinic hours T Th 2-4 pm<br>
                                                            Tel # (045) 6245699
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="text-left">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">THE MEDICAL CITY CLARK</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Global Gateway Logistics City, Clark Free Port Zone<br>
                                                            Wed 10-12nn Room 210<br>
                                                            Tel # 09430100581
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Diagnostics :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_diagnostics"></clinical></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Treatment :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_treatment"></clinical></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Medication :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_medication"></clinical></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Remarks :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_remarks"></clinical></p>
                                        </div>
                                    </div>

                                    <!-- <footer class="m-t-15 p-20">
                                        <ul class="list-inline text-center list-unstyled">
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo "iamjbpv@outlook.com"; ?></small>
                                            </li>
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo '099540932xx'; ?></small>
                                            </li>
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo "www.jbvillamayor.com"; ?></small>
                                            </li>
                                        </ul>
                                    </footer> -->
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green waves-effect" id="printclinicaldetails">Print</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_visit" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modalvisiting detailsend -->

           <!--  laboratory report MODAL -->
        <div id="modal_medical_abstract" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Medical Abstract</h3>
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_medical_abstract_content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="text-center">
                                        <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;">Joy D Mallari - DE LARA ,MD ,FPCP ,FPSN</h4>
                                        
                                        <span class="text-muted">
                                            <address style="font-family:tahoma;font-size:14pt;font-weight:bold;">
                                                Internal Medicine - Nephrology (Kidney Specialist)
                                            </address>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center">
                                                <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;text-decoration:underline;">Medical Abstract</h4>
                                            </div>
                                        </div>
                                </div>
                                 <form id="frm_medical_abstract">
                                <div class="row">   
                                    <div class="text-left">
                                        <table style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th style="width:30%;">Name</th>
                                                    <th style="width:10%;">Sex</th>
                                                    <th style="width:10%;">Age</th>
                                                    <th style="width:10%;">CS</th>
                                                    <th style="width:20%;">Date of Birth</th>
                                                    <th style="width:20%;">Case No</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><u><areafullname class="areafullname"></areafullname></u></td>
                                                    <td><u><areasex class="areasex"></areasex></u></td>
                                                    <td><u><areaage class="areaage"></areaage></u></td>
                                                    <td><input type="text" name="cs" style="border:0px;border-bottom:1px solid black;width:70px"></td>
                                                    <td><u><areabirthdate class="areabirthdate"></areabirthdate></u></td>
                                                    <td><input type="text" name="case_no" style="border:0px;border-bottom:1px solid black;"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                    </div>
                                    <!-- <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="checkbox-left">
                                           <h5 style="margin:2px;"><b>DIAGNOSIS</b></h5>
                                           <input class="onemargin" type="checkbox" name="" id="diag_chronic_kidney_disease" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Chronic Kidney Disease<br><addition style="margin-left:54px;">DUE TO : (Check all that apply)</addition></tag> <br>
                                           <input class="onemargin" type="checkbox" name="" id="diag_chronic_glomeru" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Chronic glomerulonephritis</tag> <br>
                                           <input class="onemargin" type="checkbox" name="" id="diag_chronic_pyelone" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Chronic pyelonephritis</tag> <br>
                                           <input class="onemargin" type="checkbox" name="" id="diag_obs_uropathy" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Obstructive Uropathy</tag> <br>
                                           
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="checkbox-left">
                                           <br>
                                           <input class="onemargin" type="checkbox" name="" id="diag_hypertension" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Hypertension</tag> <br> 
                                           <input class="onemargin" type="checkbox" name="" id="diag_end_stage" style="width:50px;border:0px;border-bottom:1px solid black;"> End Stage Renal Disease<br>
                                           <input class="onemargin" type="checkbox" name="" id="diag_diabetic" style="width:50px;border:0px;border-bottom:1px solid black;"> Diabetic Nephropathy<br>
                                           <input class="onemargin" type="checkbox" name="" id="diag_uric_acid_nephro" style="width:50px;border:0px;border-bottom:1px solid black;"> Uric Acid nephropathy<br>
                                           <others  class="onemargin" style="margin-left:53px;"> Others Specify :</others> <input type="text" name="diag_other_specify" id="" style="width:100px;border:0px;border-bottom:1px solid black;"><br>
                                        </div>
                                    </div>
                                </div>
                                <h5 style="margin:2px;"><b>TREATMENT</b></h5>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="treat_hemo" style="width:50px;border:0px;border-bottom:1px solid black;"> HEMODIALYSIS<br>
                                           <input class="onemargin" type="checkbox" name="" id="treat_once_a_week" style="width:50px;border:0px;border-bottom:1px solid black;"> once a week
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="treat_two_times_a_week" style="width:50px;border:0px;border-bottom:1px solid black;"> two times a week<br>
                                           <input class="onemargin" type="checkbox" name="" id="treat_three_times_a_week" style="width:50px;border:0px;border-bottom:1px solid black;"> three times a week
                                        </div>
                                    </div>
                                </div>
                                <h5 style="margin:2px;"><b>MEDICINES (Check all prescribed)</b></h5>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="med_eryth" style="width:25px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">ERYTHROPOIETIN</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_4000units" style="width:25px;border:0px;border-bottom:1px solid black;"> 4000 units<br>
                                           <input class="onemargin" type="checkbox" name="" id="med_5000_units" style="width:25px;border:0px;border-bottom:1px solid black;"> 5000 units<br>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="med_eprex" style="width:25px;border:0px;border-bottom:1px solid black;"> <b style="font-size:9pt;">EPREX</b><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_once_a_week" style="width:25px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:9pt;">once a week </tag>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="med_recormon" style="width:25px;border:0px;border-bottom:1px solid black;"><b> RECORMON </b><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_epotin" style="width:25px;border:0px;border-bottom:1px solid black;"><b> EPOTIN </b><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_two_times_a_week" style="width:25px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:9pt;">two times a week</tag>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="med_eposino" style="width:25px;border:0px;border-bottom:1px solid black;"><b> EPOSINO </b><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_others" style="width:25px;border:0px;border-bottom:1px solid black;"><b> OTHERS </b><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_three_times_a_week" style="width:25px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:9pt;">three times a week </tag>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="med_cal_carbo" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Calcium carbonate 500mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_sevelamer" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">Sevelamer carbonate 600mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_calcitriol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Calcitrol<input type="text" name="" id="" style="width:15px;border:0px;border-bottom:1px solid black;"></tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_clopidogrel" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Clopidogrel 75mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_ferrous" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Ferrous sulfate 75mg</tag><input type="text" name="med_ferrous_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;"></tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_folic_acid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Folic Acid 5mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_vitamin_c" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vitamin C 500mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_vitamin_b_complex" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vitamin b complex 1 tablet</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_amlodipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Amlodipine<input type="text" name="med_amlodipine_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_felodipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Felodipine<input type="text" name="med_felodipine_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_nifedipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Nitedipine<input type="text" name="med_nifedipine_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_diltiazcm" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Diltiazcm<input type="text" name="med_diltiazcm_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_irbesartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Irbesartan<input type="text" name="med_irbesartan_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_losartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Losartan<input type="text" name="med_losartan_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_telmisartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Telmisartan<input type="text" name="med_telmisartan_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_valsartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Valsartan<input type="text" name="med_valsartan_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_ketosteril" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Ketosteril 600mg<input type="text" name="med_ketosteril_tab" id="" style="width:15px;border:0px;border-bottom:1px solid black;">tab</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_kremezin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Kremezin 2g sachet<input type="text" name="med_perindopril_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;"></tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_perindopril" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Perindopril<input type="text" name="" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                        </div>
                                    </div>
                                    <div class="col-xs-1" style="padding:0px;">
                                        <div class="checkbox-left">
                                           <input class="margin" type="checkbox" name="" id="med_cal_carbo_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_sevelamer_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_calcitriol_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clopidogrel_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_ferrous_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_folic_acid_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vitamin_c_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vitamin_b_complex_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_amlodipine_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_felodipine_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_nifedipine_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_diltiazcm_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_irbesartan_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_losartan_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_telmisartan_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_valsartan_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_ketosteril_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_kremezin_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_perindopril_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag>
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="checkbox-left">
                                           <input class="margin" type="checkbox" name="" id="med_cal_carbo_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_sevelamer_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_calcitriol_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clopidogrel_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_ferrous_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_folic_acid_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vitamin_c_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vitamin_b_complex_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_amlodipine_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_felodipine_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_nifedipine_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_diltiazcm_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_irbesartan_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_losartan_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_telmisartan_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_valsartan_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_ketosteril_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_kremezin_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_perindopril_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag>
                                           </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="checkbox-left">
                                           <input class="margin" type="checkbox" name="" id="med_cal_carbo_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_sevelamer_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_calcitriol_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clopidogrel_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_ferrous_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_folic_acid_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vitamin_c_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vitamin_b_complex_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_amlodipine_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_felodipine_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_nifedipine_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_diltiazcm_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_irbesartan_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_losartan_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_telmisartan_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_valsartan_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_ketosteril_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_kremezin_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_perindopril_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="checkbox-left" style="margin-top:4px !important;">
                                           <input class="onemargin" type="checkbox" name="" id="med_atenolol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Atenolol
                                                <input type="text" name="med_atenolol_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_carvedilol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Carvedilol
                                                <input type="text" name="med_carvedilol_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_metoprolol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Metoprolol
                                                <input type="text" name="med_metoprolol_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_clonidine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Clonidine
                                                <input type="text" name="med_clonidine_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_atorvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Atorvastatin
                                                <input type="text" name="med_atorvastatin_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_fluvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Fluvastatin
                                                <input type="text" name="med_fluvastatin_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                            <input type="checkbox" name="" id="med_simvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Simvastatin
                                                <input type="text" name="med_simvastatin_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_lanoxin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Lanoxin
                                                <input type="text" name="med_lanoxin_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_allopurinol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Allopurinol
                                                <input type="text" name="med_allopurinol_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_gliclazide" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Gliclazide
                                                <input type="text" name="med_gliclazide_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_metformin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Metformin 500mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_clonidinc" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Clonidinc
                                                <input type="text" name="med_clonidinc_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_exforge" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Exforge
                                                <input type="text" name="med_exforge_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_twynsta" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Twynsta
                                                <input type="text" name="med_twynsta_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_lacipil" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Lacipil
                                                <input type="text" name="med_lacipil_mg" id="" style="width:15px;border:0px;border-bottom:1px solid black;">mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_insulin_glargine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Insulin glargine
                                                <input type="text" name="med_insulin_glargine_units" id="" style="width:15px;border:0px;border-bottom:1px solid black;">units</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_linagliptin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Linagliptin 5mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_vildaglitpin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vildagliptin 50mg</tag><br>
                                           <input class="onemargin" type="checkbox" name="" id="med_glipizide" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Glipizide 50mg</tag>
                                        </div>
                                    </div>
                                    <div class="col-xs-1" style="padding:0px;margin-top:4px;">
                                        <div class="checkbox-left">
                                           <input class="margin" type="checkbox" name="" id="med_atenolol_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_carvedilol_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_metoprolol_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clonidine_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_atorvastatin_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_fluvastatin_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_simvastatin_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_lanoxin_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_allopurinol_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_gliclazide_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_metformin_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clonidinc_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_exforge_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_twynsta_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_lacipil_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_insulin_glargine_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_linagliptin_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vildaglitpin_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_glipizide_od" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag>
                                        </div>
                                    </div>
                                    <div class="col-xs-1" style="margin-top:4px !important;">
                                        <div class="checkbox-left">
                                           <input class="margin" type="checkbox" name="" id="med_atenolol_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_carvedilol_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_metoprolol_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clonidine_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_atorvastatin_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_fluvastatin_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_simvastatin_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_lanoxin_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_allopurinol_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_gliclazide_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_metformin_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clonidinc_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_exforge_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_twynsta_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_lacipil_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_insulin_glargine_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_linagliptin_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vildaglitpin_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_glipizide_bid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag>
                                           </div>
                                    </div>
                                    <div class="col-xs-1" style="margin-top:4px !important;">
                                        <div class="checkbox-left">
                                           <input class="margin" type="checkbox" name="" id="med_atenolol_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_carvedilol_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_metoprolol_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clonidine_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_atorvastatin_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_fluvastatin_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_simvastatin_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_lanoxin_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_allopurinol_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_gliclazide_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_metformin_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_clonidinc_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_exforge_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_twynsta_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_lacipil_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_insulin_glargine_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_linagliptin_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_vildaglitpin_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag><br>
                                           <input class="margin" type="checkbox" name="" id="med_glipizide_tid" style="width:9px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            <p style="font-size:8pt;margin:0px;padding:0px;">Others: <input type="text" name="med_others_med" style="width:300px;border:0px;border-bottom:1px solid black;"> <span style="margin-left:20px;">Indicate how many medications checked:</span> <input type="text" name="med_medications_no" style="width:100px;border:0px;border-bottom:1px solid black;text-align:center;"></p>
                                         </div>
                                         <div class="text-left">
                                            <p style="font-size:8pt;">Recommendations<br><input type="text" name="med_recommendations" style="width:100%;border:0px;border-bottom:1px solid black;"></p>
                                         </div>
                                    </div>
                                </div>
                                <footer class="m-t-15 p-20" style="margin-top:7px;">
                                <ul class="list-inline text-left list-unstyled" style="font-size:9pt;">
                                        <small style="text-decoration:overline;">Joy D. Mallari - DE LARA, MD, FPCP, FPSN</small><br>
                                        <small>LIC # : 100839 <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small><br>
                                        <small>PTR # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small>
                                </ul>
                                </footer>
                            </div>
                            </form>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green waves-effect right_medabstract_create" id="save_medical_abstract">Save</button>
                        <button type="button" class="btn bgm-green waves-effect" id="print_medical_abstract">Print</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_prescription" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
         <!--  laboratroy report MODAL -->

           <!--  NEPHRO ORDER MODAL -->
        <div id="modal_patient_nephro_order" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Nephro Order</h3>
                        <button type="button" class="close close_nephro"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_nephro_content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="text-center">
                                        <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;">Joy D. Mallari,MD, FPCP, FPSN</h4>
                                        
                                        <span class="text-muted">
                                            <address style="font-family:tahoma;font-size:14pt;font-weight:bold;">
                                                Adult Nephrology (Kidney Specialist)
                                            </address>
                                        </span>
                                    </div>
                                </div><br>
                                <div class="row">   
                                    <form id="frm_nephro_order">
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Name : <u><areafullname class="areafullname"></areafullname></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Diagnosis : <input type="text" name="nephro_diagnosis" style="border:0px;border-bottom:1px solid #2c3e50;width:200px;"> 
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Dry Weight : <u><areadryweight class="areadryweight"></areadryweight></u>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="text-center">
                                        <h4 class="text-uppercase" style="font-family:tahoma;font-size:13pt;font-weight:bold;">
                                            Nephrologist's Orders
                                        </h4>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="text-left">
                                        <input type="text" name="inc_freq_3x" name="nephro_inc_freq" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Increase frequency to 3 x a week
                                    </div>
                                    <div class="text-left">
                                        <input type="text" name="upd_medical_sheet" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Update Medical Sheet
                                    </div>
                                        <div class="text-left">
                                            <input type="text" name="shift_recormon_500" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Shift to Recormon 5000 u sc route at 1x/ 2x/ 3x a week
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="shift_eprex_4000" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Shift to Eprex 4000 u SC at 1x/ 2x/ 3x a week
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="shift_eposino_4000u" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Shift to Eposino 4000u SC at 1x/ 2x/ 3x a week
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="shift_eposino_6000u" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Shift to Eposino 6000u SC at 1x/ 2x/ a week
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="iv_sc_2weeks" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            IV Iron sucrose 100 mg q 2 weeks (discontinue oral iron)
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="iv_sc_10doses" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            IV Iron sucrose 100 mg q week for 10 doses then every 2 weeks (discontinue oral iron)
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="upd_medication" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            update all medications as indicated in new prescription given to patient
                                        </div>
                                    <div class="text-left">
                                        <input type="text" name="sen_nurse_cann_avf" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Senior nurse to cannulate AVF at all times
                                    </div>
                                    <div class="text-left">
                                        <input type="text" name="mod_anticoag" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Modify anticoagulation as follows:
                                    </div>
                                        <div class="text-left">
                                            <input type="text" name="no_heparin" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            No heparin for <input name="no_heparin_for" type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            weeks prior
                                            <input type="text" name="weeks_prior" style="border:0px;border-bottom:1px solid #2c3e50;width:300px;font-size:10pt;"> 
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="no_heparin2" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            No heparin for <input type="text" name="no_heparin_for2" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            weeks after
                                        <input type="text" name="weeks_after" style="border:0px;border-bottom:1px solid #2c3e50;width:300px;font-size:10pt;"> 
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="give_uhf"  style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Give UHF <input type="text" name="give_uhf_units" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            units bolus then <input type="text" name="give_uhf_units_bolus" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;">
                                        </div>
                                    <div class="text-left">
                                        <input type="text" name="please_do_monthly" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Please do monthly labs on or before <input name="on_or_before" type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:375px;font-size:10pt;"> 
                                    </div>
                                    <div class="text-left">
                                        <input type="text" name="others_orders" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;">
                                        others orders
                                    </div>
                                        <div class="text-center">
                                            <input type="text" name="more_details1" style="border:0px;border-bottom:1px solid #2c3e50;width:83%;font-size:10pt;">
                                        </div>
                                        <div class="text-center">
                                            <input type="text" name="more_details2" style="border:0px;border-bottom:1px solid #2c3e50;width:83%;font-size:10pt;">
                                        </div>
                                    <div class="text-left" style="margin-top:50px;font-weight:bold;">
                                        Noted by :  <input type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:250px;font-size:12pt;">
                                    </div>
                                        <div class="text-left text-uppercase">
                                            <footer style="font-weight:bold;font-size:11pt;margin-top:5px;margin-left:70px;">Joy Mallari- DE LARA , MD<br>
                                            PRC # 100839
                                            </footer>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green waves-effect save_nephro right_nephro_create" id="save_nephro">Save</button>
                        <button type="button" class="btn bgm-green waves-effect" id="print_nephro">Print</button>
                        <button type="button" class="btn bgm-red waves-effect close_nephro" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal nephro order end -->

           <!--  laboratory report MODAL -->
        <div id="modal_laboratory_report" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Laboratory Report</h3>
                        <button type="button" class="close close_new_prescription"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_labreport_content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="text-center">
                                        <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;">Joy D Mallari - DE LARA ,MD ,FPCP ,FPSN</h4>
                                        
                                        <span class="text-muted">
                                            <address style="font-family:tahoma;font-size:14pt;font-weight:bold;">
                                                Internal Medicine - Nephrology (Kidney Specialist)
                                            </address>
                                        </span>
                                    </div>
                                </div><br>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="text-right">
                                                <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">Dizon-Mallari Medical Clinic</h4>
                                                
                                                <span class="text-muted">
                                                    <address style="font-family:tahoma;font-size:8pt;">
                                                        092 Hi way San Pablo, Mexio, Pampanga<br>
                                                        Clinic hours Mon thru Fridays (except Wed) 9-11am<br>
                                                        Tel # 09156285228 (045) 4353646
                                                    </address>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="text-left">
                                                <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">V.L MAKABALI MEMORIAL HOSPITAL</h4>
                                                
                                                <span class="text-muted">
                                                    <address style="font-family:tahoma;font-size:8pt;">
                                                        Medical Arts Building Rm 2113<br>
                                                        Wednesdays and Fridays 2-4 pm<br>
                                                        Tel # (045) 4361275 / 09267200990
                                                    </address>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="text-right">
                                                <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">ACCU-RENAL MEDICAL SERVICES</h4>
                                                
                                                <span class="text-muted">
                                                    <address style="font-family:tahoma;font-size:8pt;">
                                                        Brgy Mabiga, Mabalacat, Pampanga<br>
                                                        Clinic hours T Th 2-4 pm<br>
                                                        Tel # (045) 6245699
                                                    </address>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="text-left">
                                                <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">THE MEDICAL CITY CLARK</h4>
                                                
                                                <span class="text-muted">
                                                    <address style="font-family:tahoma;font-size:8pt;">
                                                        Global Gateway Logistics City, Clark Free Port Zone<br>
                                                        Wed 10-12nn Room 210<br>
                                                        Tel # 09430100581
                                                    </address>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-bottom:2px solid #2c3e50;"></hr>
                                 <form id="frm_lab_diagnostic">
                                <div class="row">   
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Name : <u><areafullname class="areafullname"></areafullname></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Date : <arealabreportdate class="arealabreportdate"><input type="text" class="date-picker" id="lab_report_date" name="lab_report_date" style="border:0px;border-bottom:1px solid #2c3e50;width:78px;" ></arealabreportdate>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center"><br>
                                                <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;">DIAGNOSTIC TESTS</h4>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="checkbox-left">
                                           <h5><b>HEMATOLOGY</b></h5>
                                           <input type="checkbox" name="" id="hm_cbc" style="width:50px;border:0px;border-bottom:1px solid black;"> CBC with PC <br>
                                           <input type="checkbox" name="" id="hm_ph_bsmear" style="width:50px;border:0px;border-bottom:1px solid black;"> Peripheral Blood Smear <br>
                                           <h5><b>CHEMISTRY</b></h5>
                                           <input type="checkbox" name="" id="chem_bun" style="width:50px;border:0px;border-bottom:1px solid black;"> BUN <br>
                                           <input type="checkbox" name="" id="chem_creatinine" style="width:50px;border:0px;border-bottom:1px solid black;"> Creatinine <br>
                                           <input type="checkbox" name="" id="chem_na" style="width:50px;border:0px;border-bottom:1px solid black;"> Na <br>
                                           <input type="checkbox" name="" id="chem_k" style="width:50px;border:0px;border-bottom:1px solid black;"> K <br>
                                           <input type="checkbox" name="" id="chem_fbs" style="width:50px;border:0px;border-bottom:1px solid black;"> FBS <br>
                                           <input type="checkbox" name="" id="chem_ion_calc" style="width:50px;border:0px;border-bottom:1px solid black;"> Ionized Calcium <br>
                                           <input type="checkbox" name="" id="chem_phosporus" style="width:50px;border:0px;border-bottom:1px solid black;"> Phosphorus <br>
                                           <input type="checkbox" name="" id="chem_albumin" style="width:50px;border:0px;border-bottom:1px solid black;"> Albumin <br>
                                           <input type="checkbox" name="" id="chem_uricacid" style="width:50px;border:0px;border-bottom:1px solid black;"> Uric Acid <br>
                                           <input type="checkbox" name="" id="chem_lipidprofile" style="width:50px;border:0px;border-bottom:1px solid black;"> Lipid Profile <br>
                                           <input type="checkbox" name="" id="chem_sgpt" style="width:50px;border:0px;border-bottom:1px solid black;"> SGPT <br>
                                           <input type="checkbox" name="" id="chem_specify" style="width:50px;border:0px;border-bottom:1px solid black;"> Others, pleace specify <input type="text" style="width:65px;border:0px;border-bottom:1px solid black;"><br>
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="checkbox-left">
                                           <h5><b>IMAGING STUDIES</b></h5>
                                           <input type="checkbox" id="imag_12lecg" style="width:50px;border:0px;border-bottom:1px solid black;"> 12 L ECG 
                                           <input type="checkbox" id="imag_cxrpa" style="width:80px;border:0px;border-bottom:1px solid black;margin-left:70px;"> CXR PA <br>
                                           <input type="checkbox" id="imag_kubxray" style="width:50px;border:0px;border-bottom:1px solid black;"> KUB XRAY 
                                           <input type="checkbox" id="imag_ctstronogram" style="width:80px;border:0px;border-bottom:1px solid black;margin-left:63px;"> CT STRONOGRAM<br>
                                           <input type="checkbox" id="imag_kubultrasound" style="width:50px;border:0px;border-bottom:1px solid black;"> KUB Ultrasound 
                                           <input type="checkbox" id="imag_prosultra" style="width:80px;border:0px;border-bottom:1px solid black;margin-left:28px;"> Prostate Ultrasound<br>
                                           <input type="checkbox" id="imag_abdomen" style="width:50px;border:0px;border-bottom:1px solid black;"> Ultrasound of whole Abdomen <br>
                                           <input type="checkbox" id="imag_ct_angiography" style="width:50px;border:0px;border-bottom:1px solid black;"> CT angiography <br>
                                           <input type="checkbox" id="imag_renal_duplex" style="width:50px;border:0px;border-bottom:1px solid black;"> Renal Duplex Scan <br>
                                           <h5><b>RENAL FUNCTION TEST</b></h5>
                                           <input type="checkbox" id="renal_gfr" style="width:50px;border:0px;border-bottom:1px solid black;"> Nuclear GFR Scan <br>
                                           <h5><b>URINE EXAMS</b></h5>
                                           <input type="checkbox" id="urine_routine_analysis" style="width:50px;border:0px;border-bottom:1px solid black;"> Routine Urinalysis 
                                           <input type="checkbox" id="urine_rbc_morph" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:40px;"> 24 hour urine total protein<br>
                                           <input type="checkbox" id="urine_random" style="width:50px;border:0px;border-bottom:1px solid black;"> Urine RBC morphology 
                                           <input type="checkbox" id="urine_sodium" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:15px;"> 24 hour creatinine clearance<br>
                                           <input type="checkbox" id="urine_calcium" style="width:50px;border:0px;border-bottom:1px solid black;"> random urine protein 
                                           <input type="checkbox" id="urine_total_protein" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:22px;"> 24 hour urine calcium<br>
                                           <input type="checkbox" id="urine_clearance" style="width:50px;border:0px;border-bottom:1px solid black;"> 24 hour urine sodium 
                                           <input type="checkbox" id="urine_potassium" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:22px"> 24 hour urine potassium<br>
                                           <input type="checkbox" id="urine_creatinine" style="width:50px;border:0px;border-bottom:1px solid black;"> 24 hour urine creatinine<br>
                                       </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            Please have this test done on <input type="text" name="sentence1" style="width:40%;border:0px;border-bottom:1px solid black;"> at <input type="text" style="width:28%;border:0px;border-bottom:1px solid black;"><br> 
                                            Instructions : <input type="text" name="sentence2" style="width:85%;border:0px;border-bottom:1px solid black;">
                                         </div>
                                    </div>
                                </div>
                                <!-- <footer class="m-t-15 p-20">
                                <ul class="list-inline text-right list-unstyled" style="font-size:12pt;">
                                        <small style="text-decoration:overline;">Joy D Mallari, MD, FPCP, FPSN</small><br>
                                        <small>LIC # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small><br>
                                        <small>PTR # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small>
                                </ul>
                                </footer> -->
                            </div>
                            </form>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green waves-effect right_labreport_create" id="save_labreport_diagnostics">Save</button>
                        <button type="button" class="btn bgm-green waves-effect" id="print_labreport_diagnostics">Print</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_prescription" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
         <!--  laboratroy report MODAL -->
           <!--  MEDICAL CERTIFICATE MODAL -->
        <div id="modal_patient_medical_certificate" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h3 class="modal-title" style="color: white;">Medical Certiticate</h3>
                        <button type="button" class="close close_new_prescription"   data-dismiss="modal" aria-hidden="true" style="margin-top: -20px;">X</button>   
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_medical_certificate_content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="text-center">
                                        <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;">Joy D Mallari - DE LARA ,MD ,FPCP ,FPSN</h4>
                                        
                                        <span class="text-muted">
                                            <address style="font-family:tahoma;font-size:14pt;font-weight:bold;">
                                                Internal Medicine - Nephrology (Kidney Specialist)
                                            </address>
                                        </span>
                                    </div>
                                </div><br>
                                <div class="row">
                                            <div class="col-xs-6">
                                                <div class="text-right">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">Dizon-Mallari Medical Clinic</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            092 Hi way San Pablo, Mexio, Pampanga<br>
                                                            Clinic hours Mon thru Fridays (except Wed) 9-11am<br>
                                                            Tel # 09156285228 (045) 4353646
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="text-left">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">V.L MAKABALI MEMORIAL HOSPITAL</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Medical Arts Building Rm 2113<br>
                                                            Wednesdays and Fridays 2-4 pm<br>
                                                            Tel # (045) 4361275 / 09267200990
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="text-right">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">ACCU-RENAL MEDICAL SERVICES</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Brgy Mabiga, Mabalacat, Pampanga<br>
                                                            Clinic hours T Th 2-4 pm<br>
                                                            Tel # (045) 6245699
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="text-left">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">THE MEDICAL CITY CLARK</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Global Gateway Logistics City, Clark Free Port Zone<br>
                                                            Wed 10-12nn Room 210<br>
                                                            Tel # 09430100581
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                 <form id="frm_medical_record">
                                <div class="row">   
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Name : <u><areafullname class="areafullname"></areafullname></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Date : <areamedcertdate class="areamedcertdate"><input type="text" class="date-picker" id="medical_date" name="medical_date" style="border:0px;border-bottom:1px solid #2c3e50;width:78px;" ></areamedcertdate>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center"><br>
                                                    <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;">MEDICAL CERTIFICATE</h4>
                                                </div>
                                                <div class="text-left"><br>
                                                    <p style="font-family:tahoma;font-size:13pt;">This is to certify that i have seen and examined <u><areafullname class="areafullname"></areafullname></u>, <areaage class="areaage"></areaage>
                                                        years old, residing at <u><areaaddress class="areaaddress"></areaaddress></u>. Patient is diagnosed with:
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            <textarea name="medical_diagnostics" id="medical_diagnostics" style="width:100%;border:0px;font-size:13pt;"rows="11" placeholder="Enter Diagnostics here.."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left"><br>
                                            <p style="font-family:tahoma;font-size:13pt;">This certification is issued upon the request of <u><areafullname class="areafullname"></u> for whatever purpose it may serve.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <footer class="m-t-15 p-20">
                                <ul class="list-inline text-right list-unstyled" style="font-size:12pt;">
                                        <small style="text-decoration:overline;">Joy D Mallari, MD, FPCP, FPSN</small><br>
                                        <small>LIC # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small><br>
                                        <small>PTR # <span style="border-bottom: 1px solid #2c3e50; padding-left: 96px">&nbsp;</span></small>
                                </ul>
                                </footer>
                            </div>
                            </form>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green waves-effect right_medcert_create" id="save_medical_certificate">Save</button>
                        <button type="button" class="btn bgm-green waves-effect" id="print_medical_certificate">Print</button>
                        <button type="button" class="btn bgm-red waves-effect close_new_prescription" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Modified by JBPV
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

<?php echo $_right_navigation ?> 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-success btn-fab printpatientdetailsfloating" data-toggle="tooltip" data-original-title="Print Selected Details" id="main">
          <span class="glyphicon glyphicon-print"></span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- ./wrapper -->
<?php echo $_def_js_files ?> 
<?php echo $_rights; ?>

    <script type="text/javascript">
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _btnNew; var _hepatitis_stat;
    var _dialysisbath_bicarbonate=0; var _dialysisacid_hd144a=0;
    var _dialyzer_type=0; var dzc=0; dzhe=0; dzhf=0; dzren=0;
    var _prehd_stat; var prehd_am=0; var prehd_wc=0; var prehd_bs=0; var prehd_amwa=0;
    var _posthd_stat; var posthd_am=0; var posthd_wc=0; var posthd_bs=0; var posthd_amwa=0;
    var _prehd_pulse_stat; var ps_reg=0; var ps_irreg=0;
    var _posthd_pulse_stat; var posthd_ps_reg=0; var posthd_ps_irreg=0;
    var _prehd_neuro_stat; var _prehd_neuro_comatose;
    var _posthd_neuro_stat; var _posthd_neuro_comatose;
    var _prehd_skincolor_stat;
    var _posthd_skincolor_stat;
    var _prehd_others_stat;
    var _posthd_others_stat;
    var _prehd_turgor_stat; var _prehd_neckveins_stat;
    var _posthd_turgor_stat; var _posthd_neckveins_stat;
    var _prehd_genitourinary_stat;
    var _posthd_genitourinary_stat;
    var _prehd_arterial_stat; var _prehd_venous_stat; var _prehd_cathererdressing_stat;
    var _posthd_arterial_stat; var _posthd_venous_stat; var _posthd_cathererdressing_stat;
    var _prehd_av_fistula_yes_stat; var _prehd_anesthesia_stat;
    var _posthd_av_fistula_yes_stat; var _posthd_anesthesia_stat;
    var _prehd_fistula_thrill_stat; var _prehd_fistula_bruit_stat; var _prehd_fistula_signs_stat;
    var _posthd_fistula_thrill_stat; var _posthd_fistula_bruit_stat; var _posthd_fistula_signs_stat;
    var _dhh=0; var _discharge_stat;
    var _selectedname; var _isChecked;
    var _selectRowObjprescription; var _selectedIDprescription;
    var _selectRowObjlab; var _selectedIDlab;
    var _selectRowObjbilling; var _selectedIDbilling;
    var _selectRowObjvisiting; var _selectedIDvisiting;
    var _txnMode1; var _txnMode2; var _txdelete; var _txnMode3;
    var _txnprescription;
    var _nephrotxn; var _patient_nephro_id;

    

    var initializeControls=function(){
        dt=$('#tbl_patientinfo').DataTable({
        "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "ajax" : "Patient_Info/transaction/list",
        "columns": [
            {
                "targets": [0],
                "class":          "patient-details ",
                "orderable":      false,
                "data":           null,
                "defaultContent": "<center><span class='glyphicon glyphicon-plus-sign'></span></center>",
                "bDestroy": true,
            },
            { targets:[0],data: "attending_physc" },
            { targets:[1],data: "treatment_no" },
            { targets:[2],data: "fullname" },
            {
                targets:[3],
                render: function (data, type, full, meta){

                    return '<center>'+btn_patientinfo_edit+btn_patientinfo_trash+'</center>';
                }

            }

            ],
            language: {
                         searchPlaceholder: "Search Patients"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }
        });

    }();

    var getPrescription=function(){
            patient_prescription_dt=$('#tbl_patient_prescription').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "paging":true,
            "ajax": {
            "url": "Patient_prescription/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "patient_info_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "prescription_code" },
                { targets:[1],data: "date_prescribed" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_prescription_details='<button class="btn btn-primary btn-sm" name="view_prescription_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_prescription_details+edit_prescription+delete_prescription+'</center>';
                    }

                }
            ],
            language: {
                 searchPlaceholder: "Search Prescription"
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    var getLaboratory=function(){
            patient_lab_dt=$('#tbl_lab').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "paging":true,
            "ajax": {
            "url": "Patient_laboratory/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "patient_info_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "date_lab" },
                { targets:[1],data: "results" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_lab_details='<button class="btn btn-primary btn-sm" name="view_lab_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_lab_details+edit_lab+remove_lab+'</center>';
                    }

                }
            ],
            language: {
                 searchPlaceholder: "Search Laboratory"
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    var getBilling=function(){
            patient_billing_dt=$('#tbl_billing').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Patient_billing/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "patient_info_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "billing_code" },
                { targets:[1],data: "billing_date" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                        var view_billing_details='<button class="btn btn-primary btn-sm" name="view_billing_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_billing_details+edit_billing+remove_billing+'</center>';
                    }

                }
            ],
            language: {
                 searchPlaceholder: "Search Billing"
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    var getVisitingRecord=function(){
            patient_visiting_record_dt=$('#tbl_visiting_record').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Patient_visiting/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "patient_info_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "visiting_date" },
                { targets:[1],data: "visiting_note" },
                { targets:[2],data: "visiting_diagnostics" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){
                        var view_visiting_details='<button class="btn btn-primary btn-xs" name="view_visiting_details_record"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_visiting_details+edit_visiting+remove_visiting+'</center>';
                    }

                }
            ],
            language: {
                 searchPlaceholder: "Search Patient Visiting Record"
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    var getClinical=function(){
            patient_clinical_dt=$('#tbl_clinical').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Patient_clinical/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "patient_info_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "clinical_diagnostics" },
                { targets:[1],data: "clinical_treatment" },
                { targets:[2],data: "clinical_medication" },
                { targets:[3],data: "clinical_remarks" },
                {
                    targets:[4],
                    render: function (data, type, full, meta){
                        var view_clinical_details='<button class="btn btn-primary btn-xs" name="view_clinical_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_clinical_details+edit_clinical+'</center>';
                    }

                }
            ],
            language: {
                 searchPlaceholder: "Search Clinical Database"
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#ref_patient_id').change(function() {
        if($(this).val()==0){
            $(this).val('');
            $('#modal_ref_patient').modal('toggle');
        }
    });

    $("#ref_patient_id").val('');

    

    $('#btn_create_patient').click(function(){
        if(validateRequiredFields($('#frm_ref_patients'))){
            if(_txnMode==="new"){
                //alert("aw");
                createPatient().done(function(response){
                    showNotification(response);
                    alert(response.row_added[0].ref_patient_id);
                    $("#ref_patient_id").append('<option value='+response.row_added[0].ref_patient_id+'>'+response.row_added[0].fullname+'</option>');
                    $("#ref_patient_id").val(response.row_added[0].ref_patient_id);
                    clearFields($('#frm_ref_patients'))
                }).always(function(){
                    $('#modal_ref_patient').modal('toggle');
                    $.unblockUI();
                });
                return;
            }
        }
        else{}
    });
    
    var createPatient=function(){
        var _data=$('#frm_ref_patients').serializeArray();
        /*_data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});*/

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Ref_patient/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
   
    };  

    /*this button is in sidebar*/
    $('#process_type').click(function(){
        if(_isChecked==true){
            $('.areafullname').text(_selectedname);
            $('#modal_process_type').modal('toggle'); 
        }
        else{
            notice_notif();
        } 
    });

    $('#clean').click(function(){
        $("#hepatitis_b").attr("checked",false);
        $("#hepatitis_c").attr("checked",false);
         if(_hepatitis_stat=="clean"){
            _hepatitis_stat = "";
            $("#clean").attr("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _hepatitis_stat = "clean";
            $("#clean").attr("checked",true);
            /*alert(_hepatitis_stat);*/
        }

    });

    $('#hepatitis_b').click(function(){
        $("#clean").attr("checked",false);
        $("#hepatitis_c").attr("checked",false);
        if(_hepatitis_stat=="hepatitis_b"){
            _hepatitis_stat = "";
            $("#hepatitis_b").attr("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _hepatitis_stat = "hepatitis_b";
            $("#hepatitis_b").attr("checked",true);
            /*alert(_hepatitis_stat);*/
        }
    });

    $('#hepatitis_c').click(function(){
        $("#clean").attr("checked",false);
        $("#hepatitis_b").attr("checked",false);
        
        if(_hepatitis_stat=="hepatitis_c"){
            _hepatitis_stat = "";
            $("#hepatitis_c").attr("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _hepatitis_stat = "hepatitis_c";
            $("#hepatitis_c").attr("checked",true);
            /*alert(_hepatitis_stat);*/
        }
        /*alert(_hepatitis_stat);*/
    });

    $('#dialysisbath_bicarbonate').click(function(){
        if(_dialysisbath_bicarbonate==1){
            _dialysisbath_bicarbonate = 0;
            /*alert(_dialysisbath_bicarbonate);*/
        }
        else{
            _dialysisbath_bicarbonate = 1;
            /*alert(_dialysisbath_bicarbonate);*/
        }
    });

    $('#dialysisacid_hd144a').click(function(){
        if(_dialysisacid_hd144a==1){
            _dialysisacid_hd144a = 0;
            /*alert(_dialysisacid_hd144a);*/
        }
        else{
            _dialysisacid_hd144a = 1;
            /*alert(_dialysisacid_hd144a);*/
        }
    });

    $('#dialyzer_conventional').click(function(){
        $("#dialyzer_conventional").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        $("#dialyzer_renalinstrip").attr("checked",false);
        /*dzc=0;*/ dzhe=0; dzhf=0; dzren=0;
        if(dzc==0){
            dzc=1;
            $("#dialyzer_conventional").prop("checked",true);
            $("#other_dialyzer").val('');
            _dialyzer_type = "Conventional";
            /*alert(_dialyzer_type);*/
        }
        else{
            dzc=0;
            $("#dialyzer_conventional").prop("checked",false);
            _dialyzer_type = "";
            /*alert(_dialyzer_type);*/
        }
        
    });

    $('#dialyzer_highefficiency').click(function(){
        $("#dialyzer_conventional").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        $("#dialyzer_renalinstrip").attr("checked",false);
        dzc=0;/* dzhe=0;*/ dzhf=0; dzren=0;
        if(dzhe==0){
            dzhe=1;
            $("#dialyzer_highefficiency").prop("checked",true);
            $("#other_dialyzer").val('');
            _dialyzer_type = "High Efficiency";
            /*alert(_dialyzer_type);*/
        }
        else{
            dzhe=0;
            $("#dialyzer_highefficiency").prop("checked",false);
            _dialyzer_type = "";
            /*alert(_dialyzer_type);*/
        }
    });

    $('#dialyzer_highflux').click(function(){
        $("#dialyzer_conventional").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        $("#dialyzer_renalinstrip").attr("checked",false);
        dzc=0; dzhe=0;/* dzhf=0;*/ dzren=0;
        if(dzhf==0){
            dzhf=1;
            $("#dialyzer_highflux").prop("checked",true);
            $("#other_dialyzer").val('');
            _dialyzer_type = "High Flux";
            /*alert(_dialyzer_type);*/
        }
        else{
            dzhf=0;
            $("#dialyzer_highflux").prop("checked",false);
            _dialyzer_type = "";
            /*alert(_dialyzer_type);*/
        }
    });

    $('#dialyzer_renalinstrip').click(function(){
        $("#dialyzer_conventional").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        $("#dialyzer_renalinstrip").attr("checked",false);
        dzc=0; dzhe=0; dzhf=0;/* dzren=0;*/
        if(dzren==0){
            dzren=1;
            $("#dialyzer_renalinstrip").prop("checked",true);
            $("#other_dialyzer").val('');
            _dialyzer_type = "Renalin Strip";
            /*alert(_dialyzer_type);*/
        }
        else{
            dzren=0;
            $("#dialyzer_renalinstrip").prop("checked",false);
            _dialyzer_type = "";
            /*alert(_dialyzer_type);*/
        }
    });

    $('#other_dialyzer').keypress(function(){
        _dialyzer_type = $(this).val();
        $(".dialyzertype").attr('checked', false);
        dzc=0; dzhe=0; dzhf=0; dzren=0;
    });

    /*var Un_checkdialyzer=function(){
        $("#dialyzer_conventional").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        $("#dialyzer_renalinstrip").attr("checked",false);
        dzc=0; dzhe=0; dzhf=0; dzren=0;
    };*/  
        //prehd
    $('#prehd_ambulatory').click(function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
       /* prehd_am=0;*/ prehd_wc=0; prehd_bs=0; prehd_amwa=0;
        if(prehd_am==0){
            prehd_am=1;
            $("#prehd_ambulatory").prop("checked",true);
            _prehd_stat = "Ambulatory";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_am=0;
            $("#prehd_ambulatory").prop("checked",false);
            _prehd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //posthd
    $('#posthd_ambulatory').click(function(){
        $("#posthd_ambulatory").attr("checked",false);
        $("#posthd_wheelchair").attr("checked",false);
        $("#posthd_bedstretcher").attr("checked",false);
        $("#posthd_ambulatory_assistance").attr("checked",false);
       /* prehd_am=0;*/ posthd_wc=0; posthd_bs=0; posthd_amwa=0;
        if(posthd_am==0){
            posthd_am=1;
            $("#posthd_ambulatory").prop("checked",true);
            _posthd_stat = "Ambulatory";
            /*alert(_prehd_stat);*/
        }
        else{
            posthd_am=0;
            $("#posthd_ambulatory").prop("checked",false);
            _posthd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //prehd
    $('#prehd_wheelchair').click(function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
        prehd_am=0; /*prehd_wc=0;*/ prehd_bs=0; prehd_amwa=0;
        if(prehd_wc==0){
            prehd_wc=1;
            $("#prehd_wheelchair").prop("checked",true);
            _prehd_stat = "WheelChair";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_wc=0;
            $("#prehd_wheelchair").prop("checked",false);
            _prehd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });

        //posthd
    $('#posthd_wheelchair').click(function(){
        $("#posthd_ambulatory").attr("checked",false);
        $("#posthd_wheelchair").attr("checked",false);
        $("#posthd_bedstretcher").attr("checked",false);
        $("#posthd_ambulatory_assistance").attr("checked",false);
        posthd_am=0; /*prehd_wc=0;*/ posthd_bs=0; posthd_amwa=0;
        if(posthd_wc==0){
            posthd_wc=1;
            $("#posthd_wheelchair").prop("checked",true);
            _posthd_stat = "WheelChair";
            /*alert(_prehd_stat);*/
        }
        else{
            posthd_wc=0;
            $("#posthd_wheelchair").prop("checked",false);
            _posthd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //prehd
    $('#prehd_bedstretcher').click(function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
        prehd_am=0; prehd_wc=0; /*prehd_bs=0;*/ prehd_amwa=0;
        if(prehd_bs==0){
            prehd_bs=1;
            $("#prehd_bedstretcher").prop("checked",true);
            _prehd_stat = "Bed Stretcher";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_bs=0;
            $("#prehd_bedstretcher").prop("checked",false);
            _prehd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //posthd
    $('#posthd_bedstretcher').click(function(){
        $("#posthd_ambulatory").attr("checked",false);
        $("#posthd_wheelchair").attr("checked",false);
        $("#posthd_bedstretcher").attr("checked",false);
        $("#posthd_ambulatory_assistance").attr("checked",false);
        posthd_am=0; posthd_wc=0; /*prehd_bs=0;*/ posthd_amwa=0;
        if(posthd_bs==0){
            posthd_bs=1;
            $("#posthd_bedstretcher").prop("checked",true);
            _posthd_stat = "Bed Stretcher";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_bs=0;
            $("#prehd_bedstretcher").prop("checked",false);
            _posthd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //prehd
    $('#prehd_ambulatory_assistance').click(function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
        prehd_am=0; prehd_wc=0; prehd_bs=0;/* prehd_amwa=0;*/
        if(prehd_amwa==0){
            prehd_amwa=1;
            $("#prehd_ambulatory_assistance").prop("checked",true);
            _prehd_stat = "Ambulatory W/ Assist";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_amwa=0;
            $("#prehd_ambulatory_assistance").prop("checked",false);
            _prehd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //posthd
    $('#posthd_ambulatory_assistance').click(function(){
        $("#posthd_ambulatory").attr("checked",false);
        $("#posthd_wheelchair").attr("checked",false);
        $("#posthd_bedstretcher").attr("checked",false);
        $("#posthd_ambulatory_assistance").attr("checked",false);
        posthd_am=0; posthd_wc=0; posthd_bs=0;/* prehd_amwa=0;*/
        if(posthd_amwa==0){
            posthd_amwa=1;
            $("#posthd_ambulatory_assistance").prop("checked",true);
            _posthd_stat = "Ambulatory W/ Assist";
            /*alert(_prehd_stat);*/
        }
        else{
            posthd_amwa=0;
            $("#posthd_ambulatory_assistance").prop("checked",false);
            _posthd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });

    /*var Un_checkprehd=function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
        prehd_am=0; prehd_wc=0; prehd_bs=0; prehd_amwa=0;
    }; */
        //prehd
    $('#prehd_pulse_regular').click(function(){
        $("#prehd_pulse_regular").prop("checked",false);
        $("#prehd_pulse_irregular").prop("checked",false);
       /* ps_reg=0;*/ ps_irreg=0;
        if(ps_reg==0){
            ps_reg=1;
            $("#prehd_pulse_regular").prop("checked",true);
            _prehd_pulse_stat = "Regular";
            /*alert(_prehd_pulse_stat);*/
        }
        else{
            ps_reg=0;
            $("#prehd_pulse_regular").prop("checked",false);
            _prehd_pulse_stat = "";
            /*alert(_prehd_pulse_stat);*/
        }
    });
        //posthd
    $('#posthd_pulse_regular').click(function(){
        $("#posthd_pulse_regular").prop("checked",false);
        $("#posthd_pulse_irregular").prop("checked",false);
       /* ps_reg=0;*/ posthd_ps_irreg=0;
        if(posthd_ps_reg==0){
            posthd_ps_reg=1;
            $("#posthd_pulse_regular").prop("checked",true);
            _posthd_pulse_stat = "Regular";
            /*alert(_prehd_pulse_stat);*/
        }
        else{
            posthd_ps_reg=0;
            $("#posthd_pulse_regular").prop("checked",false);
            _posthd_pulse_stat = "";
            /*alert(_prehd_pulse_stat);*/
        }
    });
        //prehd
    $('#prehd_pulse_irregular').click(function(){
        $("#prehd_pulse_regular").prop("checked",false);
        $("#prehd_pulse_irregular").prop("checked",false);
        ps_reg=0; /*ps_irreg=0;*/
        if(ps_irreg==0){
            ps_irreg=1;
            $("#prehd_pulse_irregular").prop("checked",true);
            _prehd_pulse_stat = "Irregular";
            /*alert(_prehd_pulse_stat);*/
        }
        else{
            ps_irreg=0;
            $("#prehd_pulse_irregular").prop("checked",false);
            _prehd_pulse_stat = "";
            /*alert(_prehd_pulse_stat);*/
        }
    });
        //posthd
    $('#posthd_pulse_irregular').click(function(){
        $("#posthd_pulse_regular").prop("checked",false);
        $("#posthd_pulse_irregular").prop("checked",false);
        posthd_ps_reg=0; /*ps_irreg=0;*/
        if(posthd_ps_irreg==0){
            posthd_ps_irreg=1;
            $("#posthd_pulse_irregular").prop("checked",true);
            _posthd_pulse_stat = "Irregular";
            /*alert(_prehd_pulse_stat);*/
        }
        else{
            posthd_ps_irreg=0;
            $("#posthd_pulse_irregular").prop("checked",false);
            _posthd_pulse_stat = "";
            /*alert(_prehd_pulse_stat);*/
        }
    });

        //prehd
    $('#prehd_neuro_comatose').click(function(){
        $("#prehd_neuro_lethargic").attr("checked",false);
        $("#prehd_neuro_conscious").attr("checked",false);
        $("#prehd_neuro_gcs").attr("checked",false);
         if(_prehd_neuro_stat=="comatose"){
            _prehd_neuro_stat = "";
            $("#prehd_neuro_comatose").attr("checked",false);
            /*alert(_prehd_neuro_stat);*/
        }
        else{
            _prehd_neuro_stat = "comatose";
            $("#prehd_neuro_comatose").attr("checked",true);
            /*alert(_prehd_neuro_stat);*/
        }

    });
        //posthd
    $('#posthd_neuro_comatose').click(function(){
        $("#posthd_neuro_lethargic").attr("checked",false);
        $("#posthd_neuro_conscious").attr("checked",false);
        $("#posthd_neuro_gcs").attr("checked",false);
         if(_posthd_neuro_stat=="comatose"){
            _posthd_neuro_stat = "";
            $("#posthd_neuro_comatose").attr("checked",false);
            /*alert(_posthd_neuro_stat);*/
        }
        else{
            _posthd_neuro_stat = "comatose";
            $("#posthd_neuro_comatose").attr("checked",true);
            /*alert(_posthd_neuro_stat);*/
        }

    });
        //prehd
    $('#prehd_neuro_lethargic').click(function(){
        $("#prehd_neuro_comatose").attr("checked",false);
        $("#prehd_neuro_conscious").attr("checked",false);
        $("#prehd_neuro_gcs").attr("checked",false);
         if(_prehd_neuro_stat=="lethargic"){
            _prehd_neuro_stat = "";
            $("#prehd_neuro_lethargic").attr("checked",false);
            /*alert(_prehd_neuro_stat);*/
        }
        else{
            _prehd_neuro_stat = "lethargic";
            $("#prehd_neuro_lethargic").attr("checked",true);
            /*alert(_prehd_neuro_stat);*/
        }

    });
        //posthd
    $('#posthd_neuro_lethargic').click(function(){
        $("#posthd_neuro_comatose").attr("checked",false);
        $("#posthd_neuro_conscious").attr("checked",false);
        $("#posthd_neuro_gcs").attr("checked",false);
         if(_posthd_neuro_stat=="lethargic"){
            _posthd_neuro_stat = "";
            $("#posthd_neuro_lethargic").attr("checked",false);
            /*alert(_posthd_neuro_stat);*/
        }
        else{
            _posthd_neuro_stat = "lethargic";
            $("#posthd_neuro_lethargic").attr("checked",true);
            /*alert(_posthd_neuro_stat);*/
        }

    });
        //prehd
    $('#prehd_neuro_conscious').click(function(){
        $("#prehd_neuro_comatose").attr("checked",false);
        $("#prehd_neuro_lethargic").attr("checked",false);
        $("#prehd_neuro_gcs").attr("checked",false);
         if(_prehd_neuro_stat=="conscious"){
            _prehd_neuro_stat = "";
            $("#prehd_neuro_conscious").attr("checked",false);
            /*alert(_prehd_neuro_stat);*/
        }
        else{
            _prehd_neuro_stat = "conscious";
            $("#prehd_neuro_conscious").attr("checked",true);
            /*alert(_prehd_neuro_stat);*/
        }

    });
        //posthd
    $('#posthd_neuro_conscious').click(function(){
        $("#posthd_neuro_comatose").attr("checked",false);
        $("#posthd_neuro_lethargic").attr("checked",false);
        $("#posthd_neuro_gcs").attr("checked",false);
         if(_posthd_neuro_stat=="conscious"){
            _posthd_neuro_stat = "";
            $("#posthd_neuro_conscious").attr("checked",false);
            /*alert(_posthd_neuro_stat);*/
        }
        else{
            _posthd_neuro_stat = "conscious";
            $("#posthd_neuro_conscious").attr("checked",true);
            /*alert(_posthd_neuro_stat);*/
        }

    });
        //prehd
    $('#prehd_neuro_gcs').click(function(){
        $("#prehd_neuro_comatose").attr("checked",false);
        $("#prehd_neuro_lethargic").attr("checked",false);
        $("#prehd_neuro_conscious").attr("checked",false);
         if(_prehd_neuro_stat=="gcs"){
            _prehd_neuro_stat = "";
            $("#prehd_neuro_gcs").attr("checked",false);
            /*alert(_prehd_neuro_stat);*/
        }
        else{
            _prehd_neuro_stat = "gcs";
            $("#prehd_neuro_gcs").attr("checked",true);
            /*alert(_prehd_neuro_stat);*/
        }

    });
        //posthd
    $('#posthd_neuro_gcs').click(function(){
        $("#posthd_neuro_comatose").attr("checked",false);
        $("#posthd_neuro_lethargic").attr("checked",false);
        $("#posthd_neuro_conscious").attr("checked",false);
         if(_posthd_neuro_stat=="gcs"){
            _posthd_neuro_stat = "";
            $("#posthd_neuro_gcs").attr("checked",false);
            /*alert(_posthd_neuro_stat);*/
        }
        else{
            _posthd_neuro_stat = "gcs";
            $("#posthd_neuro_gcs").attr("checked",true);
            /*alert(_posthd_neuro_stat);*/
        }

    });
        //prehd
    $('#prehd_skincolor_normal').click(function(){
        $("#prehd_skincolor_pale").attr("checked",false);
        $("#prehd_skincolor_cyanotic").attr("checked",false);
         if(_prehd_skincolor_stat=="normal"){
            _prehd_skincolor_stat = "";
            $("#prehd_skincolor_normal").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_skincolor_stat = "normal";
            $("#prehd_skincolor_normal").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_skincolor_normal').click(function(){
        $("#posthd_skincolor_pale").attr("checked",false);
        $("#posthd_skincolor_cyanotic").attr("checked",false);
         if(_posthd_skincolor_stat=="normal"){
            _posthd_skincolor_stat = "";
            $("#posthd_skincolor_normal").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_skincolor_stat = "normal";
            $("#posthd_skincolor_normal").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_skincolor_pale').click(function(){
        $("#prehd_skincolor_normal").attr("checked",false);
        $("#prehd_skincolor_cyanotic").attr("checked",false);
         if(_prehd_skincolor_stat=="pale"){
            _prehd_skincolor_stat = "";
            $("#prehd_skincolor_pale").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_skincolor_stat = "pale";
            $("#prehd_skincolor_pale").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_skincolor_pale').click(function(){
        $("#posthd_skincolor_normal").attr("checked",false);
        $("#posthd_skincolor_cyanotic").attr("checked",false);
         if(_posthd_skincolor_stat=="pale"){
            _posthd_skincolor_stat = "";
            $("#posthd_skincolor_pale").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_skincolor_stat = "pale";
            $("#posthd_skincolor_pale").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_skincolor_cyanotic').click(function(){
        $("#prehd_skincolor_normal").attr("checked",false);
        $("#prehd_skincolor_pale").attr("checked",false);
         if(_prehd_skincolor_stat=="cyanotic"){
            _prehd_skincolor_stat = "";
            $("#prehd_skincolor_cyanotic").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_skincolor_stat = "cyanotic";
            $("#prehd_skincolor_cyanotic").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_skincolor_cyanotic').click(function(){
        $("#posthd_skincolor_normal").attr("checked",false);
        $("#posthd_skincolor_pale").attr("checked",false);
         if(_posthd_skincolor_stat=="cyanotic"){
            _posthd_skincolor_stat = "";
            $("#posthd_skincolor_cyanotic").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_skincolor_stat = "cyanotic";
            $("#posthd_skincolor_cyanotic").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_others_ecchymosis').click(function(){
        $("#prehd_others_bruises").attr("checked",false);
         if(_prehd_others_stat=="ecchymosis"){
            _prehd_others_stat = "";
            $("#prehd_others_ecchymosis").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_others_stat = "ecchymosis";
            $("#prehd_others_ecchymosis").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_others_ecchymosis').click(function(){
        $("#posthd_others_bruises").attr("checked",false);
         if(_posthd_others_stat=="ecchymosis"){
            _posthd_others_stat = "";
            $("#posthd_others_ecchymosis").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_others_stat = "ecchymosis";
            $("#posthd_others_ecchymosis").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_others_bruises').click(function(){
        $("#prehd_others_ecchymosis").attr("checked",false);
         if(_prehd_others_stat=="bruises"){
            _prehd_others_stat = "";
            $("#prehd_others_bruises").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_others_stat = "bruises";
            $("#prehd_others_bruises").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_others_bruises').click(function(){
        $("#posthd_others_ecchymosis").attr("checked",false);
         if(_posthd_others_stat=="bruises"){
            _posthd_others_stat = "";
            $("#posthd_others_bruises").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_others_stat = "bruises";
            $("#posthd_others_bruises").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_turgor_good').click(function(){
        $("#prehd_turgor_poor").attr("checked",false);
         if(_prehd_turgor_stat=="good"){
            _prehd_turgor_stat = "";
            $("#prehd_turgor_good").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_turgor_stat = "good";
            $("#prehd_turgor_good").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_turgor_good').click(function(){
        $("#posthd_turgor_poor").attr("checked",false);
         if(_posthd_turgor_stat=="good"){
            _posthd_turgor_stat = "";
            $("#posthd_turgor_good").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_turgor_stat = "good";
            $("#posthd_turgor_good").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_turgor_poor').click(function(){
        $("#prehd_turgor_good").attr("checked",false);
         if(_prehd_turgor_stat=="poor"){
            _prehd_turgor_stat = "";
            $("#prehd_turgor_poor").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_turgor_stat = "poor";
            $("#prehd_turgor_poor").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //psothd
    $('#posthd_turgor_poor').click(function(){
        $("#posthd_turgor_good").attr("checked",false);
         if(_posthd_turgor_stat=="poor"){
            _posthd_turgor_stat = "";
            $("#posthd_turgor_poor").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_turgor_stat = "poor";
            $("#posthd_turgor_poor").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_neckveins_flat').click(function(){
        $("#prehd_neckveins_slightlydistented").attr("checked",false);
        $("#prehd_neckveins_distented").attr("checked",false);
         if(_prehd_neckveins_stat=="flat"){
            _prehd_neckveins_stat = "";
            $("#prehd_neckveins_flat").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_neckveins_stat = "flat";
            $("#prehd_neckveins_flat").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_neckveins_flat').click(function(){
        $("#posthd_neckveins_slightlydistented").attr("checked",false);
        $("#posthd_neckveins_distented").attr("checked",false);
         if(_prehd_neckveins_stat=="flat"){
            _posthd_neckveins_stat = "";
            $("#posthd_neckveins_flat").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_neckveins_stat = "flat";
            $("#posthd_neckveins_flat").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_neckveins_slightlydistented').click(function(){
        $("#prehd_neckveins_flat").attr("checked",false);
        $("#prehd_neckveins_distented").attr("checked",false);
         if(_prehd_neckveins_stat=="slightly distented"){
            _prehd_neckveins_stat = "";
            $("#prehd_neckveins_slightlydistented").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_neckveins_stat = "slightly distented";
            $("#prehd_neckveins_slightlydistented").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_neckveins_slightlydistented').click(function(){
        $("#posthd_neckveins_flat").attr("checked",false);
        $("#posthd_neckveins_distented").attr("checked",false);
         if(_posthd_neckveins_stat=="slightly distented"){
            _posthd_neckveins_stat = "";
            $("#posthd_neckveins_slightlydistented").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_neckveins_stat = "slightly distented";
            $("#posthd_neckveins_slightlydistented").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_neckveins_distented').click(function(){
        $("#prehd_neckveins_flat").attr("checked",false);
        $("#prehd_neckveins_slightlydistented").attr("checked",false);
         if(_prehd_neckveins_stat=="distented"){
            _prehd_neckveins_stat = "";
            $("#prehd_neckveins_distented").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_neckveins_stat = "distented";
            $("#prehd_neckveins_distented").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_neckveins_distented').click(function(){
        $("#posthd_neckveins_flat").attr("checked",false);
        $("#posthd_neckveins_slightlydistented").attr("checked",false);
         if(_posthd_neckveins_stat=="distented"){
            _posthd_neckveins_stat = "";
            $("#prehd_neckveins_distented").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_neckveins_stat = "distented";
            $("#posthd_neckveins_distented").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_genitourinary_hematuria').click(function(){
        $("#prehd_genitourinary_dysuria").attr("checked",false);
        $("#prehd_genitourinary_menstruation").attr("checked",false);
         if(_prehd_genitourinary_stat=="hematuria"){
            _prehd_genitourinary_stat = "";
            $("#prehd_genitourinary_hematuria").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_genitourinary_stat = "hematuria";
            $("#prehd_genitourinary_hematuria").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_genitourinary_hematuria').click(function(){
        $("#posthd_genitourinary_dysuria").attr("checked",false);
        $("#posthd_genitourinary_menstruation").attr("checked",false);
         if(_posthd_genitourinary_stat=="hematuria"){
            _posthd_genitourinary_stat = "";
            $("#posthd_genitourinary_hematuria").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_genitourinary_stat = "hematuria";
            $("#posthd_genitourinary_hematuria").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_genitourinary_dysuria').click(function(){
        $("#prehd_genitourinary_hematuria").attr("checked",false);
        $("#prehd_genitourinary_menstruation").attr("checked",false);
         if(_prehd_genitourinary_stat=="dysuria"){
            _prehd_genitourinary_stat = "";
            $("#prehd_genitourinary_dysuria").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_genitourinary_stat = "dysuria";
            $("#prehd_genitourinary_dysuria").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_genitourinary_dysuria').click(function(){
        $("#posthd_genitourinary_hematuria").attr("checked",false);
        $("#posthd_genitourinary_menstruation").attr("checked",false);
         if(_posthd_genitourinary_stat=="dysuria"){
            _posthd_genitourinary_stat = "";
            $("#posthd_genitourinary_dysuria").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_genitourinary_stat = "dysuria";
            $("#posthd_genitourinary_dysuria").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_genitourinary_menstruation').click(function(){
        $("#prehd_genitourinary_hematuria").attr("checked",false);
        $("#prehd_genitourinary_dysuria").attr("checked",false);
         if(_prehd_genitourinary_stat=="menstruation"){
            _prehd_genitourinary_stat = "";
            $("#prehd_genitourinary_menstruation").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_genitourinary_stat = "menstruation";
            $("#prehd_genitourinary_menstruation").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_genitourinary_menstruation').click(function(){
        $("#posthd_genitourinary_hematuria").attr("checked",false);
        $("#posthd_genitourinary_dysuria").attr("checked",false);
         if(_posthd_genitourinary_stat=="menstruation"){
            _posthd_genitourinary_stat = "";
            $("#posthd_genitourinary_menstruation").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_genitourinary_stat = "menstruation";
            $("#posthd_genitourinary_menstruation").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });

    $('#prehd_arterial_w_difficulty').click(function(){
        $("#prehd_arterial_wo_difficulty").attr("checked",false);
        $("#prehd_arterial_un_aspirate").attr("checked",false);
         if(_prehd_arterial_stat=="with difficulty"){
            _prehd_arterial_stat = "";
            $("#prehd_arterial_w_difficulty").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_arterial_stat = "with difficulty";
            $("#prehd_arterial_w_difficulty").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_arterial_wo_difficulty').click(function(){
        $("#prehd_arterial_w_difficulty").attr("checked",false);
        $("#prehd_arterial_un_aspirate").attr("checked",false);
         if(_prehd_arterial_stat=="without difficulty"){
            _prehd_arterial_stat = "";
            $("#prehd_arterial_wo_difficulty").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_arterial_stat = "without difficulty";
            $("#prehd_arterial_wo_difficulty").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_arterial_un_aspirate').click(function(){
        $("#prehd_arterial_w_difficulty").attr("checked",false);
        $("#prehd_arterial_wo_difficulty").attr("checked",false);
         if(_prehd_arterial_stat=="Unable to Aspirate"){
            _prehd_arterial_stat = "";
            $("#prehd_arterial_un_aspirate").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_arterial_stat = "Unable to Aspirate";
            $("#prehd_arterial_un_aspirate").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_venous_w_difficulty').click(function(){
        $("#prehd_venous_wo_difficulty").attr("checked",false);
        $("#prehd_venous_un_aspirate").attr("checked",false);
        $("#prehd_venous_interchanged").attr("checked",false);
         if(_prehd_venous_stat=="With Difficulty"){
            _prehd_venous_stat = "";
            $("#prehd_venous_w_difficulty").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_venous_stat = "With Difficulty";
            $("#prehd_venous_w_difficulty").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_venous_wo_difficulty').click(function(){
        $("#prehd_venous_w_difficulty").attr("checked",false);
        $("#prehd_venous_un_aspirate").attr("checked",false);
        $("#prehd_venous_interchanged").attr("checked",false);
         if(_prehd_venous_stat=="Without Difficulty"){
            _prehd_venous_stat = "";
            $("#prehd_venous_wo_difficulty").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_venous_stat = "Without Difficulty";
            $("#prehd_venous_wo_difficulty").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_venous_un_aspirate').click(function(){
        $("#prehd_venous_w_difficulty").attr("checked",false);
        $("#prehd_venous_wo_difficulty").attr("checked",false);
        $("#prehd_venous_interchanged").attr("checked",false);
         if(_prehd_venous_stat=="Unable to Aspirate"){
            _prehd_venous_stat = "";
            $("#prehd_venous_un_aspirate").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_venous_stat = "Unable to Aspirate";
            $("#prehd_venous_un_aspirate").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_venous_interchanged').click(function(){
        $("#prehd_venous_w_difficulty").attr("checked",false);
        $("#prehd_venous_wo_difficulty").attr("checked",false);
        $("#prehd_venous_un_aspirate").attr("checked",false);
         if(_prehd_venous_stat=="Interchanged"){
            _prehd_venous_stat = "";
            $("#prehd_venous_interchanged").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_venous_stat = "Interchanged";
            $("#prehd_venous_interchanged").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_cath_dressing_intact').click(function(){
        $("#prehd_cath_dressing_not_intact").attr("checked",false);
        $("#prehd_cath_dressing_soaked").attr("checked",false);
         if(_prehd_cathererdressing_stat=="Intact"){
            _prehd_cathererdressing_stat = "";
            $("#prehd_cath_dressing_intact").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_cathererdressing_stat = "Intact";
            $("#prehd_cath_dressing_intact").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

        //posthd
    $('#posthd_cath_dressing_intact').click(function(){
        $("#posthd_cath_dressing_not_intact").attr("checked",false);
        $("#posthd_cath_dressing_soaked").attr("checked",false);
         if(_posthd_cathererdressing_stat=="Intact"){
            _posthd_cathererdressing_stat = "";
            $("#posthd_cath_dressing_intact").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_cathererdressing_stat = "Intact";
            $("#posthd_cath_dressing_intact").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_cath_dressing_not_intact').click(function(){
        $("#prehd_cath_dressing_intact").attr("checked",false);
        $("#prehd_cath_dressing_soaked").attr("checked",false);
         if(_prehd_cathererdressing_stat=="Not Intact"){
            _prehd_cathererdressing_stat = "";
            $("#prehd_cath_dressing_not_intact").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_cathererdressing_stat = "Not Intact";
            $("#prehd_cath_dressing_not_intact").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    //posthd
    $('#posthd_cath_dressing_not_intact').click(function(){
        $("#posthd_cath_dressing_intact").attr("checked",false);
        $("#posthd_cath_dressing_soaked").attr("checked",false);
         if(_posthd_cathererdressing_stat=="Not Intact"){
            _posthd_cathererdressing_stat = "";
            $("#posthd_cath_dressing_not_intact").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_cathererdressing_stat = "Not Intact";
            $("#posthd_cath_dressing_not_intact").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_cath_dressing_soaked').click(function(){
        $("#prehd_cath_dressing_intact").attr("checked",false);
        $("#prehd_cath_dressing_not_intact").attr("checked",false);
         if(_prehd_cathererdressing_stat=="Soaked"){
            _prehd_cathererdressing_stat = "";
            $("#prehd_cath_dressing_soaked").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_cathererdressing_stat = "Soaked";
            $("#prehd_cath_dressing_soaked").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    //posthd
    $('#posthd_cath_dressing_soaked').click(function(){
        $("#posthd_cath_dressing_intact").attr("checked",false);
        $("#posthd_cath_dressing_not_intact").attr("checked",false);
         if(_posthd_cathererdressing_stat=="Soaked"){
            _posthd_cathererdressing_stat = "";
            $("#posthd_cath_dressing_soaked").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_cathererdressing_stat = "Soaked";
            $("#posthd_cath_dressing_soaked").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });

    $('#prehd_av_fistula_artery').click(function(){
        $("#prehd_av_fistula_venous").attr("checked",false);
         if(_prehd_av_fistula_yes_stat=="Artery"){
            _prehd_av_fistula_yes_stat = "";
            $("#prehd_av_fistula_artery").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_av_fistula_yes_stat = "Artery";
            $("#prehd_av_fistula_artery").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_av_fistula_venous').click(function(){
        $("#prehd_av_fistula_artery").attr("checked",false);
         if(_prehd_av_fistula_yes_stat=="Venous"){
            _prehd_av_fistula_yes_stat = "";
            $("#prehd_av_fistula_artery").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_av_fistula_yes_stat = "Venous";
            $("#prehd_av_fistula_artery").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_anesthesia_none').click(function(){
        $("#prehd_anesthesia_lidocalne").attr("checked",false);
        $("#prehd_anesthesia_topical").attr("checked",false);
         if(_prehd_anesthesia_stat=="None"){
            _prehd_anesthesia_stat = "";
            $("#prehd_anesthesia_none").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_anesthesia_stat = "None";
            $("#prehd_anesthesia_none").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_anesthesia_lidocalne').click(function(){
        $("#prehd_anesthesia_none").attr("checked",false);
        $("#prehd_anesthesia_topical").attr("checked",false);
         if(_prehd_anesthesia_stat=="Lidocalne"){
            _prehd_anesthesia_stat = "";
            $("#prehd_anesthesia_lidocalne").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_anesthesia_stat = "Lidocalne";
            $("#prehd_anesthesia_lidocalne").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_anesthesia_topical').click(function(){
        $("#prehd_anesthesia_none").attr("checked",false);
        $("#prehd_anesthesia_lidocalne").attr("checked",false);
         if(_prehd_anesthesia_stat=="Topical"){
            _prehd_anesthesia_stat = "";
            $("#prehd_anesthesia_topical").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_anesthesia_stat = "Topical";
            $("#prehd_anesthesia_topical").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_thrill_strong').click(function(){
        $("#prehd_fistula_thrill_weak").attr("checked",false);
         if(_prehd_fistula_thrill_stat=="Strong"){
            _prehd_fistula_thrill_stat = "";
            $("#prehd_fistula_thrill_strong").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_thrill_stat = "Strong";
            $("#prehd_fistula_thrill_strong").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_thrill_weak').click(function(){
        $("#prehd_fistula_thrill_strong").attr("checked",false);
         if(_prehd_fistula_thrill_stat=="Weak"){
            _prehd_fistula_thrill_stat = "";
            $("#prehd_fistula_thrill_weak").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_thrill_stat = "Weak";
            $("#prehd_fistula_thrill_weak").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_bruit_strong').click(function(){
        $("#prehd_fistula_bruit_weak").attr("checked",false);
         if(_prehd_fistula_bruit_stat=="Strong"){
            _prehd_fistula_bruit_stat = "";
            $("#prehd_fistula_bruit_strong").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_bruit_stat = "Strong";
            $("#prehd_fistula_bruit_strong").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_bruit_weak').click(function(){
        $("#prehd_fistula_bruit_strong").attr("checked",false);
         if(_prehd_fistula_bruit_stat=="Weak"){
            _prehd_fistula_bruit_stat = "";
            $("#prehd_fistula_bruit_weak").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_bruit_stat = "Weak";
            $("#prehd_fistula_bruit_weak").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_signs_yes').click(function(){
        $("#prehd_fistula_signs_no").attr("checked",false);
         if(_prehd_fistula_signs_stat=="Yes"){
            _prehd_fistula_signs_stat = "";
            $("#prehd_fistula_signs_yes").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_signs_stat = "Yes";
            $("#prehd_fistula_signs_yes").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_signs_no').click(function(){
        $("#prehd_fistula_signs_yes").attr("checked",false);
         if(_prehd_fistula_signs_stat=="No"){
            _prehd_fistula_signs_stat = "";
            $("#prehd_fistula_signs_no").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_signs_stat = "No";
            $("#prehd_fistula_signs_no").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#discharge_home_with_health').click(function(){
        if(dhh==0){
            dhh=1;
            $("#discharge_home_with_health").prop("checked",true);
            _discharge_stat = "Home with Health Teaching Performed";
            $('#discharge_admitted').val('');
            /*alert(_dialyzer_type);*/
        }
        else{
            dhh=0;
            $("#discharge_home_with_health").prop("checked",false);
            _discharge_stat = "";
            /*alert(_dialyzer_type);*/
        }
    });

    $('#discharge_admitted').keypress(function(){
        _discharge_stat = $(this).val();
        $("#discharge_home_with_health").prop('checked', false);
        dhh=0;
    });

    $('#btn_new').click(function(){
        _txnMode="new";
        $('#modal_patient_Info').modal('show');
        clearFields($('#frm_patientinfo'));
        clearcheckboxes();
    });

    $('#btn_create').click(function(){
        if(validateRequiredFieldsinemployee($('#frm_patientinfo'))){
           if(_txnMode=="new"){
                var type="Patient Information Succesfully Created";
                createPatient_Info().done(function(response){
                    showNotification(response);
                    dt.row.add(response.row_added[0]).draw();
                    clearFields($('#frm_patientinfo'))
                    clearcheckboxes()
                }).always(function(){
                    $.unblockUI();
                     success_notif(type);
                    $('#modal_patient_Info').modal('toggle');
                });
                return;
            }
            if(_txnMode=="edit"){
                var type="Patient Information Succesfully Updated";
                updatePatient_Info().done(function(response){
                    showNotification(response);
                    dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    
                }).always(function(){
                    $.unblockUI();
                     success_notif(type);
                    $('#modal_patient_Info').modal('toggle');
                });
                return;

            }

        }
    });

    $('#tbl_patientinfo tbody').on('click','button[name="remove_info"]',function(){
        _txdelete="patient";
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.patient_info_id;
        delete_notif();
    });

    $('#tbl_patientinfo tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            clearcheckboxes();
            //$('.transaction_type').text('Edit');
            $('#modal_patient_Info ').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.patient_info_id;
           /* alert(data.ref_patient_id);*/
            /*$('#ref_patient_id').val(data.ref_patient_id).trigger('chosen:updated');*/
            /*$("#ref_patient_id").select2("val",data.ref_patient_id);*/
            $("#ref_patient_id").val(data.ref_patient_id).trigger('change');
            //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

           // alert($('input[name="tax_exempt"]').length);
            //$('input[name="tax_exempt"]').val(0);
            //$('input[name="inventory"]').val(data.is_inventory);

            $('input,textarea').each(function(){
            var _elem=$(this);
             $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

                //multiple

            if(data.cash==1){ $("#cash").prop("checked",true); }
            if(data.pcso==1){ $("#pcso").prop("checked",true); }
            if(data.philhealth==1){ $("#philhealth").prop("checked",true); }

            _hepatitis_stat=data.hepatitis_status;
            if(_hepatitis_stat=="clean"){
                _hepatitis_stat = "clean";
                $("#clean").prop("checked",true);
                
            }
            if(_hepatitis_stat=="hepatitis_b"){
                _hepatitis_stat = "hepatitis_b";
                $("#hepatitis_b").prop("checked",true);
                
            }
            if(_hepatitis_stat=="hepatitis_c"){
                _hepatitis_stat = "hepatitis_c";
                $("#hepatitis_c").prop("checked",true);
                
            }
            else{
                _hepatitis_stat="";
            }


            if(data.other_anticoagulant==1){ $("#anticoagulant").prop("checked",true); }
            if(data.other_routineheparin==1){ $("#routine_heparin").prop("checked",true); }
            if(data.other_lowdoseheparin==1){ $("#lowdoseheparin").prop("checked",true); }

            if(data.dialysisbath_bicarbonate==1){ _dialysisbath_bicarbonate = 1; $("#dialysisbath_bicarbonate").prop("checked",true); }
            if(data.dialysisacid_hd144a==1){ _dialysisacid_hd144a = 1; $("#dialysisacid_hd144a").prop("checked",true); }

            if(data.dialyzer_type=="Conventional"){ _dialyzer_type = "Conventional"; $("#dialyzer_conventional").prop("checked",true); }
            if(data.dialyzer_type=="High Efficiency"){ _dialyzer_type = "High Efficiency"; $("#dialyzer_highefficiency").prop("checked",true); }
            if(data.dialyzer_type=="High Flux"){ _dialyzer_type = "High Flux"; $("#dialyzer_highflux").prop("checked",true); }
            if(data.dialyzer_type=="Renalin Strip"){ _dialyzer_type = "Renalin Strip"; $("#dialyzer_renalinstrip").prop("checked",true); }
            else{ _dialyzer_type = data.dialyzer_type; $("#other_dialyzer").val(data.dialyzer_type); }

            if(data.prehd_stat=="Ambulatory"){ _prehd_stat = "Ambulatory"; $("#prehd_ambulatory").prop("checked",true); }
            if(data.prehd_stat=="WheelChair"){ _prehd_stat = "WheelChair"; $("#prehd_wheelchair").prop("checked",true); }
            if(data.prehd_stat=="Bed Stretcher"){ _prehd_stat = "Bed Stretcher"; $("#prehd_bedstretcher").prop("checked",true); }
            if(data.prehd_stat=="Ambulatory W/ Assist"){ _prehd_stat = "Ambulatory W/ Assist"; $("#prehd_ambulatory_assistance").prop("checked",true); }
            else{ _prehd_stat = ""; }
                //multiple
            if(data.prehd_lungs_clear==1){ $("#prehd_lungs_clear").prop("checked",true); }
            if(data.prehd_lungs_crackles==1){ $("#prehd_lungs_crackles").prop("checked",true); }
            if(data.prehd_lungs_hemoptysis==1){ $("#prehd_lungs_hemoptysis").prop("checked",true); }
            if(data.prehd_lungs_dob==1){ $("#prehd_lungs_dob").prop("checked",true); }
            if(data.prehd_lungs_wheezzing==1){ $("#prehd_lungs_wheezzing").prop("checked",true); }

            if(data.prehd_pulse_stat=="Regular"){ _prehd_pulse_stat = "Regular"; ps_reg=1; $("#prehd_pulse_regular").prop("checked",true); }
            if(data.prehd_pulse_stat=="Irregular"){ _prehd_pulse_stat = "Irregular"; ps_irreg=1; $("#prehd_pulse_irregular").prop("checked",true); }
            else{ _prehd_pulse_stat = ""; }

            if(data.prehd_neuro_type=="comatose"){ _prehd_neuro_stat = "comatose"; $("#prehd_neuro_comatose").prop("checked",true); }
            if(data.prehd_neuro_type=="lethargic"){ _prehd_neuro_stat = "lethargic"; $("#prehd_neuro_lethargic").prop("checked",true); }
            if(data.prehd_neuro_type=="conscious"){ _prehd_neuro_stat = "conscious"; $("#prehd_neuro_conscious").prop("checked",true); }
            if(data.prehd_neuro_type=="gcs"){ _prehd_neuro_stat = "gcs"; $("#prehd_neuro_gcs").prop("checked",true); }
            else{ prehd_neuro_type = ""; }

                //multiple
            if(data.prehd_edema_none==1){ $("#prehd_edema_none").prop("checked",true); }
            if(data.prehd_edema_facial==1){ $("#prehd_edema_facial").prop("checked",true); }
            if(data.prehd_edema_pedal==1){ $("#prehd_edema_pedal").prop("checked",true); }
            if(data.prehd_edema_periorbital==1){ $("#prehd_edema_periorbital").prop("checked",true); }
            if(data.prehd_edema_ascitis==1){ $("#prehd_edema_ascitis").prop("checked",true); }

                //multiple
            if(data.prehd_gastro_good_appetite==1){ $("#prehd_gastro_good_appetite").prop("checked",true); }
            if(data.prehd_gastro_no_appetite==1){ $("#prehd_gastro_no_appetite").prop("checked",true); }
            if(data.prehd_gastro_fair_appetite==1){ $("#prehd_gastro_fair_appetite").prop("checked",true); }
            if(data.prehd_gastro_melena==1){ $("#prehd_gastro_melena").prop("checked",true); }
            if(data.prehd_gastro_hematochezia==1){ $("#prehd_gastro_hematochezia").prop("checked",true); }
            if(data.prehd_gastro_hematemesis==1){ $("#prehd_gastro_hematemesis").prop("checked",true); }
                //single
            if(data.prehd_skin_color=="normal"){ _prehd_skincolor_stat = "normal"; $("#prehd_skincolor_normal").prop("checked",true); }
            if(data.prehd_skin_color=="pale"){ _prehd_skincolor_stat = "normal"; $("#prehd_skincolor_pale").prop("checked",true); }
            if(data.prehd_skin_color=="cyanotic"){ _prehd_skincolor_stat = "cyanotic"; $("#prehd_skincolor_cyanotic").prop("checked",true); }
            else{ _prehd_skincolor_stat = ""; }
                //single
            if(data.prehd_others=="ecchymosis"){ _prehd_others_stat = "ecchymosis"; $("#prehd_others_ecchymosis").prop("checked",true); }
            if(data.prehd_others=="bruises"){ _prehd_others_stat = "bruises"; $("#prehd_others_bruises").prop("checked",true); }
            else{ _prehd_others_stat = ""; }
                //single
            if(data.prehd_turgor=="good"){ _prehd_turgor_stat = "good"; $("#prehd_turgor_good").prop("checked",true); }
            if(data.prehd_turgor=="slightly distented"){ _prehd_turgor_stat = "slightly distented"; $("#prehd_turgor_poor").prop("checked",true); }
            else{ _prehd_turgor_stat = ""; }
                //single
            if(data.prehd_neckveins=="flat"){ _prehd_neckveins_stat = "flat"; $("#prehd_neckveins_flat").prop("checked",true); }
            if(data.prehd_neckveins=="slightly distented"){ _prehd_neckveins_stat = "slightly distented"; $("#prehd_neckveins_slightlydistented").prop("checked",true); }
            if(data.prehd_neckveins=="distented"){ _prehd_neckveins_stat = "distented"; $("#prehd_neckveins_distented").prop("checked",true); }
            else{ _prehd_neckveins_stat = ""; }
                //single
            if(data.prehd_genito_urinary=="hematuria"){ _prehd_genitourinary_stat = "hematuria"; $("#prehd_genitourinary_hematuria").prop("checked",true); }
            if(data.prehd_genito_urinary=="dysuria"){ _prehd_genitourinary_stat = "dysuria"; $("#prehd_genitourinary_dysuria").prop("checked",true); }
            if(data.prehd_genito_urinary=="menstruation"){ _prehd_genitourinary_stat = "menstruation"; $("#prehd_genitourinary_menstruation").prop("checked",true); }
            else{ _prehd_genitourinary_stat = ""; }
                //multiple
            if(data.prehd_problems_none==1){ $("#prehd_problems_none").prop("checked",true); }
            if(data.prehd_problems_chest_pain==1){ $("#prehd_problems_chest_pain").prop("checked",true); }
            if(data.prehd_problems_cough==1){ $("#prehd_problems_cough").prop("checked",true); }
            if(data.prehd_problems_abdominal_pain==1){ $("#prehd_problems_abdominal_pain").prop("checked",true); }
            if(data.prehd_problems_lbm==1){ $("#prehd_problems_lbm").prop("checked",true); }
            if(data.prehd_problems_orthopnea==1){ $("#prehd_problems_orthopnea").prop("checked",true); }
            if(data.prehd_problems_fever==1){ $("#prehd_problems_fever").prop("checked",true); }
                //multiple
            if(data.prehd_vascularaccess_pc==1){ $("#prehd_vascularaccess_pc").prop("checked",true); }
            if(data.prehd_vascularaccess_tlc==1){ $("#prehd_vascularaccess_tlc").prop("checked",true); }
            if(data.prehd_vascularaccess_avf==1){ $("#prehd_vascularaccess_avf").prop("checked",true); }
            if(data.prehd_vascularaccess_avg==1){ $("#prehd_vascularaccess_avg").prop("checked",true); }
                //single single
            if(data.prehd_bruit==1){ $("#prehd_bruit").prop("checked",true); }
                //multiple
            if(data.prehd_thrill_strong==1){ $("#prehd_thrill_strong").prop("checked",true); }
            if(data.prehd_thrill_weak==1){ $("#prehd_thrill_weak").prop("checked",true); }
            if(data.prehd_thrill_patent==1){ $("#prehd_thrill_patent").prop("checked",true); }
            if(data.prehd_thrill_clotted==1){ $("#prehd_thrill_clotted").prop("checked",true); }
            if(data.prehd_thrill_redness==1){ $("#prehd_thrill_redness").prop("checked",true); }
            if(data.prehd_thrill_swelling==1){ $("#prehd_thrill_swelling").prop("checked",true); }
            if(data.prehd_thrill_hematoma==1){ $("#prehd_thrill_hematoma").prop("checked",true); }
            if(data.prehd_thrill_pus_secretion==1){ $("#prehd_thrill_pus_secretion").prop("checked",true); }
            if(data.prehd_thrill_no_signs==1){ $("#prehd_thrill_no_signs").prop("checked",true); }
                //single
            if(data.prehd_arterial=="with difficulty"){ _prehd_arterial_stat = "with difficulty"; $("#prehd_arterial_w_difficulty").prop("checked",true); }
            if(data.prehd_arterial=="without difficulty"){ _prehd_arterial_stat = "without difficulty"; $("#prehd_arterial_wo_difficulty").prop("checked",true); }
            if(data.prehd_arterial=="Unable to Aspirate"){ _prehd_arterial_stat = "Unable to Aspirate"; $("#prehd_arterial_un_aspirate").prop("checked",true); }
            else{ _prehd_arterial_stat = ""; }
                //single
            if(data.prehd_venous=="With Difficulty"){ _prehd_venous_stat = "With Difficulty"; $("#prehd_venous_w_difficulty").prop("checked",true); }
            if(data.prehd_venous=="Without Difficulty"){ _prehd_venous_stat = "Without Difficulty"; $("#prehd_venous_wo_difficulty").prop("checked",true); }
            if(data.prehd_venous=="Unable to Aspirate"){ _prehd_venous_stat = "Unable to Aspirate"; $("#prehd_venous_un_aspirate").prop("checked",true); }
            if(data.prehd_venous=="Interchanged"){ _prehd_venous_stat = "Interchanged"; $("#prehd_venous_interchanged").prop("checked",true); }
            else{ _prehd_venous_stat = ""; }
                //single
            if(data.prehd_catherer_dressing=="Intact"){ _prehd_cathererdressing_stat = "Intact"; $("#prehd_cath_dressing_intact").prop("checked",true); }
            if(data.prehd_catherer_dressing=="Not Intact"){ _prehd_cathererdressing_stat = "Not Intact"; $("#posthd_cath_dressing_not_intact").prop("checked",true); }
            if(data.prehd_catherer_dressing=="Soaked"){ _prehd_cathererdressing_stat = "Soaked"; $("#prehd_cath_dressing_soaked").prop("checked",true); }
            else{ _prehd_cathererdressing_stat = ""; }
                //single
            if(data.prehd_av_fistula_cannulation_yes=="Artery"){ _prehd_av_fistula_yes_stat = "Artery"; $("#prehd_av_fistula_artery").prop("checked",true); }
            if(data.prehd_av_fistula_cannulation_yes=="Venous"){ _prehd_av_fistula_yes_stat = "Venous"; $("#prehd_av_fistula_venous").prop("checked",true); }
            else{ _prehd_av_fistula_yes_stat = ""; }
                //single
            if(data.prehd_anesthesia=="None"){ _prehd_anesthesia_stat = "None"; $("#prehd_anesthesia_none").prop("checked",true); }
            if(data.prehd_anesthesia=="Lidocalne"){ _prehd_anesthesia_stat = "Lidocalne"; $("#prehd_anesthesia_lidocalne").prop("checked",true); }
            if(data.prehd_anesthesia=="Topical"){ _prehd_anesthesia_stat = "Topical"; $("#prehd_anesthesia_topical").prop("checked",true); }
            else{ _prehd_anesthesia_stat = ""; }
                //single
            if(data.prehd_fistula_thrill=="Strong"){ _prehd_fistula_thrill_stat = "Strong"; $("#prehd_fistula_thrill_strong").prop("checked",true); }
            if(data.prehd_fistula_thrill=="Weak"){ _prehd_fistula_thrill_stat = "Weak"; $("#prehd_fistula_thrill_weak").prop("checked",true); }
            else{ _prehd_fistula_thrill_stat = ""; }
                //single
            if(data.prehd_fistula_bruit=="Strong"){ _prehd_fistula_bruit_stat = "Strong"; $("#prehd_fistula_bruit_strong").prop("checked",true); }
            if(data.prehd_fistula_bruit=="Weak"){ _prehd_fistula_bruit_stat = "Weak"; $("#prehd_fistula_bruit_weak").prop("checked",true); }
            else{ _prehd_fistula_bruit_stat = ""; }
                //single
            if(data.prehd_fistula_signs_of_infection=="Yes"){ _prehd_fistula_signs_stat = "Yes"; $("#prehd_fistula_signs_yes").prop("checked",true); }
            if(data.prehd_fistula_signs_of_infection=="No"){ _prehd_fistula_signs_stat = "No"; $("#prehd_fistula_signs_no").prop("checked",true); }
            else{ _prehd_fistula_signs_stat = ""; }
                //single but multiple style
            if(data.prehd_fistula_dressing_aseptically==1){ $("#prehd_fistula_dressing_aseptically").prop("checked",true); }
            /*alert(_hepatitis_stat);*/

            //post hd.

            if(data.posthd_stat=="Ambulatory"){ _posthd_stat = "Ambulatory"; $("#posthd_ambulatory").prop("checked",true); }
            if(data.posthd_stat=="WheelChair"){ _posthd_stat = "WheelChair"; $("#posthd_wheelchair").prop("checked",true); }
            if(data.posthd_stat=="Bed Stretcher"){ _posthd_stat = "Bed Stretcher"; $("#posthd_bedstretcher").prop("checked",true); }
            if(data.posthd_stat=="Ambulatory W/ Assist"){ _posthd_stat = "Ambulatory W/ Assist"; $("#posthd_ambulatory_assistance").prop("checked",true); }
            else{ _posthd_stat = ""; }
                //multiple
            if(data.posthd_lungs_clear==1){ $("#posthd_lungs_clear").prop("checked",true); }
            if(data.posthd_lungs_crackles==1){ $("#posthd_lungs_crackles").prop("checked",true); }
            if(data.posthd_lungs_hemoptysis==1){ $("#posthd_lungs_hemoptysis").prop("checked",true); }
            if(data.posthd_lungs_dob==1){ $("#posthd_lungs_dob").prop("checked",true); }
            if(data.posthd_lungs_wheezzing==1){ $("#posthd_lungs_wheezzing").prop("checked",true); }

            if(data.posthd_pulse_stat=="Regular"){ _posthd_pulse_stat = "Regular"; ps_reg=1; $("#posthd_pulse_regular").prop("checked",true); }
            if(data.posthd_pulse_stat=="Irregular"){ _posthd_pulse_stat = "Irregular"; ps_irreg=1; $("#posthd_pulse_irregular").prop("checked",true); }
            else{ _posthd_pulse_stat = ""; }

            if(data.posthd_neuro_type=="comatose"){ _posthd_neuro_stat = "comatose"; $("#posthd_neuro_comatose").prop("checked",true); }
            if(data.posthd_neuro_type=="lethargic"){ _posthd_neuro_stat = "lethargic"; $("#posthd_neuro_lethargic").prop("checked",true); }
            if(data.posthd_neuro_type=="conscious"){ _posthd_neuro_stat = "conscious"; $("#posthd_neuro_conscious").prop("checked",true); }
            if(data.posthd_neuro_type=="gcs"){ _posthd_neuro_stat = "gcs"; $("#posthd_neuro_gcs").prop("checked",true); }
            else{ posthd_neuro_type = ""; }

                //multiple
            if(data.posthd_edema_none==1){ $("#posthd_edema_none").prop("checked",true); }
            if(data.posthd_edema_facial==1){ $("#posthd_edema_facial").prop("checked",true); }
            if(data.posthd_edema_pedal==1){ $("#posthd_edema_pedal").prop("checked",true); }
            if(data.posthd_edema_periorbital==1){ $("#posthd_edema_periorbital").prop("checked",true); }
            if(data.posthd_edema_ascitis==1){ $("#posthd_edema_ascitis").prop("checked",true); }

                //multiple
            if(data.posthd_gastro_good_appetite==1){ $("#posthd_gastro_good_appetite").prop("checked",true); }
            if(data.posthd_gastro_no_appetite==1){ $("#posthd_gastro_no_appetite").prop("checked",true); }
            if(data.posthd_gastro_fair_appetite==1){ $("#posthd_gastro_fair_appetite").prop("checked",true); }
            if(data.posthd_gastro_melena==1){ $("#posthd_gastro_melena").prop("checked",true); }
            if(data.posthd_gastro_hematochezia==1){ $("#posthd_gastro_hematochezia").prop("checked",true); }
            if(data.posthd_gastro_hematemesis==1){ $("#posthd_gastro_hematemesis").prop("checked",true); }
                //single
            if(data.posthd_skin_color=="normal"){ _posthd_skincolor_stat = "normal"; $("#posthd_skincolor_normal").prop("checked",true); }
            if(data.posthd_skin_color=="pale"){ _posthd_skincolor_stat = "normal"; $("#posthd_skincolor_pale").prop("checked",true); }
            if(data.posthd_skin_color=="cyanotic"){ _posthd_skincolor_stat = "cyanotic"; $("#posthd_skincolor_cyanotic").prop("checked",true); }
            else{ _posthd_skincolor_stat = ""; }
                //single
            if(data.posthd_others=="ecchymosis"){ _posthd_others_stat = "ecchymosis"; $("#posthd_others_ecchymosis").prop("checked",true); }
            if(data.posthd_others=="bruises"){ _posthd_others_stat = "bruises"; $("#posthd_others_bruises").prop("checked",true); }
            else{ _posthd_others_stat = ""; }
                //single
            if(data.posthd_turgor=="good"){ _posthd_turgor_stat = "good"; $("#posthd_turgor_good").prop("checked",true); }
            if(data.posthd_turgor=="slightly distented"){ _posthd_turgor_stat = "slightly distented"; $("#posthd_turgor_poor").prop("checked",true); }
            else{ _posthd_turgor_stat = ""; }
                //single
            if(data.posthd_neckveins=="flat"){ _posthd_neckveins_stat = "flat"; $("#posthd_neckveins_flat").prop("checked",true); }
            if(data.posthd_neckveins=="slightly distented"){ _posthd_neckveins_stat = "slightly distented"; $("#posthd_neckveins_slightlydistented").prop("checked",true); }
            if(data.posthd_neckveins=="distented"){ _posthd_neckveins_stat = "distented"; $("#posthd_neckveins_distented").prop("checked",true); }
            else{ _posthd_neckveins_stat = ""; }
                //single
            if(data.posthd_genito_urinary=="hematuria"){ _posthd_genitourinary_stat = "hematuria"; $("#posthd_genitourinary_hematuria").prop("checked",true); }
            if(data.posthd_genito_urinary=="dysuria"){ _posthd_genitourinary_stat = "dysuria"; $("#posthd_genitourinary_dysuria").prop("checked",true); }
            if(data.posthd_genito_urinary=="menstruation"){ _posthd_genitourinary_stat = "menstruation"; $("#posthd_genitourinary_menstruation").prop("checked",true); }
            else{ _posthd_genitourinary_stat = ""; }
                //multiple
            if(data.posthd_problems_none==1){ $("#posthd_problems_none").prop("checked",true); }
            if(data.posthd_problems_chest_pain==1){ $("#posthd_problems_chest_pain").prop("checked",true); }
            if(data.posthd_problems_cough==1){ $("#posthd_problems_cough").prop("checked",true); }
            if(data.posthd_problems_abdominal_pain==1){ $("#posthd_problems_abdominal_pain").prop("checked",true); }
            if(data.posthd_problems_lbm==1){ $("#posthd_problems_lbm").prop("checked",true); }
            if(data.posthd_problems_orthopnea==1){ $("#posthd_problems_orthopnea").prop("checked",true); }
            if(data.posthd_problems_fever==1){ $("#posthd_problems_fever").prop("checked",true); }
                //multiple
            if(data.posthd_vascularaccess_pc==1){ $("#posthd_vascularaccess_pc").prop("checked",true); }
            if(data.posthd_vascularaccess_tlc==1){ $("#posthd_vascularaccess_tlc").prop("checked",true); }
            if(data.posthd_vascularaccess_avf==1){ $("#posthd_vascularaccess_avf").prop("checked",true); }
            if(data.posthd_vascularaccess_avg==1){ $("#posthd_vascularaccess_avg").prop("checked",true); }
                //single single
            if(data.posthd_bruit==1){ $("#posthd_bruit").prop("checked",true); }
                //multiple
            if(data.posthd_thrill_strong==1){ $("#posthd_thrill_strong").prop("checked",true); }
            if(data.posthd_thrill_weak==1){ $("#posthd_thrill_weak").prop("checked",true); }
            if(data.posthd_thrill_patent==1){ $("#posthd_thrill_patent").prop("checked",true); }
            if(data.posthd_thrill_clotted==1){ $("#posthd_thrill_clotted").prop("checked",true); }
            if(data.posthd_thrill_redness==1){ $("#posthd_thrill_redness").prop("checked",true); }
            if(data.posthd_thrill_swelling==1){ $("#posthd_thrill_swelling").prop("checked",true); }
            if(data.posthd_thrill_hematoma==1){ $("#posthd_thrill_hematoma").prop("checked",true); }
            if(data.posthd_thrill_pus_secretion==1){ $("#posthd_thrill_pus_secretion").prop("checked",true); }
            if(data.posthd_thrill_no_signs==1){ $("#posthd_thrill_no_signs").prop("checked",true); }
                //multiple
            if(data.posthd_no_bleeding==1){ $("#posthd_no_bleeding").prop("checked",true); }
            if(data.posthd_arterial_venous_ports==1){ $("#posthd_arterial_venous_ports").prop("checked",true); }
            if(data.posthd_each_port_capped_secured==1){ $("#posthd_each_port_capped_secured").prop("checked",true); }
            if(data.posthd_arterial_venous_flushed==1){ $("#posthd_arterial_venous_flushed").prop("checked",true); }
            if(data.posthd_aseptically_dressed==1){ $("#posthd_aseptically_dressed").prop("checked",true); }
            if(data.posthd_bactroban_ointment==1){ $("#posthd_bactroban_ointment").prop("checked",true); }
                //single
            if(data.discharge_type=="Home with Health Teaching Performed"){ _discharge_stat = "Home with Health Teaching Performed"; $("#discharge_home_with_health").prop("checked",true); }
            else{ _discharge_stat = data.discharge_type; $("#discharge_admitted").val(data.discharge_type); }

    });

    $('#tbl_patientinfo tbody').on( 'click', 'tr td.patient-details', function () {
            _txnMode="edit";
            clearcheckboxes();
            //$('.transaction_type').text('Edit');
            $('#modal_patient_Info_print').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.patient_info_id;

            //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

           // alert($('input[name="tax_exempt"]').length);
            //$('input[name="tax_exempt"]').val(0);
            //$('input[name="inventory"]').val(data.is_inventory);

            $('input,textarea').each(function(){
            var _elem=$(this);
             $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

            $('#details_ref_patient_id').val(data.ref_patient_id);

                //multiple
            if(data.cash==1){ $("#detailcash").prop("checked",true); }
            if(data.pcso==1){ $("#detailpcso").prop("checked",true); }
            if(data.philhealth==1){ $("#detailphilhealth").prop("checked",true); }

            _hepatitis_stat=data.hepatitis_status;
            if(_hepatitis_stat=="clean"){
                _hepatitis_stat = "clean";
                $("#detailclean").prop("checked",true);
                
            }
            if(_hepatitis_stat=="hepatitis_b"){
                _hepatitis_stat = "detailhepatitis_b";
                $("#detailhepatitis_b").prop("checked",true);
                
            }
            if(_hepatitis_stat=="hepatitis_c"){
                _hepatitis_stat = "hepatitis_c";
                $("#detailhepatitis_c").prop("checked",true);
                
            }
            else{
                _hepatitis_stat="";
            }


            if(data.other_anticoagulant==1){ $("#detailanticoagulant").prop("checked",true); }
            if(data.other_routineheparin==1){ $("#detailroutine_heparin").prop("checked",true); }
            if(data.other_lowdoseheparin==1){ $("#detaillowdoseheparin").prop("checked",true); }

            if(data.dialysisbath_bicarbonate==1){ _dialysisbath_bicarbonate = 1; $("#detaildialysisbath_bicarbonate").prop("checked",true); }
            if(data.dialysisacid_hd144a==1){ _dialysisacid_hd144a = 1; $("#detaildialysisacid_hd144a").prop("checked",true); }

            if(data.dialyzer_type=="Conventional"){ _dialyzer_type = "Conventional"; $("#detaildialyzer_conventional").prop("checked",true); }
            if(data.dialyzer_type=="High Efficiency"){ _dialyzer_type = "High Efficiency"; $("#detaildialyzer_highefficiency").prop("checked",true); }
            if(data.dialyzer_type=="High Flux"){ _dialyzer_type = "High Flux"; $("#detaildialyzer_highflux").prop("checked",true); }
            if(data.dialyzer_type=="Renalin Strip"){ _dialyzer_type = "Renalin Strip"; $("#detaildialyzer_renalinstrip").prop("checked",true); }
            else{ _dialyzer_type = data.dialyzer_type; $("#detailother_dialyzer").val(data.dialyzer_type); }

            if(data.prehd_stat=="Ambulatory"){ _prehd_stat = "Ambulatory"; $("#detailprehd_ambulatory").prop("checked",true); }
            if(data.prehd_stat=="WheelChair"){ _prehd_stat = "WheelChair"; $("#detailprehd_wheelchair").prop("checked",true); }
            if(data.prehd_stat=="Bed Stretcher"){ _prehd_stat = "Bed Stretcher"; $("#detailprehd_bedstretcher").prop("checked",true); }
            if(data.prehd_stat=="Ambulatory W/ Assist"){ _prehd_stat = "Ambulatory W/ Assist"; $("#detailprehd_ambulatory_assistance").prop("checked",true); }
            else{ _prehd_stat = ""; }
                //multiple
            if(data.prehd_lungs_clear==1){ $("#detailprehd_lungs_clear").prop("checked",true); }
            if(data.prehd_lungs_crackles==1){ $("#detailprehd_lungs_crackles").prop("checked",true); }
            if(data.prehd_lungs_hemoptysis==1){ $("#detailprehd_lungs_hemoptysis").prop("checked",true); }
            if(data.prehd_lungs_dob==1){ $("#detailprehd_lungs_dob").prop("checked",true); }
            if(data.prehd_lungs_wheezzing==1){ $("#detailprehd_lungs_wheezzing").prop("checked",true); }

            if(data.prehd_pulse_stat=="Regular"){ _prehd_pulse_stat = "Regular"; ps_reg=1; $("detail#prehd_pulse_regular").prop("checked",true); }
            if(data.prehd_pulse_stat=="Irregular"){ _prehd_pulse_stat = "Irregular"; ps_irreg=1; $("#detailprehd_pulse_irregular").prop("checked",true); }
            else{ _prehd_pulse_stat = ""; }

            if(data.prehd_neuro_type=="comatose"){ _prehd_neuro_stat = "comatose"; $("#detailprehd_neuro_comatose").prop("checked",true); }
            if(data.prehd_neuro_type=="lethargic"){ _prehd_neuro_stat = "lethargic"; $("#detailprehd_neuro_lethargic").prop("checked",true); }
            if(data.prehd_neuro_type=="conscious"){ _prehd_neuro_stat = "conscious"; $("#detailprehd_neuro_conscious").prop("checked",true); }
            if(data.prehd_neuro_type=="gcs"){ _prehd_neuro_stat = "gcs"; $("#detailprehd_neuro_gcs").prop("checked",true); }
            else{ prehd_neuro_type = ""; }

                //multiple
            if(data.prehd_edema_none==1){ $("#detailprehd_edema_none").prop("checked",true); }
            if(data.prehd_edema_facial==1){ $("#detailprehd_edema_facial").prop("checked",true); }
            if(data.prehd_edema_pedal==1){ $("#detailprehd_edema_pedal").prop("checked",true); }
            if(data.prehd_edema_periorbital==1){ $("#prehd_edema_periorbital").prop("checked",true); }
            if(data.prehd_edema_ascitis==1){ $("#detailprehd_edema_ascitis").prop("checked",true); }

                //multiple
            if(data.prehd_gastro_good_appetite==1){ $("#detailprehd_gastro_good_appetite").prop("checked",true); }
            if(data.prehd_gastro_no_appetite==1){ $("#detailprehd_gastro_no_appetite").prop("checked",true); }
            if(data.prehd_gastro_fair_appetite==1){ $("#detailprehd_gastro_fair_appetite").prop("checked",true); }
            if(data.prehd_gastro_melena==1){ $("#detailprehd_gastro_melena").prop("checked",true); }
            if(data.prehd_gastro_hematochezia==1){ $("#detailprehd_gastro_hematochezia").prop("checked",true); }
            if(data.prehd_gastro_hematemesis==1){ $("#detailprehd_gastro_hematemesis").prop("checked",true); }
                //single
            if(data.prehd_skin_color=="normal"){ _prehd_skincolor_stat = "normal"; $("#detailprehd_skincolor_normal").prop("checked",true); }
            if(data.prehd_skin_color=="pale"){ _prehd_skincolor_stat = "normal"; $("#detailprehd_skincolor_pale").prop("checked",true); }
            if(data.prehd_skin_color=="cyanotic"){ _prehd_skincolor_stat = "cyanotic"; $("#detailprehd_skincolor_cyanotic").prop("checked",true); }
            else{ _prehd_skincolor_stat = ""; }
                //single
            if(data.prehd_others=="ecchymosis"){ _prehd_others_stat = "ecchymosis"; $("#detailprehd_others_ecchymosis").prop("checked",true); }
            if(data.prehd_others=="bruises"){ _prehd_others_stat = "bruises"; $("#detailprehd_others_bruises").prop("checked",true); }
            else{ _prehd_others_stat = ""; }
                //single
            if(data.prehd_turgor=="good"){ _prehd_turgor_stat = "good"; $("#detailprehd_turgor_good").prop("checked",true); }
            if(data.prehd_turgor=="slightly distented"){ _prehd_turgor_stat = "slightly distented"; $("#detailprehd_turgor_poor").prop("checked",true); }
            else{ _prehd_turgor_stat = ""; }
                //single
            if(data.prehd_neckveins=="flat"){ _prehd_neckveins_stat = "flat"; $("#detailprehd_neckveins_flat").prop("checked",true); }
            if(data.prehd_neckveins=="slightly distented"){ _prehd_neckveins_stat = "slightly distented"; $("#detailprehd_neckveins_slightlydistented").prop("checked",true); }
            if(data.prehd_neckveins=="distented"){ _prehd_neckveins_stat = "distented"; $("#detailprehd_neckveins_distented").prop("checked",true); }
            else{ _prehd_neckveins_stat = ""; }
                //single
            if(data.prehd_genito_urinary=="hematuria"){ _prehd_genitourinary_stat = "hematuria"; $("#detailprehd_genitourinary_hematuria").prop("checked",true); }
            if(data.prehd_genito_urinary=="dysuria"){ _prehd_genitourinary_stat = "dysuria"; $("#detailprehd_genitourinary_dysuria").prop("checked",true); }
            if(data.prehd_genito_urinary=="menstruation"){ _prehd_genitourinary_stat = "menstruation"; $("#detailprehd_genitourinary_menstruation").prop("checked",true); }
            else{ _prehd_genitourinary_stat = ""; }
                //multiple
            if(data.prehd_problems_none==1){ $("#detailprehd_problems_none").prop("checked",true); }
            if(data.prehd_problems_chest_pain==1){ $("#detailprehd_problems_chest_pain").prop("checked",true); }
            if(data.prehd_problems_cough==1){ $("#detailprehd_problems_cough").prop("checked",true); }
            if(data.prehd_problems_abdominal_pain==1){ $("#detailprehd_problems_abdominal_pain").prop("checked",true); }
            if(data.prehd_problems_lbm==1){ $("#detailprehd_problems_lbm").prop("checked",true); }
            if(data.prehd_problems_orthopnea==1){ $("#detailprehd_problems_orthopnea").prop("checked",true); }
            if(data.prehd_problems_fever==1){ $("#detailprehd_problems_fever").prop("checked",true); }
                //multiple
            if(data.prehd_vascularaccess_pc==1){ $("#detailprehd_vascularaccess_pc").prop("checked",true); }
            if(data.prehd_vascularaccess_tlc==1){ $("#detailprehd_vascularaccess_tlc").prop("checked",true); }
            if(data.prehd_vascularaccess_avf==1){ $("#detailprehd_vascularaccess_avf").prop("checked",true); }
            if(data.prehd_vascularaccess_avg==1){ $("#detailprehd_vascularaccess_avg").prop("checked",true); }
                //single single
            if(data.prehd_bruit==1){ $("#detailprehd_bruit").prop("checked",true); }
                //multiple
            if(data.prehd_thrill_strong==1){ $("#detailprehd_thrill_strong").prop("checked",true); }
            if(data.prehd_thrill_weak==1){ $("#detailprehd_thrill_weak").prop("checked",true); }
            if(data.prehd_thrill_patent==1){ $("#detailprehd_thrill_patent").prop("checked",true); }
            if(data.prehd_thrill_clotted==1){ $("#detailprehd_thrill_clotted").prop("checked",true); }
            if(data.prehd_thrill_redness==1){ $("#detailprehd_thrill_redness").prop("checked",true); }
            if(data.prehd_thrill_swelling==1){ $("#detailprehd_thrill_swelling").prop("checked",true); }
            if(data.prehd_thrill_hematoma==1){ $("#detailprehd_thrill_hematoma").prop("checked",true); }
            if(data.prehd_thrill_pus_secretion==1){ $("#detailprehd_thrill_pus_secretion").prop("checked",true); }
            if(data.prehd_thrill_no_signs==1){ $("#detailprehd_thrill_no_signs").prop("checked",true); }
                //single
            if(data.prehd_arterial=="with difficulty"){ _prehd_arterial_stat = "with difficulty"; $("#detailprehd_arterial_w_difficulty").prop("checked",true); }
            if(data.prehd_arterial=="without difficulty"){ _prehd_arterial_stat = "without difficulty"; $("#detailprehd_arterial_wo_difficulty").prop("checked",true); }
            if(data.prehd_arterial=="Unable to Aspirate"){ _prehd_arterial_stat = "Unable to Aspirate"; $("#detailprehd_arterial_un_aspirate").prop("checked",true); }
            else{ _prehd_arterial_stat = ""; }
                //single
            if(data.prehd_venous=="With Difficulty"){ _prehd_venous_stat = "With Difficulty"; $("#detailprehd_venous_w_difficulty").prop("checked",true); }
            if(data.prehd_venous=="Without Difficulty"){ _prehd_venous_stat = "Without Difficulty"; $("#detailprehd_venous_wo_difficulty").prop("checked",true); }
            if(data.prehd_venous=="Unable to Aspirate"){ _prehd_venous_stat = "Unable to Aspirate"; $("#detailprehd_venous_un_aspirate").prop("checked",true); }
            if(data.prehd_venous=="Interchanged"){ _prehd_venous_stat = "Interchanged"; $("#detailprehd_venous_interchanged").prop("checked",true); }
            else{ _prehd_venous_stat = ""; }
                //single
            if(data.prehd_catherer_dressing=="Intact"){ _prehd_cathererdressing_stat = "Intact"; $("#detailprehd_cath_dressing_intact").prop("checked",true); }
            if(data.prehd_catherer_dressing=="Not Intact"){ _prehd_cathererdressing_stat = "Not Intact"; $("#detailprehd_cath_dressing_not_intact").prop("checked",true); }
            if(data.prehd_catherer_dressing=="Soaked"){ _prehd_cathererdressing_stat = "Soaked"; $("#detailprehd_cath_dressing_soaked").prop("checked",true); }
            else{ _prehd_cathererdressing_stat = ""; }
                //single
            if(data.prehd_av_fistula_cannulation_yes=="Artery"){ _prehd_av_fistula_yes_stat = "Artery"; $("#detailprehd_av_fistula_artery").prop("checked",true); }
            if(data.prehd_av_fistula_cannulation_yes=="Venous"){ _prehd_av_fistula_yes_stat = "Venous"; $("#detailprehd_av_fistula_venous").prop("checked",true); }
            else{ _prehd_av_fistula_yes_stat = ""; }
                //single
            if(data.prehd_anesthesia=="None"){ _prehd_anesthesia_stat = "None"; $("#detailprehd_anesthesia_none").prop("checked",true); }
            if(data.prehd_anesthesia=="Lidocalne"){ _prehd_anesthesia_stat = "Lidocalne"; $("#detailprehd_anesthesia_lidocalne").prop("checked",true); }
            if(data.prehd_anesthesia=="Topical"){ _prehd_anesthesia_stat = "Topical"; $("#detailprehd_anesthesia_topical").prop("checked",true); }
            else{ _prehd_anesthesia_stat = ""; }
                //single
            if(data.prehd_fistula_thrill=="Strong"){ _prehd_fistula_thrill_stat = "Strong"; $("#detailprehd_fistula_thrill_strong").prop("checked",true); }
            if(data.prehd_fistula_thrill=="Weak"){ _prehd_fistula_thrill_stat = "Weak"; $("#detailprehd_fistula_thrill_weak").prop("checked",true); }
            else{ _prehd_fistula_thrill_stat = ""; }
                //single
            if(data.prehd_fistula_bruit=="Strong"){ _prehd_fistula_bruit_stat = "Strong"; $("#detailprehd_fistula_bruit_strong").prop("checked",true); }
            if(data.prehd_fistula_bruit=="Weak"){ _prehd_fistula_bruit_stat = "Weak"; $("#detailprehd_fistula_bruit_weak").prop("checked",true); }
            else{ _prehd_fistula_bruit_stat = ""; }
                //single
            if(data.prehd_fistula_signs_of_infection=="Yes"){ _prehd_fistula_signs_stat = "Yes"; $("#detailprehd_fistula_signs_yes").prop("checked",true); }
            if(data.prehd_fistula_signs_of_infection=="No"){ _prehd_fistula_signs_stat = "No"; $("#detailprehd_fistula_signs_no").prop("checked",true); }
            else{ _prehd_fistula_signs_stat = ""; }
                //single but multiple style
            if(data.prehd_fistula_dressing_aseptically==1){ $("#detailprehd_fistula_dressing_aseptically").prop("checked",true); }
            /*alert(_hepatitis_stat);*/

            //post hd.

            if(data.posthd_stat=="Ambulatory"){ _posthd_stat = "Ambulatory"; $("#detailposthd_ambulatory").prop("checked",true); }
            if(data.posthd_stat=="WheelChair"){ _posthd_stat = "WheelChair"; $("#detailposthd_wheelchair").prop("checked",true); }
            if(data.posthd_stat=="Bed Stretcher"){ _posthd_stat = "Bed Stretcher"; $("#detailposthd_bedstretcher").prop("checked",true); }
            if(data.posthd_stat=="Ambulatory W/ Assist"){ _posthd_stat = "Ambulatory W/ Assist"; $("#detailposthd_ambulatory_assistance").prop("checked",true); }
            else{ _posthd_stat = ""; }
                //multiple
            if(data.posthd_lungs_clear==1){ $("#detailposthd_lungs_clear").prop("checked",true); }
            if(data.posthd_lungs_crackles==1){ $("#detailposthd_lungs_crackles").prop("checked",true); }
            if(data.posthd_lungs_hemoptysis==1){ $("#detailposthd_lungs_hemoptysis").prop("checked",true); }
            if(data.posthd_lungs_dob==1){ $("#detailposthd_lungs_dob").prop("checked",true); }
            if(data.posthd_lungs_wheezzing==1){ $("#detailposthd_lungs_wheezzing").prop("checked",true); }

            if(data.posthd_pulse_stat=="Regular"){ _posthd_pulse_stat = "Regular"; ps_reg=1; $("#detailposthd_pulse_regular").prop("checked",true); }
            if(data.posthd_pulse_stat=="Irregular"){ _posthd_pulse_stat = "Irregular"; ps_irreg=1; $("#detailposthd_pulse_irregular").prop("checked",true); }
            else{ _posthd_pulse_stat = ""; }

            if(data.posthd_neuro_type=="comatose"){ _posthd_neuro_stat = "comatose"; $("#detailposthd_neuro_comatose").prop("checked",true); }
            if(data.posthd_neuro_type=="lethargic"){ _posthd_neuro_stat = "lethargic"; $("#detailposthd_neuro_lethargic").prop("checked",true); }
            if(data.posthd_neuro_type=="conscious"){ _posthd_neuro_stat = "conscious"; $("#detailposthd_neuro_conscious").prop("checked",true); }
            if(data.posthd_neuro_type=="gcs"){ _posthd_neuro_stat = "gcs"; $("#detailposthd_neuro_gcs").prop("checked",true); }
            else{ posthd_neuro_type = ""; }

                //multiple
            if(data.posthd_edema_none==1){ $("#detailposthd_edema_none").prop("checked",true); }
            if(data.posthd_edema_facial==1){ $("#detailposthd_edema_facial").prop("checked",true); }
            if(data.posthd_edema_pedal==1){ $("#detailposthd_edema_pedal").prop("checked",true); }
            if(data.posthd_edema_periorbital==1){ $("#detailposthd_edema_periorbital").prop("checked",true); }
            if(data.posthd_edema_ascitis==1){ $("#detailposthd_edema_ascitis").prop("checked",true); }

                //multiple
            if(data.posthd_gastro_good_appetite==1){ $("#detailposthd_gastro_good_appetite").prop("checked",true); }
            if(data.posthd_gastro_no_appetite==1){ $("#detailposthd_gastro_no_appetite").prop("checked",true); }
            if(data.posthd_gastro_fair_appetite==1){ $("#detailposthd_gastro_fair_appetite").prop("checked",true); }
            if(data.posthd_gastro_melena==1){ $("#detailposthd_gastro_melena").prop("checked",true); }
            if(data.posthd_gastro_hematochezia==1){ $("#detailposthd_gastro_hematochezia").prop("checked",true); }
            if(data.posthd_gastro_hematemesis==1){ $("#detailposthd_gastro_hematemesis").prop("checked",true); }
                //single
            if(data.posthd_skin_color=="normal"){ _posthd_skincolor_stat = "normal"; $("#detailposthd_skincolor_normal").prop("checked",true); }
            if(data.posthd_skin_color=="pale"){ _posthd_skincolor_stat = "normal"; $("#detailposthd_skincolor_pale").prop("checked",true); }
            if(data.posthd_skin_color=="cyanotic"){ _posthd_skincolor_stat = "cyanotic"; $("#detailposthd_skincolor_cyanotic").prop("checked",true); }
            else{ _posthd_skincolor_stat = ""; }
                //single
            if(data.posthd_others=="ecchymosis"){ _posthd_others_stat = "ecchymosis"; $("#detailposthd_others_ecchymosis").prop("checked",true); }
            if(data.posthd_others=="bruises"){ _posthd_others_stat = "bruises"; $("#detailposthd_others_bruises").prop("checked",true); }
            else{ _posthd_others_stat = ""; }
                //single
            if(data.posthd_turgor=="good"){ _posthd_turgor_stat = "good"; $("#detailposthd_turgor_good").prop("checked",true); }
            if(data.posthd_turgor=="slightly distented"){ _posthd_turgor_stat = "slightly distented"; $("#detailposthd_turgor_poor").prop("checked",true); }
            else{ _posthd_turgor_stat = ""; }
                //single
            if(data.posthd_neckveins=="flat"){ _posthd_neckveins_stat = "flat"; $("#detailposthd_neckveins_flat").prop("checked",true); }
            if(data.posthd_neckveins=="slightly distented"){ _posthd_neckveins_stat = "slightly distented"; $("#detailposthd_neckveins_slightlydistented").prop("checked",true); }
            if(data.posthd_neckveins=="distented"){ _posthd_neckveins_stat = "distented"; $("#detailposthd_neckveins_distented").prop("checked",true); }
            else{ _posthd_neckveins_stat = ""; }
                //single
            if(data.posthd_genito_urinary=="hematuria"){ _posthd_genitourinary_stat = "hematuria"; $("#detailposthd_genitourinary_hematuria").prop("checked",true); }
            if(data.posthd_genito_urinary=="dysuria"){ _posthd_genitourinary_stat = "dysuria"; $("#detailposthd_genitourinary_dysuria").prop("checked",true); }
            if(data.posthd_genito_urinary=="menstruation"){ _posthd_genitourinary_stat = "menstruation"; $("#detailposthd_genitourinary_menstruation").prop("checked",true); }
            else{ _posthd_genitourinary_stat = ""; }
                //multiple
            if(data.posthd_problems_none==1){ $("#detailposthd_problems_none").prop("checked",true); }
            if(data.posthd_problems_chest_pain==1){ $("#detailposthd_problems_chest_pain").prop("checked",true); }
            if(data.posthd_problems_cough==1){ $("#detailposthd_problems_cough").prop("checked",true); }
            if(data.posthd_problems_abdominal_pain==1){ $("#detailposthd_problems_abdominal_pain").prop("checked",true); }
            if(data.posthd_problems_lbm==1){ $("#detailposthd_problems_lbm").prop("checked",true); }
            if(data.posthd_problems_orthopnea==1){ $("#detailposthd_problems_orthopnea").prop("checked",true); }
            if(data.posthd_problems_fever==1){ $("#detailposthd_problems_fever").prop("checked",true); }
                //multiple
            if(data.posthd_vascularaccess_pc==1){ $("#detailposthd_vascularaccess_pc").prop("checked",true); }
            if(data.posthd_vascularaccess_tlc==1){ $("#detailposthd_vascularaccess_tlc").prop("checked",true); }
            if(data.posthd_vascularaccess_avf==1){ $("#detailposthd_vascularaccess_avf").prop("checked",true); }
            if(data.posthd_vascularaccess_avg==1){ $("#detailposthd_vascularaccess_avg").prop("checked",true); }
                //single single
            if(data.posthd_bruit==1){ $("#detailposthd_bruit").prop("checked",true); }
                //multiple
            if(data.posthd_thrill_strong==1){ $("#detailposthd_thrill_strong").prop("checked",true); }
            if(data.posthd_thrill_weak==1){ $("#detailposthd_thrill_weak").prop("checked",true); }
            if(data.posthd_thrill_patent==1){ $("#detailposthd_thrill_patent").prop("checked",true); }
            if(data.posthd_thrill_clotted==1){ $("#detailposthd_thrill_clotted").prop("checked",true); }
            if(data.posthd_thrill_redness==1){ $("#detailposthd_thrill_redness").prop("checked",true); }
            if(data.posthd_thrill_swelling==1){ $("#detailposthd_thrill_swelling").prop("checked",true); }
            if(data.posthd_thrill_hematoma==1){ $("#detailposthd_thrill_hematoma").prop("checked",true); }
            if(data.posthd_thrill_pus_secretion==1){ $("#detailposthd_thrill_pus_secretion").prop("checked",true); }
            if(data.posthd_thrill_no_signs==1){ $("#detailposthd_thrill_no_signs").prop("checked",true); }
                //multiple
            if(data.posthd_no_bleeding==1){ $("#detailposthd_no_bleeding").prop("checked",true); }
            if(data.posthd_arterial_venous_ports==1){ $("#detailposthd_arterial_venous_ports").prop("checked",true); }
            if(data.posthd_each_port_capped_secured==1){ $("#detailposthd_each_port_capped_secured").prop("checked",true); }
            if(data.posthd_arterial_venous_flushed==1){ $("#detailposthd_arterial_venous_flushed").prop("checked",true); }
            if(data.posthd_aseptically_dressed==1){ $("#detailposthd_aseptically_dressed").prop("checked",true); }
            if(data.posthd_bactroban_ointment==1){ $("#detailposthd_bactroban_ointment").prop("checked",true); }
                //single
            if(data.discharge_type=="Home with Health Teaching Performed"){ _discharge_stat = "Home with Health Teaching Performed"; $("#detaildischarge_home_with_health").prop("checked",true); }
            else{ _discharge_stat = data.discharge_type; $("#detaildischarge_admitted").val(data.discharge_type); }

    });

    $('.printpatientdetailsfloating').click(function(event){
        if(_isChecked==true){
            printing_notif();
            passvalues(_selectRowObj);

            $('input[type="checkbox"]').each(function() {
                if($(this).is (':checked')) {
                   $(this).attr('checked', 'true') 
                }
            });
            var currentURL = window.location.href;
            var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
            output = output+"/assets/css/css_special_files.css";

            /*$('input[type="checkbox"]').each(function() {
                if($(this).is (':checked')) {
                   $(this).attr('checked', 'true') 
                }
            });*/
            /*alert(output);*/
            $("#printcontentpatientdetails").printThis({
                debug: false,         
                importCSS: true,       
                importStyle: true,       
                printContainer: true,
                loadCSS: output,
                formValues:true
            });
        }
        else{
            notice_notif();
        }
            
    });

    $('#printpatientdetails').click(function(event){
        if(_isChecked==true){
            printing_notif();
            passvalues(_selectRowObj);
            $('input[type="checkbox"]').each(function() {
                if($(this).is (':checked')) {
                   $(this).attr('checked', 'true') 
                }
            });
            var currentURL = window.location.href;
            var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
            output = output+"/assets/css/css_special_files.css";

            /*$('input[type="checkbox"]').each(function() {
                if($(this).is (':checked')) {
                   $(this).attr('checked', 'true') 
                }
            });*/
            /*alert(output);*/
            $("#printcontentpatientdetails").printThis({
                debug: false,         
                importCSS: true,       
                importStyle: true,       
                printContainer: true,
                loadCSS: output,
                formValues:true
            });
        }
        else{
            notice_notif();
        }
            
    });

    var passvalues=function(_selectRowObj){
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.patient_info_id;
            $('#details_ref_patient_id').val(data.ref_patient_id);
            //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

           // alert($('input[name="tax_exempt"]').length);
            //$('input[name="tax_exempt"]').val(0);
            //$('input[name="inventory"]').val(data.is_inventory);

            $('input,textarea').each(function(){
            var _elem=$(this);
             $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

                //multiple
            if(data.cash==1){ $("#detailcash").prop("checked",true); }
            if(data.pcso==1){ $("#detailpcso").prop("checked",true); }
            if(data.philhealth==1){ $("#detailphilhealth").prop("checked",true); }

            _hepatitis_stat=data.hepatitis_status;
            if(_hepatitis_stat=="clean"){
                _hepatitis_stat = "clean";
                $("#detailclean").prop("checked",true);
                
            }
            if(_hepatitis_stat=="hepatitis_b"){
                _hepatitis_stat = "detailhepatitis_b";
                $("#detailhepatitis_b").prop("checked",true);
                
            }
            if(_hepatitis_stat=="hepatitis_c"){
                _hepatitis_stat = "hepatitis_c";
                $("#detailhepatitis_c").prop("checked",true);
                
            }
            else{
                _hepatitis_stat="";
            }


            if(data.other_anticoagulant==1){ $("#detailanticoagulant").prop("checked",true); }
            if(data.other_routineheparin==1){ $("#detailroutine_heparin").prop("checked",true); }
            if(data.other_lowdoseheparin==1){ $("#detaillowdoseheparin").prop("checked",true); }

            if(data.dialysisbath_bicarbonate==1){ _dialysisbath_bicarbonate = 1; $("#detaildialysisbath_bicarbonate").prop("checked",true); }
            if(data.dialysisacid_hd144a==1){ _dialysisacid_hd144a = 1; $("#detaildialysisacid_hd144a").prop("checked",true); }

            if(data.dialyzer_type=="Conventional"){ _dialyzer_type = "Conventional"; $("#detaildialyzer_conventional").prop("checked",true); }
            if(data.dialyzer_type=="High Efficiency"){ _dialyzer_type = "High Efficiency"; $("#detaildialyzer_highefficiency").prop("checked",true); }
            if(data.dialyzer_type=="High Flux"){ _dialyzer_type = "High Flux"; $("#detaildialyzer_highflux").prop("checked",true); }
            if(data.dialyzer_type=="Renalin Strip"){ _dialyzer_type = "Renalin Strip"; $("#detaildialyzer_renalinstrip").prop("checked",true); }
            else{ _dialyzer_type = data.dialyzer_type; $("#detailother_dialyzer").val(data.dialyzer_type); }

            if(data.prehd_stat=="Ambulatory"){ _prehd_stat = "Ambulatory"; $("#detailprehd_ambulatory").prop("checked",true); }
            if(data.prehd_stat=="WheelChair"){ _prehd_stat = "WheelChair"; $("#detailprehd_wheelchair").prop("checked",true); }
            if(data.prehd_stat=="Bed Stretcher"){ _prehd_stat = "Bed Stretcher"; $("#detailprehd_bedstretcher").prop("checked",true); }
            if(data.prehd_stat=="Ambulatory W/ Assist"){ _prehd_stat = "Ambulatory W/ Assist"; $("#detailprehd_ambulatory_assistance").prop("checked",true); }
            else{ _prehd_stat = ""; }
                //multiple
            if(data.prehd_lungs_clear==1){ $("#detailprehd_lungs_clear").prop("checked",true); }
            if(data.prehd_lungs_crackles==1){ $("#detailprehd_lungs_crackles").prop("checked",true); }
            if(data.prehd_lungs_hemoptysis==1){ $("#detailprehd_lungs_hemoptysis").prop("checked",true); }
            if(data.prehd_lungs_dob==1){ $("#detailprehd_lungs_dob").prop("checked",true); }
            if(data.prehd_lungs_wheezzing==1){ $("#detailprehd_lungs_wheezzing").prop("checked",true); }

            if(data.prehd_pulse_stat=="Regular"){ _prehd_pulse_stat = "Regular"; ps_reg=1; $("detail#prehd_pulse_regular").prop("checked",true); }
            if(data.prehd_pulse_stat=="Irregular"){ _prehd_pulse_stat = "Irregular"; ps_irreg=1; $("#detailprehd_pulse_irregular").prop("checked",true); }
            else{ _prehd_pulse_stat = ""; }

            if(data.prehd_neuro_type=="comatose"){ _prehd_neuro_stat = "comatose"; $("#detailprehd_neuro_comatose").prop("checked",true); }
            if(data.prehd_neuro_type=="lethargic"){ _prehd_neuro_stat = "lethargic"; $("#detailprehd_neuro_lethargic").prop("checked",true); }
            if(data.prehd_neuro_type=="conscious"){ _prehd_neuro_stat = "conscious"; $("#detailprehd_neuro_conscious").prop("checked",true); }
            if(data.prehd_neuro_type=="gcs"){ _prehd_neuro_stat = "gcs"; $("#detailprehd_neuro_gcs").prop("checked",true); }
            else{ prehd_neuro_type = ""; }

                //multiple
            if(data.prehd_edema_none==1){ $("#detailprehd_edema_none").prop("checked",true); }
            if(data.prehd_edema_facial==1){ $("#detailprehd_edema_facial").prop("checked",true); }
            if(data.prehd_edema_pedal==1){ $("#detailprehd_edema_pedal").prop("checked",true); }
            if(data.prehd_edema_periorbital==1){ $("#prehd_edema_periorbital").prop("checked",true); }
            if(data.prehd_edema_ascitis==1){ $("#detailprehd_edema_ascitis").prop("checked",true); }

                //multiple
            if(data.prehd_gastro_good_appetite==1){ $("#detailprehd_gastro_good_appetite").prop("checked",true); }
            if(data.prehd_gastro_no_appetite==1){ $("#detailprehd_gastro_no_appetite").prop("checked",true); }
            if(data.prehd_gastro_fair_appetite==1){ $("#detailprehd_gastro_fair_appetite").prop("checked",true); }
            if(data.prehd_gastro_melena==1){ $("#detailprehd_gastro_melena").prop("checked",true); }
            if(data.prehd_gastro_hematochezia==1){ $("#detailprehd_gastro_hematochezia").prop("checked",true); }
            if(data.prehd_gastro_hematemesis==1){ $("#detailprehd_gastro_hematemesis").prop("checked",true); }
                //single
            if(data.prehd_skin_color=="normal"){ _prehd_skincolor_stat = "normal"; $("#detailprehd_skincolor_normal").prop("checked",true); }
            if(data.prehd_skin_color=="pale"){ _prehd_skincolor_stat = "normal"; $("#detailprehd_skincolor_pale").prop("checked",true); }
            if(data.prehd_skin_color=="cyanotic"){ _prehd_skincolor_stat = "cyanotic"; $("#detailprehd_skincolor_cyanotic").prop("checked",true); }
            else{ _prehd_skincolor_stat = ""; }
                //single
            if(data.prehd_others=="ecchymosis"){ _prehd_others_stat = "ecchymosis"; $("#detailprehd_others_ecchymosis").prop("checked",true); }
            if(data.prehd_others=="bruises"){ _prehd_others_stat = "bruises"; $("#detailprehd_others_bruises").prop("checked",true); }
            else{ _prehd_others_stat = ""; }
                //single
            if(data.prehd_turgor=="good"){ _prehd_turgor_stat = "good"; $("#detailprehd_turgor_good").prop("checked",true); }
            if(data.prehd_turgor=="slightly distented"){ _prehd_turgor_stat = "slightly distented"; $("#detailprehd_turgor_poor").prop("checked",true); }
            else{ _prehd_turgor_stat = ""; }
                //single
            if(data.prehd_neckveins=="flat"){ _prehd_neckveins_stat = "flat"; $("#detailprehd_neckveins_flat").prop("checked",true); }
            if(data.prehd_neckveins=="slightly distented"){ _prehd_neckveins_stat = "slightly distented"; $("#detailprehd_neckveins_slightlydistented").prop("checked",true); }
            if(data.prehd_neckveins=="distented"){ _prehd_neckveins_stat = "distented"; $("#detailprehd_neckveins_distented").prop("checked",true); }
            else{ _prehd_neckveins_stat = ""; }
                //single
            if(data.prehd_genito_urinary=="hematuria"){ _prehd_genitourinary_stat = "hematuria"; $("#detailprehd_genitourinary_hematuria").prop("checked",true); }
            if(data.prehd_genito_urinary=="dysuria"){ _prehd_genitourinary_stat = "dysuria"; $("#detailprehd_genitourinary_dysuria").prop("checked",true); }
            if(data.prehd_genito_urinary=="menstruation"){ _prehd_genitourinary_stat = "menstruation"; $("#detailprehd_genitourinary_menstruation").prop("checked",true); }
            else{ _prehd_genitourinary_stat = ""; }
                //multiple
            if(data.prehd_problems_none==1){ $("#detailprehd_problems_none").prop("checked",true); }
            if(data.prehd_problems_chest_pain==1){ $("#detailprehd_problems_chest_pain").prop("checked",true); }
            if(data.prehd_problems_cough==1){ $("#detailprehd_problems_cough").prop("checked",true); }
            if(data.prehd_problems_abdominal_pain==1){ $("#detailprehd_problems_abdominal_pain").prop("checked",true); }
            if(data.prehd_problems_lbm==1){ $("#detailprehd_problems_lbm").prop("checked",true); }
            if(data.prehd_problems_orthopnea==1){ $("#detailprehd_problems_orthopnea").prop("checked",true); }
            if(data.prehd_problems_fever==1){ $("#detailprehd_problems_fever").prop("checked",true); }
                //multiple
            if(data.prehd_vascularaccess_pc==1){ $("#detailprehd_vascularaccess_pc").prop("checked",true); }
            if(data.prehd_vascularaccess_tlc==1){ $("#detailprehd_vascularaccess_tlc").prop("checked",true); }
            if(data.prehd_vascularaccess_avf==1){ $("#detailprehd_vascularaccess_avf").prop("checked",true); }
            if(data.prehd_vascularaccess_avg==1){ $("#detailprehd_vascularaccess_avg").prop("checked",true); }
                //single single
            if(data.prehd_bruit==1){ $("#detailprehd_bruit").prop("checked",true); }
                //multiple
            if(data.prehd_thrill_strong==1){ $("#detailprehd_thrill_strong").prop("checked",true); }
            if(data.prehd_thrill_weak==1){ $("#detailprehd_thrill_weak").prop("checked",true); }
            if(data.prehd_thrill_patent==1){ $("#detailprehd_thrill_patent").prop("checked",true); }
            if(data.prehd_thrill_clotted==1){ $("#detailprehd_thrill_clotted").prop("checked",true); }
            if(data.prehd_thrill_redness==1){ $("#detailprehd_thrill_redness").prop("checked",true); }
            if(data.prehd_thrill_swelling==1){ $("#detailprehd_thrill_swelling").prop("checked",true); }
            if(data.prehd_thrill_hematoma==1){ $("#detailprehd_thrill_hematoma").prop("checked",true); }
            if(data.prehd_thrill_pus_secretion==1){ $("#detailprehd_thrill_pus_secretion").prop("checked",true); }
            if(data.prehd_thrill_no_signs==1){ $("#detailprehd_thrill_no_signs").prop("checked",true); }
                //single
            if(data.prehd_arterial=="with difficulty"){ _prehd_arterial_stat = "with difficulty"; $("#detailprehd_arterial_w_difficulty").prop("checked",true); }
            if(data.prehd_arterial=="without difficulty"){ _prehd_arterial_stat = "without difficulty"; $("#detailprehd_arterial_wo_difficulty").prop("checked",true); }
            if(data.prehd_arterial=="Unable to Aspirate"){ _prehd_arterial_stat = "Unable to Aspirate"; $("#detailprehd_arterial_un_aspirate").prop("checked",true); }
            else{ _prehd_arterial_stat = ""; }
                //single
            if(data.prehd_venous=="With Difficulty"){ _prehd_venous_stat = "With Difficulty"; $("#detailprehd_venous_w_difficulty").prop("checked",true); }
            if(data.prehd_venous=="Without Difficulty"){ _prehd_venous_stat = "Without Difficulty"; $("#detailprehd_venous_wo_difficulty").prop("checked",true); }
            if(data.prehd_venous=="Unable to Aspirate"){ _prehd_venous_stat = "Unable to Aspirate"; $("#detailprehd_venous_un_aspirate").prop("checked",true); }
            if(data.prehd_venous=="Interchanged"){ _prehd_venous_stat = "Interchanged"; $("#detailprehd_venous_interchanged").prop("checked",true); }
            else{ _prehd_venous_stat = ""; }
                //single
            if(data.prehd_catherer_dressing=="Intact"){ _prehd_cathererdressing_stat = "Intact"; $("#detailprehd_cath_dressing_intact").prop("checked",true); }
            if(data.prehd_catherer_dressing=="Not Intact"){ _prehd_cathererdressing_stat = "Not Intact"; $("#detailprehd_cath_dressing_not_intact").prop("checked",true); }
            if(data.prehd_catherer_dressing=="Soaked"){ _prehd_cathererdressing_stat = "Soaked"; $("#detailprehd_cath_dressing_soaked").prop("checked",true); }
            else{ _prehd_cathererdressing_stat = ""; }
                //single
            if(data.prehd_av_fistula_cannulation_yes=="Artery"){ _prehd_av_fistula_yes_stat = "Artery"; $("#detailprehd_av_fistula_artery").prop("checked",true); }
            if(data.prehd_av_fistula_cannulation_yes=="Venous"){ _prehd_av_fistula_yes_stat = "Venous"; $("#detailprehd_av_fistula_venous").prop("checked",true); }
            else{ _prehd_av_fistula_yes_stat = ""; }
                //single
            if(data.prehd_anesthesia=="None"){ _prehd_anesthesia_stat = "None"; $("#detailprehd_anesthesia_none").prop("checked",true); }
            if(data.prehd_anesthesia=="Lidocalne"){ _prehd_anesthesia_stat = "Lidocalne"; $("#detailprehd_anesthesia_lidocalne").prop("checked",true); }
            if(data.prehd_anesthesia=="Topical"){ _prehd_anesthesia_stat = "Topical"; $("#detailprehd_anesthesia_topical").prop("checked",true); }
            else{ _prehd_anesthesia_stat = ""; }
                //single
            if(data.prehd_fistula_thrill=="Strong"){ _prehd_fistula_thrill_stat = "Strong"; $("#detailprehd_fistula_thrill_strong").prop("checked",true); }
            if(data.prehd_fistula_thrill=="Weak"){ _prehd_fistula_thrill_stat = "Weak"; $("#detailprehd_fistula_thrill_weak").prop("checked",true); }
            else{ _prehd_fistula_thrill_stat = ""; }
                //single
            if(data.prehd_fistula_bruit=="Strong"){ _prehd_fistula_bruit_stat = "Strong"; $("#detailprehd_fistula_bruit_strong").prop("checked",true); }
            if(data.prehd_fistula_bruit=="Weak"){ _prehd_fistula_bruit_stat = "Weak"; $("#detailprehd_fistula_bruit_weak").prop("checked",true); }
            else{ _prehd_fistula_bruit_stat = ""; }
                //single
            if(data.prehd_fistula_signs_of_infection=="Yes"){ _prehd_fistula_signs_stat = "Yes"; $("#detailprehd_fistula_signs_yes").prop("checked",true); }
            if(data.prehd_fistula_signs_of_infection=="No"){ _prehd_fistula_signs_stat = "No"; $("#detailprehd_fistula_signs_no").prop("checked",true); }
            else{ _prehd_fistula_signs_stat = ""; }
                //single but multiple style
            if(data.prehd_fistula_dressing_aseptically==1){ $("#detailprehd_fistula_dressing_aseptically").prop("checked",true); }
            /*alert(_hepatitis_stat);*/

            //post hd.

            if(data.posthd_stat=="Ambulatory"){ _posthd_stat = "Ambulatory"; $("#detailposthd_ambulatory").prop("checked",true); }
            if(data.posthd_stat=="WheelChair"){ _posthd_stat = "WheelChair"; $("#detailposthd_wheelchair").prop("checked",true); }
            if(data.posthd_stat=="Bed Stretcher"){ _posthd_stat = "Bed Stretcher"; $("#detailposthd_bedstretcher").prop("checked",true); }
            if(data.posthd_stat=="Ambulatory W/ Assist"){ _posthd_stat = "Ambulatory W/ Assist"; $("#detailposthd_ambulatory_assistance").prop("checked",true); }
            else{ _posthd_stat = ""; }
                //multiple
            if(data.posthd_lungs_clear==1){ $("#detailposthd_lungs_clear").prop("checked",true); }
            if(data.posthd_lungs_crackles==1){ $("#detailposthd_lungs_crackles").prop("checked",true); }
            if(data.posthd_lungs_hemoptysis==1){ $("#detailposthd_lungs_hemoptysis").prop("checked",true); }
            if(data.posthd_lungs_dob==1){ $("#detailposthd_lungs_dob").prop("checked",true); }
            if(data.posthd_lungs_wheezzing==1){ $("#detailposthd_lungs_wheezzing").prop("checked",true); }

            if(data.posthd_pulse_stat=="Regular"){ _posthd_pulse_stat = "Regular"; ps_reg=1; $("#detailposthd_pulse_regular").prop("checked",true); }
            if(data.posthd_pulse_stat=="Irregular"){ _posthd_pulse_stat = "Irregular"; ps_irreg=1; $("#detailposthd_pulse_irregular").prop("checked",true); }
            else{ _posthd_pulse_stat = ""; }

            if(data.posthd_neuro_type=="comatose"){ _posthd_neuro_stat = "comatose"; $("#detailposthd_neuro_comatose").prop("checked",true); }
            if(data.posthd_neuro_type=="lethargic"){ _posthd_neuro_stat = "lethargic"; $("#detailposthd_neuro_lethargic").prop("checked",true); }
            if(data.posthd_neuro_type=="conscious"){ _posthd_neuro_stat = "conscious"; $("#detailposthd_neuro_conscious").prop("checked",true); }
            if(data.posthd_neuro_type=="gcs"){ _posthd_neuro_stat = "gcs"; $("#detailposthd_neuro_gcs").prop("checked",true); }
            else{ posthd_neuro_type = ""; }

                //multiple
            if(data.posthd_edema_none==1){ $("#detailposthd_edema_none").prop("checked",true); }
            if(data.posthd_edema_facial==1){ $("#detailposthd_edema_facial").prop("checked",true); }
            if(data.posthd_edema_pedal==1){ $("#detailposthd_edema_pedal").prop("checked",true); }
            if(data.posthd_edema_periorbital==1){ $("#detailposthd_edema_periorbital").prop("checked",true); }
            if(data.posthd_edema_ascitis==1){ $("#detailposthd_edema_ascitis").prop("checked",true); }

                //multiple
            if(data.posthd_gastro_good_appetite==1){ $("#detailposthd_gastro_good_appetite").prop("checked",true); }
            if(data.posthd_gastro_no_appetite==1){ $("#detailposthd_gastro_no_appetite").prop("checked",true); }
            if(data.posthd_gastro_fair_appetite==1){ $("#detailposthd_gastro_fair_appetite").prop("checked",true); }
            if(data.posthd_gastro_melena==1){ $("#detailposthd_gastro_melena").prop("checked",true); }
            if(data.posthd_gastro_hematochezia==1){ $("#detailposthd_gastro_hematochezia").prop("checked",true); }
            if(data.posthd_gastro_hematemesis==1){ $("#detailposthd_gastro_hematemesis").prop("checked",true); }
                //single
            if(data.posthd_skin_color=="normal"){ _posthd_skincolor_stat = "normal"; $("#detailposthd_skincolor_normal").prop("checked",true); }
            if(data.posthd_skin_color=="pale"){ _posthd_skincolor_stat = "normal"; $("#detailposthd_skincolor_pale").prop("checked",true); }
            if(data.posthd_skin_color=="cyanotic"){ _posthd_skincolor_stat = "cyanotic"; $("#detailposthd_skincolor_cyanotic").prop("checked",true); }
            else{ _posthd_skincolor_stat = ""; }
                //single
            if(data.posthd_others=="ecchymosis"){ _posthd_others_stat = "ecchymosis"; $("#detailposthd_others_ecchymosis").prop("checked",true); }
            if(data.posthd_others=="bruises"){ _posthd_others_stat = "bruises"; $("#detailposthd_others_bruises").prop("checked",true); }
            else{ _posthd_others_stat = ""; }
                //single
            if(data.posthd_turgor=="good"){ _posthd_turgor_stat = "good"; $("#detailposthd_turgor_good").prop("checked",true); }
            if(data.posthd_turgor=="slightly distented"){ _posthd_turgor_stat = "slightly distented"; $("#detailposthd_turgor_poor").prop("checked",true); }
            else{ _posthd_turgor_stat = ""; }
                //single
            if(data.posthd_neckveins=="flat"){ _posthd_neckveins_stat = "flat"; $("#detailposthd_neckveins_flat").prop("checked",true); }
            if(data.posthd_neckveins=="slightly distented"){ _posthd_neckveins_stat = "slightly distented"; $("#detailposthd_neckveins_slightlydistented").prop("checked",true); }
            if(data.posthd_neckveins=="distented"){ _posthd_neckveins_stat = "distented"; $("#detailposthd_neckveins_distented").prop("checked",true); }
            else{ _posthd_neckveins_stat = ""; }
                //single
            if(data.posthd_genito_urinary=="hematuria"){ _posthd_genitourinary_stat = "hematuria"; $("#detailposthd_genitourinary_hematuria").prop("checked",true); }
            if(data.posthd_genito_urinary=="dysuria"){ _posthd_genitourinary_stat = "dysuria"; $("#detailposthd_genitourinary_dysuria").prop("checked",true); }
            if(data.posthd_genito_urinary=="menstruation"){ _posthd_genitourinary_stat = "menstruation"; $("#detailposthd_genitourinary_menstruation").prop("checked",true); }
            else{ _posthd_genitourinary_stat = ""; }
                //multiple
            if(data.posthd_problems_none==1){ $("#detailposthd_problems_none").prop("checked",true); }
            if(data.posthd_problems_chest_pain==1){ $("#detailposthd_problems_chest_pain").prop("checked",true); }
            if(data.posthd_problems_cough==1){ $("#detailposthd_problems_cough").prop("checked",true); }
            if(data.posthd_problems_abdominal_pain==1){ $("#detailposthd_problems_abdominal_pain").prop("checked",true); }
            if(data.posthd_problems_lbm==1){ $("#detailposthd_problems_lbm").prop("checked",true); }
            if(data.posthd_problems_orthopnea==1){ $("#detailposthd_problems_orthopnea").prop("checked",true); }
            if(data.posthd_problems_fever==1){ $("#detailposthd_problems_fever").prop("checked",true); }
                //multiple
            if(data.posthd_vascularaccess_pc==1){ $("#detailposthd_vascularaccess_pc").prop("checked",true); }
            if(data.posthd_vascularaccess_tlc==1){ $("#detailposthd_vascularaccess_tlc").prop("checked",true); }
            if(data.posthd_vascularaccess_avf==1){ $("#detailposthd_vascularaccess_avf").prop("checked",true); }
            if(data.posthd_vascularaccess_avg==1){ $("#detailposthd_vascularaccess_avg").prop("checked",true); }
                //single single
            if(data.posthd_bruit==1){ $("#detailposthd_bruit").prop("checked",true); }
                //multiple
            if(data.posthd_thrill_strong==1){ $("#detailposthd_thrill_strong").prop("checked",true); }
            if(data.posthd_thrill_weak==1){ $("#detailposthd_thrill_weak").prop("checked",true); }
            if(data.posthd_thrill_patent==1){ $("#detailposthd_thrill_patent").prop("checked",true); }
            if(data.posthd_thrill_clotted==1){ $("#detailposthd_thrill_clotted").prop("checked",true); }
            if(data.posthd_thrill_redness==1){ $("#detailposthd_thrill_redness").prop("checked",true); }
            if(data.posthd_thrill_swelling==1){ $("#detailposthd_thrill_swelling").prop("checked",true); }
            if(data.posthd_thrill_hematoma==1){ $("#detailposthd_thrill_hematoma").prop("checked",true); }
            if(data.posthd_thrill_pus_secretion==1){ $("#detailposthd_thrill_pus_secretion").prop("checked",true); }
            if(data.posthd_thrill_no_signs==1){ $("#detailposthd_thrill_no_signs").prop("checked",true); }
                //multiple
            if(data.posthd_no_bleeding==1){ $("#detailposthd_no_bleeding").prop("checked",true); }
            if(data.posthd_arterial_venous_ports==1){ $("#detailposthd_arterial_venous_ports").prop("checked",true); }
            if(data.posthd_each_port_capped_secured==1){ $("#detailposthd_each_port_capped_secured").prop("checked",true); }
            if(data.posthd_arterial_venous_flushed==1){ $("#detailposthd_arterial_venous_flushed").prop("checked",true); }
            if(data.posthd_aseptically_dressed==1){ $("#detailposthd_aseptically_dressed").prop("checked",true); }
            if(data.posthd_bactroban_ointment==1){ $("#detailposthd_bactroban_ointment").prop("checked",true); }
                //single
            if(data.discharge_type=="Home with Health Teaching Performed"){ _discharge_stat = "Home with Health Teaching Performed"; $("#detaildischarge_home_with_health").prop("checked",true); }
            else{ _discharge_stat = data.discharge_type; $("#detaildischarge_admitted").val(data.discharge_type); }
    };

    var createPatient_Info=function(){
        /*alert("aw");*/
        var _data=$('#frm_patientinfo').serializeArray();
        //HEPA
        _data.push({name : "hepatitis_status" ,value : _hepatitis_stat});

        //cash pcso philhealth
        _data.push({name : "cash" ,value : $('#cash').is(':checked') ? 1 : 0});
        _data.push({name : "pcso" ,value : $('#pcso').is(':checked') ? 1 : 0});
        _data.push({name : "philhealth" ,value : $('#philhealth').is(':checked') ? 1 : 0});

        //others_specify
        _data.push({name : "other_anticoagulant" ,value : $('#anticoagulant').is(':checked') ? 1 : 0});
        _data.push({name : "other_routineheparin" ,value : $('#routine_heparin').is(':checked') ? 1 : 0});
        _data.push({name : "other_lowdoseheparin" ,value : $('#lowdoseheparin').is(':checked') ? 1 : 0});
        _data.push({name : "dialysisbath_bicarbonate" ,value : _dialysisbath_bicarbonate});
        _data.push({name : "dialysisacid_hd144a" ,value : _dialysisacid_hd144a});
        //DIALYZER TYPE
        _data.push({name : "dialyzer_type" ,value : _dialyzer_type});
        //PREHD TYPE
        _data.push({name : "prehd_stat" ,value : _prehd_stat});
        //PULSE
        _data.push({name : "prehd_pulse_stat" ,value : _prehd_pulse_stat});
        //prehd neuro
        _data.push({name : "prehd_neuro_type" ,value : _prehd_neuro_stat});
        //pre_hd lungs
        _data.push({name : "prehd_lungs_clear" ,value : $('#prehd_lungs_clear').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_crackles" ,value : $('#prehd_lungs_crackles').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_hemoptysis" ,value : $('#prehd_lungs_hemoptysis').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_dob" ,value : $('#prehd_lungs_dob').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_wheezzing" ,value : $('#prehd_lungs_wheezzing').is(':checked') ? 1 : 0});
        //prehd edema
        _data.push({name : "prehd_edema_none" ,value : $('#prehd_edema_none').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_facial" ,value : $('#prehd_edema_facial').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_pedal" ,value : $('#prehd_edema_pedal').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_periorbital" ,value : $('#prehd_edema_periorbital').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_ascitis" ,value : $('#prehd_edema_ascitis').is(':checked') ? 1 : 0});
       /* _data.push({name : "prehd_edema_other" ,value : $('#prehd_edema_other').val()});*/
       //PRE HD GASTRO
        _data.push({name : "prehd_gastro_good_appetite" ,value : $('#prehd_gastro_good_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_no_appetite" ,value : $('#prehd_gastro_no_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_fair_appetite" ,value : $('#prehd_gastro_fair_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_melena" ,value : $('#prehd_gastro_melena').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_hematochezia" ,value : $('#prehd_gastro_hematochezia').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_hematemesis" ,value : $('#prehd_gastro_hematemesis').is(':checked') ? 1 : 0});
        //skin color
        _data.push({name : "prehd_skin_color" ,value : _prehd_skincolor_stat});
        //PREHD OTHERS
        _data.push({name : "prehd_others" ,value : _prehd_others_stat});
        //PREHD turgor
        _data.push({name : "prehd_turgor" ,value : _prehd_turgor_stat});
        //PREHD turgor
        _data.push({name : "prehd_neckveins" ,value : _prehd_neckveins_stat});
        //PREHD GENITO URINARY
        _data.push({name : "prehd_genito_urinary" ,value : _prehd_genitourinary_stat});
        //PREHD PROBLEMS/COMPLAINTS
        _data.push({name : "prehd_problems_none" ,value : $('#prehd_problems_none').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_chest_pain" ,value : $('#prehd_problems_chest_pain').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_cough" ,value : $('#prehd_problems_cough').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_abdominal_pain" ,value : $('#prehd_problems_abdominal_pain').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_lbm" ,value : $('#prehd_problems_lbm').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_orthopnea" ,value : $('#prehd_problems_orthopnea').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_fever" ,value : $('#prehd_problems_fever').is(':checked') ? 1 : 0});
        //PREHD VASCULAR ACCESS
        _data.push({name : "prehd_vascularaccess_pc" ,value : $('#prehd_vascularaccess_pc').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_tlc" ,value : $('#prehd_vascularaccess_tlc').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_avf" ,value : $('#prehd_vascularaccess_avf').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_avg" ,value : $('#prehd_vascularaccess_avg').is(':checked') ? 1 : 0});
        //PREHD Bruit
        _data.push({name : "prehd_bruit" ,value : $('#prehd_bruit').is(':checked') ? 1 : 0});
        //PREHD THRILL
        _data.push({name : "prehd_thrill_strong" ,value : $('#prehd_thrill_strong').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_weak" ,value : $('#prehd_thrill_weak').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_patent" ,value : $('#prehd_thrill_patent').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_clotted" ,value : $('#prehd_thrill_clotted').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_redness" ,value : $('#prehd_thrill_redness').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_swelling" ,value : $('#prehd_thrill_swelling').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_hematoma" ,value : $('#prehd_thrill_hematoma').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_pus_secretion" ,value : $('#prehd_thrill_pus_secretion').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_no_signs" ,value : $('#prehd_thrill_no_signs').is(':checked') ? 1 : 0});

        _data.push({name : "prehd_arterial" ,value : _prehd_arterial_stat});
        _data.push({name : "prehd_venous" ,value : _prehd_venous_stat});
        _data.push({name : "prehd_catherer_dressing" ,value : _prehd_cathererdressing_stat});
        _data.push({name : "prehd_av_fistula_cannulation_yes" ,value : _prehd_av_fistula_yes_stat});
        _data.push({name : "prehd_anesthesia" ,value : _prehd_anesthesia_stat});
        _data.push({name : "prehd_fistula_thrill" ,value : _prehd_fistula_thrill_stat});
        _data.push({name : "prehd_fistula_bruit" ,value : _prehd_fistula_bruit_stat});
        _data.push({name : "prehd_fistula_signs_of_infection" ,value : _prehd_fistula_signs_stat});
        _data.push({name : "prehd_fistula_dressing_aseptically" ,value : $('#prehd_fistula_dressing_aseptically').is(':checked') ? 1 : 0});

        //POSTHD
        _data.push({name : "posthd_stat" ,value : _posthd_stat});
        //PULSE
        _data.push({name : "posthd_pulse_stat" ,value : _posthd_pulse_stat});
        //posthd neuro
        _data.push({name : "posthd_neuro_type" ,value : _posthd_neuro_stat});
        //pre_hd lungs
        _data.push({name : "posthd_lungs_clear" ,value : $('#posthd_lungs_clear').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_crackles" ,value : $('#posthd_lungs_crackles').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_hemoptysis" ,value : $('#posthd_lungs_hemoptysis').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_dob" ,value : $('#posthd_lungs_dob').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_wheezzing" ,value : $('#posthd_lungs_wheezzing').is(':checked') ? 1 : 0});
        //posthd edema
        _data.push({name : "posthd_edema_none" ,value : $('#posthd_edema_none').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_facial" ,value : $('#posthd_edema_facial').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_pedal" ,value : $('#posthd_edema_pedal').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_periorbital" ,value : $('#posthd_edema_periorbital').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_ascitis" ,value : $('#posthd_edema_ascitis').is(':checked') ? 1 : 0});
       /* _data.push({name : "posthd_edema_other" ,value : $('#posthd_edema_other').val()});*/
       //PRE HD GASTRO
        _data.push({name : "posthd_gastro_good_appetite" ,value : $('#posthd_gastro_good_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_no_appetite" ,value : $('#posthd_gastro_no_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_fair_appetite" ,value : $('#posthd_gastro_fair_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_melena" ,value : $('#posthd_gastro_melena').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_hematochezia" ,value : $('#posthd_gastro_hematochezia').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_hematemesis" ,value : $('#posthd_gastro_hematemesis').is(':checked') ? 1 : 0});
        //skin color
        _data.push({name : "posthd_skin_color" ,value : _posthd_skincolor_stat});
        //posthd OTHERS
        _data.push({name : "posthd_others" ,value : _posthd_others_stat});
        //posthd turgor
        _data.push({name : "posthd_turgor" ,value : _posthd_turgor_stat});
        //posthd turgor
        _data.push({name : "posthd_neckveins" ,value : _posthd_neckveins_stat});
        //posthd GENITO URINARY
        _data.push({name : "posthd_genito_urinary" ,value : _posthd_genitourinary_stat});
        //posthd PROBLEMS/COMPLAINTS
        _data.push({name : "posthd_problems_none" ,value : $('#posthd_problems_none').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_chest_pain" ,value : $('#posthd_problems_chest_pain').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_cough" ,value : $('#posthd_problems_cough').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_abdominal_pain" ,value : $('#posthd_problems_abdominal_pain').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_lbm" ,value : $('#posthd_problems_lbm').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_orthopnea" ,value : $('#posthd_problems_orthopnea').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_fever" ,value : $('#posthd_problems_fever').is(':checked') ? 1 : 0});
        //posthd VASCULAR ACCESS
        _data.push({name : "posthd_vascularaccess_pc" ,value : $('#posthd_vascularaccess_pc').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_tlc" ,value : $('#posthd_vascularaccess_tlc').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_avf" ,value : $('#posthd_vascularaccess_avf').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_avg" ,value : $('#posthd_vascularaccess_avg').is(':checked') ? 1 : 0});
        //posthd Bruit
        _data.push({name : "posthd_bruit" ,value : $('#posthd_bruit').is(':checked') ? 1 : 0});
        //posthd THRILL
        _data.push({name : "posthd_thrill_strong" ,value : $('#posthd_thrill_strong').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_weak" ,value : $('#posthd_thrill_weak').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_patent" ,value : $('#posthd_thrill_patent').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_clotted" ,value : $('#posthd_thrill_clotted').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_redness" ,value : $('#posthd_thrill_redness').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_swelling" ,value : $('#posthd_thrill_swelling').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_hematoma" ,value : $('#posthd_thrill_hematoma').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_pus_secretion" ,value : $('#posthd_thrill_pus_secretion').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_no_signs" ,value : $('#posthd_thrill_no_signs').is(':checked') ? 1 : 0});

        _data.push({name : "posthd_no_bleeding" ,value : $('#posthd_no_bleeding').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_arterial_venous_ports" ,value : $('#posthd_arterial_venous_ports').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_each_port_capped_secured" ,value : $('#posthd_each_port_capped_secured').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_arterial_venous_flushed" ,value : $('#posthd_arterial_venous_flushed').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_aseptically_dressed" ,value : $('#posthd_aseptically_dressed').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_bactroban_ointment" ,value : $('#posthd_bactroban_ointment').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_catherer_dressing" ,value : _posthd_cathererdressing_stat});
        _data.push({name : "discharge_type" ,value : _discharge_stat});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_Info/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removePatient_Info=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_Info/transaction/delete",
            "data":{patient_info_id: _selectedID},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var updatePatient_Info=function(){
        var _data=$('#frm_patientinfo').serializeArray();
        //HEPA
        _data.push({name : "hepatitis_status" ,value : _hepatitis_stat});
        //cash pcso philhealth
        _data.push({name : "cash" ,value : $('#cash').is(':checked') ? 1 : 0});
        _data.push({name : "pcso" ,value : $('#pcso').is(':checked') ? 1 : 0});
        _data.push({name : "philhealth" ,value : $('#philhealth').is(':checked') ? 1 : 0});
        //others_specify
        _data.push({name : "other_anticoagulant" ,value : $('#anticoagulant').is(':checked') ? 1 : 0});
        _data.push({name : "other_routineheparin" ,value : $('#routine_heparin').is(':checked') ? 1 : 0});
        _data.push({name : "other_lowdoseheparin" ,value : $('#lowdoseheparin').is(':checked') ? 1 : 0});
        _data.push({name : "dialysisbath_bicarbonate" ,value : _dialysisbath_bicarbonate});
        _data.push({name : "dialysisacid_hd144a" ,value : _dialysisacid_hd144a});
        //DIALYZER TYPE
        _data.push({name : "dialyzer_type" ,value : _dialyzer_type});
        //PREHD TYPE
        _data.push({name : "prehd_stat" ,value : _prehd_stat});
        //PULSE
        _data.push({name : "prehd_pulse_stat" ,value : _prehd_pulse_stat});
        //prehd neuro
        _data.push({name : "prehd_neuro_type" ,value : _prehd_neuro_stat});
        //pre_hd lungs
        _data.push({name : "prehd_lungs_clear" ,value : $('#prehd_lungs_clear').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_crackles" ,value : $('#prehd_lungs_crackles').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_hemoptysis" ,value : $('#prehd_lungs_hemoptysis').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_dob" ,value : $('#prehd_lungs_dob').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_wheezzing" ,value : $('#prehd_lungs_wheezzing').is(':checked') ? 1 : 0});
        //prehd edema
        _data.push({name : "prehd_edema_none" ,value : $('#prehd_edema_none').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_facial" ,value : $('#prehd_edema_facial').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_pedal" ,value : $('#prehd_edema_pedal').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_periorbital" ,value : $('#prehd_edema_periorbital').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_ascitis" ,value : $('#prehd_edema_ascitis').is(':checked') ? 1 : 0});
       /* _data.push({name : "prehd_edema_other" ,value : $('#prehd_edema_other').val()});*/
       //PRE HD GASTRO
        _data.push({name : "prehd_gastro_good_appetite" ,value : $('#prehd_gastro_good_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_no_appetite" ,value : $('#prehd_gastro_no_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_fair_appetite" ,value : $('#prehd_gastro_fair_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_melena" ,value : $('#prehd_gastro_melena').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_hematochezia" ,value : $('#prehd_gastro_hematochezia').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_hematemesis" ,value : $('#prehd_gastro_hematemesis').is(':checked') ? 1 : 0});
        //skin color
        _data.push({name : "prehd_skin_color" ,value : _prehd_skincolor_stat});
        //PREHD OTHERS
        _data.push({name : "prehd_others" ,value : _prehd_others_stat});
        //PREHD turgor
        _data.push({name : "prehd_turgor" ,value : _prehd_turgor_stat});
        //PREHD turgor
        _data.push({name : "prehd_neckveins" ,value : _prehd_neckveins_stat});
        //PREHD GENITO URINARY
        _data.push({name : "prehd_genito_urinary" ,value : _prehd_genitourinary_stat});
        //PREHD PROBLEMS/COMPLAINTS
        _data.push({name : "prehd_problems_none" ,value : $('#prehd_problems_none').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_chest_pain" ,value : $('#prehd_problems_chest_pain').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_cough" ,value : $('#prehd_problems_cough').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_abdominal_pain" ,value : $('#prehd_problems_abdominal_pain').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_lbm" ,value : $('#prehd_problems_lbm').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_orthopnea" ,value : $('#prehd_problems_orthopnea').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_fever" ,value : $('#prehd_problems_fever').is(':checked') ? 1 : 0});
        //PREHD VASCULAR ACCESS
        _data.push({name : "prehd_vascularaccess_pc" ,value : $('#prehd_vascularaccess_pc').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_tlc" ,value : $('#prehd_vascularaccess_tlc').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_avf" ,value : $('#prehd_vascularaccess_avf').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_avg" ,value : $('#prehd_vascularaccess_avg').is(':checked') ? 1 : 0});
        //PREHD Bruit
        _data.push({name : "prehd_bruit" ,value : $('#prehd_bruit').is(':checked') ? 1 : 0});
        //PREHD THRILL
        _data.push({name : "prehd_thrill_strong" ,value : $('#prehd_thrill_strong').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_weak" ,value : $('#prehd_thrill_weak').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_patent" ,value : $('#prehd_thrill_patent').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_clotted" ,value : $('#prehd_thrill_clotted').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_redness" ,value : $('#prehd_thrill_redness').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_swelling" ,value : $('#prehd_thrill_swelling').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_hematoma" ,value : $('#prehd_thrill_hematoma').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_pus_secretion" ,value : $('#prehd_thrill_pus_secretion').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_no_signs" ,value : $('#prehd_thrill_no_signs').is(':checked') ? 1 : 0});

        _data.push({name : "prehd_arterial" ,value : _prehd_arterial_stat});
        _data.push({name : "prehd_venous" ,value : _prehd_venous_stat});
        _data.push({name : "prehd_catherer_dressing" ,value : _prehd_cathererdressing_stat});
        _data.push({name : "prehd_av_fistula_cannulation_yes" ,value : _prehd_av_fistula_yes_stat});
        _data.push({name : "prehd_anesthesia" ,value : _prehd_anesthesia_stat});
        _data.push({name : "prehd_fistula_thrill" ,value : _prehd_fistula_thrill_stat});
        _data.push({name : "prehd_fistula_bruit" ,value : _prehd_fistula_bruit_stat});
        _data.push({name : "prehd_fistula_signs_of_infection" ,value : _prehd_fistula_signs_stat});
        _data.push({name : "prehd_fistula_dressing_aseptically" ,value : $('#prehd_fistula_dressing_aseptically').is(':checked') ? 1 : 0});

        //POSTHD
        _data.push({name : "posthd_stat" ,value : _posthd_stat});
        //PULSE
        _data.push({name : "posthd_pulse_stat" ,value : _posthd_pulse_stat});
        //posthd neuro
        _data.push({name : "posthd_neuro_type" ,value : _posthd_neuro_stat});
        //pre_hd lungs
        _data.push({name : "posthd_lungs_clear" ,value : $('#posthd_lungs_clear').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_crackles" ,value : $('#posthd_lungs_crackles').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_hemoptysis" ,value : $('#posthd_lungs_hemoptysis').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_dob" ,value : $('#posthd_lungs_dob').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_wheezzing" ,value : $('#posthd_lungs_wheezzing').is(':checked') ? 1 : 0});
        //posthd edema
        _data.push({name : "posthd_edema_none" ,value : $('#posthd_edema_none').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_facial" ,value : $('#posthd_edema_facial').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_pedal" ,value : $('#posthd_edema_pedal').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_periorbital" ,value : $('#posthd_edema_periorbital').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_ascitis" ,value : $('#posthd_edema_ascitis').is(':checked') ? 1 : 0});
       /* _data.push({name : "posthd_edema_other" ,value : $('#posthd_edema_other').val()});*/
       //PRE HD GASTRO
        _data.push({name : "posthd_gastro_good_appetite" ,value : $('#posthd_gastro_good_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_no_appetite" ,value : $('#posthd_gastro_no_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_fair_appetite" ,value : $('#posthd_gastro_fair_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_melena" ,value : $('#posthd_gastro_melena').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_hematochezia" ,value : $('#posthd_gastro_hematochezia').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_hematemesis" ,value : $('#posthd_gastro_hematemesis').is(':checked') ? 1 : 0});
        //skin color
        _data.push({name : "posthd_skin_color" ,value : _posthd_skincolor_stat});
        //posthd OTHERS
        _data.push({name : "posthd_others" ,value : _posthd_others_stat});
        //posthd turgor
        _data.push({name : "posthd_turgor" ,value : _posthd_turgor_stat});
        //posthd turgor
        _data.push({name : "posthd_neckveins" ,value : _posthd_neckveins_stat});
        //posthd GENITO URINARY
        _data.push({name : "posthd_genito_urinary" ,value : _posthd_genitourinary_stat});
        //posthd PROBLEMS/COMPLAINTS
        _data.push({name : "posthd_problems_none" ,value : $('#posthd_problems_none').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_chest_pain" ,value : $('#posthd_problems_chest_pain').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_cough" ,value : $('#posthd_problems_cough').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_abdominal_pain" ,value : $('#posthd_problems_abdominal_pain').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_lbm" ,value : $('#posthd_problems_lbm').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_orthopnea" ,value : $('#posthd_problems_orthopnea').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_fever" ,value : $('#posthd_problems_fever').is(':checked') ? 1 : 0});
        //posthd VASCULAR ACCESS
        _data.push({name : "posthd_vascularaccess_pc" ,value : $('#posthd_vascularaccess_pc').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_tlc" ,value : $('#posthd_vascularaccess_tlc').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_avf" ,value : $('#posthd_vascularaccess_avf').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_avg" ,value : $('#posthd_vascularaccess_avg').is(':checked') ? 1 : 0});
        //posthd Bruit
        _data.push({name : "posthd_bruit" ,value : $('#posthd_bruit').is(':checked') ? 1 : 0});
        //posthd THRILL
        _data.push({name : "posthd_thrill_strong" ,value : $('#posthd_thrill_strong').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_weak" ,value : $('#posthd_thrill_weak').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_patent" ,value : $('#posthd_thrill_patent').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_clotted" ,value : $('#posthd_thrill_clotted').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_redness" ,value : $('#posthd_thrill_redness').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_swelling" ,value : $('#posthd_thrill_swelling').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_hematoma" ,value : $('#posthd_thrill_hematoma').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_pus_secretion" ,value : $('#posthd_thrill_pus_secretion').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_no_signs" ,value : $('#posthd_thrill_no_signs').is(':checked') ? 1 : 0});

        _data.push({name : "posthd_no_bleeding" ,value : $('#posthd_no_bleeding').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_arterial_venous_ports" ,value : $('#posthd_arterial_venous_ports').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_each_port_capped_secured" ,value : $('#posthd_each_port_capped_secured').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_arterial_venous_flushed" ,value : $('#posthd_arterial_venous_flushed').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_aseptically_dressed" ,value : $('#posthd_aseptically_dressed').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_bactroban_ointment" ,value : $('#posthd_bactroban_ointment').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_catherer_dressing" ,value : _posthd_cathererdressing_stat});
        _data.push({name : "discharge_type" ,value : _discharge_stat});

        /*console.log(_data);*/
        _data.push({name : "patient_info_id" ,value : _selectedID});
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_Info/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
            
        });
    };
        /*prescription*/
    $('#patient_prescription').click(function(){
        $('#tbl_patient_prescription').dataTable().fnDestroy();
        showSpinningProgressLOADING();
        getPrescription();
        $('#modal_patient_prescription').modal('toggle');
    });

    $('#new_prescription').click(function(){
        _txnprescription="new";
        $('.tbody_new_prescription').empty();
        $(".tbody_new_prescription").append(
                       '<tr>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="hidden" name="count[]">'+
                                    '<input type="text" class="form-control" id="generic" name="medication[]" placeholder="Medication"  data-error-msg="Generic is required." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="text" class="form-control" id="dosage" name="qty[]" placeholder="Quantity"  data-error-msg="Dosage is Rquired." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Am[]" placeholder="AM"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Nn[]" placeholder="NN"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Pm[]" placeholder="PM"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Bedtime[]" placeholder="Bedtime"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<textarea class="form-control" rows="2" id="note" name="remarks[]" placeholder="Remarks"></textarea>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<center><button class="btn btn-danger btn-sm" name="btn_delete" data-toggle="tooltip" data-placement="left" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                            '</td>'+
                        '</tr>');
        

        $('#modal_new_prescription').modal('toggle');
    });

    $('#tbl_prescription_add tbody').on('click','button[name="btn_delete"]',function(){
      $(this).closest('tr').remove();
    });

    $("#btn_addrow").click(function(){
                $(".tbody_new_prescription").append(
                       '<tr>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="hidden" name="count[]">'+
                                    '<input type="text" class="form-control" id="generic" name="medication[]" placeholder="Medication"  data-error-msg="Generic is required." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="text" class="form-control" id="dosage" name="qty[]" placeholder="Quantity"  data-error-msg="Dosage is Rquired." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Am[]" placeholder="AM"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Nn[]" placeholder="NN"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Pm[]" placeholder="PM"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Bedtime[]" placeholder="Bedtime"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<textarea class="form-control" rows="2" id="note" name="remarks[]" placeholder="Remarks"></textarea>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<center><button class="btn btn-danger btn-sm" name="btn_delete" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                            '</td>'+
                        '</tr>');
            
    });

    $('#tbl_patient_prescription tbody').on('click','button[name="edit_prescription_details"]',function(){
        _txnprescription="edit";
        _selectRowObjprescription=$(this).closest('tr');
        var dataprescription=patient_prescription_dt.row(_selectRowObjprescription).data();
        _selectedIDprescription=dataprescription.patient_prescription_id;
        /*alert(_selectedIDprescription);*/
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(dataprescription,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 
        Getprescription_items().done(function(response){
                                jsoncount=response.data.length-1;
                                var show2table="";
                                /*alert(jsoncount);*/
                                for(var i=0;parseInt(jsoncount)>=i;i++){
                                    //alert(response.available_leave[i].leave_type);
                                    show2table+='<tr>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input type="hidden" name="count[]">'+
                                                            '<input type="text" class="form-control" value="'+response.data[i].medication+'" id="medication" name="medication[]" placeholder="Medication"  data-error-msg="Generic is required." required>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input type="text" class="form-control" value="'+response.data[i].qty+'" id="qty" name="qty[]" placeholder="Quantity"  data-error-msg="Dosage is Rquired." required>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control" rows="2" value="'+response.data[i].Am+'" id="Am" name="Am[]" placeholder="AM"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control" rows="2" value="'+response.data[i].Nn+'" id="Nn" name="Nn[]" placeholder="NN"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control" rows="2" value="'+response.data[i].Pm+'" id="Pm" name="Pm[]" placeholder="PM"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control" rows="2" value="'+response.data[i].Bedtime+'" id="Bedtime" name="Bedtime[]" placeholder="Bedtime"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<textarea class="form-control" rows="2" id="remarks" name="remarks[]" placeholder="Remarks">'+response.data[i].remarks+'</textarea>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<center><button class="btn btn-danger btn-sm" name="btn_delete" Row" ><i class="fa fa-trash"></i></button></center>'+
                                                    '</td>'+
                                                '</tr>';
                                                $('.tbody_new_prescription').empty();
                                                $('.tbody_new_prescription').html(show2table);
                                 }
                                }).always(function(){
                                    $.unblockUI();
                                    $('#modal_new_prescription').modal('toggle');
                                    /*$('#modal_patient_prescription').modal('toggle');*/
                                });
    });
    
    $('#tbl_patient_prescription tbody').on('click','button[name="view_prescription_details"]',function(){
        _selectRowObjprescription=$(this).closest('tr');
        var dataprescription=patient_prescription_dt.row(_selectRowObjprescription).data();
        _selectedIDprescription=dataprescription.patient_prescription_id;
        $('.prescriptiondate').text(dataprescription.date_prescribed);
        /*alert(_selectedIDprescription);*/
        companyimage();
        Getprescription_items().done(function(response){
                                jsoncount=response.data.length-1;
                                var show2table_pr_view="";
                                /*alert(jsoncount);*/
                                for(var i=0;parseInt(jsoncount)>=i;i++){
                                    //alert(response.available_leave[i].leave_type);
                                    show2table_pr_view+='<tr>'+
                                                    '<td>'+
                                                        response.data[i].medication+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].qty+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].Am+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].Nn+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].Pm+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].Bedtime+
                                                    '</td>'+
                                                    '<td>'+
                                                            response.data[i].remarks+
                                                    '</td>'+
                                                '</tr>';
                                                $('.prescription_view').empty();
                                                $('.prescription_view').html(show2table_pr_view);
                                 }
                                }).always(function(){
                                    $.unblockUI();
                                });
        /*$('#modal_patient_prescription').modal('toggle');*/
        $('#modal_prescription_details').modal('toggle');
    });

    $('#tbl_patient_prescription tbody').on('click','button[name="remove_prescription"]',function(){
        _txdelete="prescription";
        _selectRowObjprescription=$(this).closest('tr');
        var dataprescription=patient_prescription_dt.row(_selectRowObjprescription).data();
        _selectedIDprescription=dataprescription.patient_prescription_id;

        delete_notif();
    });

    $('#btn_create_prescription').click(function(){
        if(_txnprescription=="new"){
            if(validateRequiredFields($('#frm_patient_prescription'))){
                createPatient_prescription().done(function(response){
                                            showNotification(response);
                                            if(response.stat=="success"){
                                                $('#tbl_patient_prescription').DataTable().ajax.reload();
                                            }
                                        }).always(function(){
                                            $.unblockUI();
                                            $('#modal_new_prescription').modal('toggle');
                                        });
            }
        }
        if(_txnprescription=="edit"){
            if(validateRequiredFields($('#frm_patient_prescription'))){
                editPatient_prescription().done(function(response){
                                            showNotification(response);
                                            if(response.stat=="success"){
                                                $('#tbl_patient_prescription').DataTable().ajax.reload();
                                            }
                                        }).always(function(){
                                            $.unblockUI();
                                            $('#modal_new_prescription').modal('toggle');
                                        });
            }
        }
    });
    
    $('#print_prescription').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#printcontentprescription").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    var createPatient_prescription=function(){
            var _data=$('#frm_patient_prescription').serializeArray();
            _data.push({name : "patient_info_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_prescription/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var editPatient_prescription=function(){
            var _data=$('#frm_patient_prescription').serializeArray();
            _data.push({name : "patient_prescription_id" ,value : _selectedIDprescription});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_prescription/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var removePrescription=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_prescription/transaction/delete",
            "data":{patient_prescription_id: _selectedIDprescription},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var Getprescription_items=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_prescription_id" ,value : _selectedIDprescription});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_prescription/transaction/getitems",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    $('#patient_laboratory').click(function(){
        $('#tbl_lab').dataTable().fnDestroy();
        showSpinningProgressLOADING();
        getLaboratory();
        /*$('#modal_process_type').modal('toggle');*/
        $('#modal_patient_laboratory').modal('toggle');
    });

    $('#new_laboratory').click(function(){
        _txnMode1="new";
        $("#frm_patient_laboratory").trigger('reset');
        /*alert(_txnMode1);*/
       /* $('#modal_patient_laboratory').modal('toggle');*/
        $('#modal_new_lab').modal('toggle');
    });

    $('#btn_create_lab').click(function(){
        /*alert(_txnMode1);*/
        if(validateRequiredFields($('#frm_patient_laboratory'))){
            if(_txnMode1=="new"){
                createPatient_lab().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_lab').DataTable().ajax.reload();
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_lab').modal('toggle');
                });
            }
            if(_txnMode1=="edit"){
                updatePatient_lab().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_lab').DataTable().ajax.reload();
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_lab').modal('toggle');
                });
            }
        }
        
    });

    $('#tbl_lab tbody').on('click','button[name="edit_lab_details"]',function(){
        _txnMode1="edit";
        _selectRowObjlab=$(this).closest('tr');
        var datalab=patient_lab_dt.row(_selectRowObjlab).data();
        _selectedIDlab=datalab.patient_lab_id;
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datalab,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        $('img[name="img_preview"]').attr('src',datalab.photo_path);
        $('#modal_new_lab').modal('toggle');
    });

    $('#tbl_lab tbody').on('click','button[name="remove_lab"]',function(){
            _txdelete="lab";
            _selectRowObjlab=$(this).closest('tr');
            var datalab=patient_lab_dt.row(_selectRowObjlab).data();
            _selectedIDlab=datalab.patient_lab_id;
            delete_notif();
    });

    $('#tbl_lab tbody').on('click','button[name="view_lab_details"]',function(){
        _selectRowObjlab=$(this).closest('tr');
        var datalab=patient_lab_dt.row(_selectRowObjlab).data();
        $('#date_lab').text(datalab.date_lab);
        $('#lab_details').text(datalab.results);
        if(datalab.photo_path!=null){
            $('img[name="img_preview"]').attr('src',datalab.photo_path);
            $('a[name="img_a"]').attr('href',datalab.photo_path);
        }
        else{
            $('img[name="img_preview"]').attr('src',assets/img/noimage.jpg);
            $('a[name="img_a"]').attr('href','assets/img/noimage.jpg');
        }
        $('#modal_laboratory_details').modal('toggle');
    });

    $('#btn_browse').click(function(event){
                event.preventDefault();
                $('input[name="file_upload[]"]').click();
    });

    $('input[name="file_upload[]"]').change(function(event){
        var _files=event.target.files;

        //$('#div_img_product').hide();
       // $('#div_img_loader').show();
        showSpinningProgressUPLOAD();

        var data=new FormData();
        $.each(_files,function(key,value){
            data.append(key,value);
        });

        console.log(_files);

        $.ajax({
            url : 'Patient_laboratory/transaction/upload',
            type : "POST",
            data : data,
            cache : false,
            dataType : 'json',
            processData : false,
            contentType : false,
            success : function(response){
                        //console.log(response);
                        //alert(response.path);
                       // $('#div_img_loader').hide();
                       // $('#div_img_user').show();
                        showNotification(response);
                        $.unblockUI();
                        $('img[name="img_preview"]').attr('src',response.photo_path);
                        $('a[name="img_a"]').attr('href',response.photo_path);

                    }
        });
    });

    var createPatient_lab=function(){
            var _data=$('#frm_patient_laboratory').serializeArray();
            _data.push({name : "patient_info_id" ,value : _selectedID});
            _data.push({name : "photo_path" ,value : $('img[name="img_preview"]').attr('src')});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_laboratory/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var updatePatient_lab=function(){
            var _data=$('#frm_patient_laboratory').serializeArray();
            _data.push({name : "patient_lab_id" ,value : _selectedIDlab});
            _data.push({name : "photo_path" ,value : $('img[name="img_preview"]').attr('src')});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_laboratory/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var removeLab=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_laboratory/transaction/delete",
            "data":{patient_lab_id: _selectedIDlab},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    $('#print_lab_report').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#print_lab_report_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    $('#patient_billing').click(function(){
        $('#tbl_billing').dataTable().fnDestroy();
        showSpinningProgressLOADING();
        getBilling();
        $('#modal_patient_billing').modal('toggle');
    });

/*<select class="form-control select2" name="ref_patient_id" id="ref_patient_id" data-placeholder="Choose a Patient..." data-error-msg="Patient Name is required" required>
                                                     <?php foreach($patient_name as $row){ echo '<option value="'.$row->ref_patient_id  .'">'.$row->fullname.'</option>'; } ?>
                                                </select>*/
    $('#new_billing').click(function(){
        _txnMode2="new";
        $('.tbody_new_billing').empty();
        $(".tbody_new_billing").append(
                       '<tr>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="hidden" name="count[]">'+
                                    '<select class="form-control" name="ref_service_desc_id[]" id="ref_service_desc_id" data-placeholder="Choose a Service..." data-error-msg="Service Desc is required" required>'+
                                    '<?php foreach($service_desc as $row){ echo "<option value=".$row->ref_service_desc_id.">".$row->service_desc."</option>"; } ?>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="text" class="form-control bill_qty" id="qty" name="qty[]" placeholder="Quantity"  data-error-msg="Quantity is Rquired." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control bill_amount" id="amount" name="amount[]" placeholder="Amount"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control bill_total" id="total" name="total[]" placeholder="Total Amount" readonly></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<center><button class="btn btn-danger btn-sm" name="btn_delete" data-toggle="tooltip" data-placement="left" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                            '</td>'+
                        '</tr>');
        

        $('#modal_new_billing').modal('toggle');
    });

    $("#btn_addrow_billing").click(function(){
                $(".tbody_new_billing").append(
                       '<tr>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="hidden" name="count[]">'+
                                    '<select class="form-control" name="ref_service_desc_id[]" id="ref_service_desc_id" data-placeholder="Choose a Service..." data-error-msg="Service Desc is required" required>'+
                                    '<?php foreach($service_desc as $row){ echo "<option value=".$row->ref_service_desc_id.">".$row->service_desc."</option>"; } ?>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="text" class="form-control bill_qty" id="qty" name="qty[]" placeholder="Quantity"  data-error-msg="Quantity is Rquired." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control bill_amount" id="amount" name="amount[]" placeholder="Amount"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control bill_total" id="total" name="total[]" placeholder="Total Amount" readonly></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<center><button class="btn btn-danger btn-sm" name="btn_delete" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                            '</td>'+
                        '</tr>');   
    });

    $('#tbl_billing tbody').on('click','button[name="view_billing_details"]',function(){
        _selectRowObjbilling=$(this).closest('tr');
        var databilling=patient_billing_dt.row(_selectRowObjbilling).data();
        _selectedIDbilling=databilling.patient_billing_id;
        /*alert(_selectedIDprescription);*/
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(databilling,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        $('.billingdate').text(databilling.billing_date);
        $('.billing_code').text(databilling.billing_code);
        companyimage();
        Getbilling_items().done(function(response){
                                jsoncount=response.data.length-1;
                                var show2table_pr_view="";
                                /*alert(jsoncount);*/
                                for(var i=0;parseInt(jsoncount)>=i;i++){
                                    //alert(response.available_leave[i].leave_type);
                                    show2table_pr_view+='<tr>'+
                                                    '<td>'+
                                                        response.data[i].service_desc+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].qty+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].amount+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].total+
                                                    '</td>'+
                                                '</tr>';
                                                $('.billing_view').empty();
                                                $('.billing_view').html(show2table_pr_view);
                                 }
                                }).always(function(){
                                    $.unblockUI();
                                });
        /*$('#modal_patient_prescription').modal('toggle');*/
        $('#modal_billing_details').modal('toggle');
    });

    $('#tbl_billing_add tbody').on('click','button[name="btn_delete"]',function(){
      $(this).closest('tr').remove();
    });

    $(document).on('keyup', '.bill_qty', function(){
        var bill_qty = $(this).closest('tr').find('.bill_qty').val();
        var bill_amount = $(this).closest('tr').find('.bill_amount').val();
        $(this).closest('tr').find('.bill_total').val(parseInt(bill_qty)*parseInt(bill_amount));
    });

    $(document).on('keyup', '.bill_amount', function(){
        var bill_qty = $(this).closest('tr').find('.bill_qty').val();
        var bill_amount = $(this).closest('tr').find('.bill_amount').val();
        $(this).closest('tr').find('.bill_total').val(parseInt(bill_qty)*parseInt(bill_amount));
    });

    $('#btn_create_billing').click(function(){
        /*alert(_txnMode1);*/
        if(validateRequiredFields($('#frm_patient_billing'))){
            if(_txnMode2=="new"){
                createPatient_billing().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_billing').DataTable().ajax.reload();
                    $('#modal_new_billing').modal('toggle');
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_billing').modal('toggle');
                });
            }
            if(_txnMode2=="edit"){
                updatePatient_billing().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_billing').DataTable().ajax.reload();
                    }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_billing').modal('toggle');
                });
            }
        }
        
    });

    $('#tbl_billing tbody').on('click','button[name="edit_billing_details"]',function(){
        _txnMode2="edit";
        _selectRowObjbilling=$(this).closest('tr');
        var databilling=patient_billing_dt.row(_selectRowObjbilling).data();
        _selectedIDbilling=databilling.patient_billing_id;
        /*alert(_selectedIDprescription);*/
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(databilling,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        Getbilling_items().done(function(response){
                                jsoncount=response.data.length-1;
                                var show2table="";
                                /*alert(jsoncount);*/
                                for(var i=0;parseInt(jsoncount)>=i;i++){
                                    //alert(response.available_leave[i].leave_type);
                                    show2table+='<tr>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input type="hidden" name="count[]">'+
                                                            '<select class="form-control" name="ref_service_desc_id[]" id="ref_service_desc_id" data-placeholder="Choose a Service..." data-error-msg="Service Desc is required" required>'+
                                                            '<option value='+response.data[i].ref_service_desc_id+'>[ '+response.data[i].service_desc+' ]</option>'+
                                                            '<?php foreach($service_desc as $row){ echo "<option value=".$row->ref_service_desc_id.">".$row->service_desc."</option>"; } ?>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input type="text" class="form-control bill_qty" value="'+response.data[i].qty+'" id="qty" name="qty[]" placeholder="Quantity"  data-error-msg="Quantity is Rquired." required>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control bill_amount" value="'+response.data[i].amount+'"  id="amount" name="amount[]" placeholder="Amount"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control bill_total" value="'+response.data[i].total+'"  id="total" name="total[]" placeholder="Total Amount" readonly></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<center><button class="btn btn-danger btn-sm"  name="btn_delete" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                                                    '</td>'+
                                                '</tr>';

                                                
                                 }
                                    $('.tbody_new_billing').empty();
                                    $('.tbody_new_billing').html(show2table);
                                }).always(function(){
                                    $.unblockUI();
                                    $('#modal_new_billing').modal('toggle');
                                    /*$('#modal_patient_prescription').modal('toggle');*/
                                });
    });

    $('#tbl_billing tbody').on('click','button[name="remove_billing"]',function(){
            _txdelete="billing";
            _selectRowObjbilling=$(this).closest('tr');
            var databilling=patient_billing_dt.row(_selectRowObjbilling).data();
            _selectedIDbilling=databilling.patient_billing_id;
            delete_notif();
    });

    var createPatient_billing=function(){
            var _data=$('#frm_patient_billing').serializeArray();
            _data.push({name : "patient_info_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_billing/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var updatePatient_billing=function(){
            var _data=$('#frm_patient_billing').serializeArray();
            _data.push({name : "patient_billing_id" ,value : _selectedIDbilling});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_billing/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var removeBilling=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_billing/transaction/delete",
            "data":{patient_billing_id: _selectedIDbilling},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var Getbilling_items=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_billing_id" ,value : _selectedIDbilling});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_billing/transaction/getitems",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_billing').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#printcontentbilling").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    $('#patient_visiting_record').click(function(){
        $('#tbl_visiting_record').dataTable().fnDestroy();
        showSpinningProgressLOADING();
        getVisitingRecord();
        $('#modal_vising_record').modal('toggle');
    });

    $('#new_visiting_record').click(function(){
        _txnMode3="new";
        $("#frm_patient_visiting_record").trigger('reset');
        /*alert(_txnMode1);*/
        $('#modal_new_visit').modal('toggle');
    });

    $('#btn_create_visiting_record').click(function(){
        /*alert(_txnMode1);*/
        if(validateRequiredFields($('#frm_patient_visiting_record'))){
            if(_txnMode3=="new"){
                createPatientVisitingRecord().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_visiting_record').DataTable().ajax.reload();
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_visit').modal('toggle');
                });
            }
            if(_txnMode3=="edit"){
                updatePatientVisitingRecord().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_visiting_record').DataTable().ajax.reload();
                    }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_visit').modal('toggle');
                });
            }
        }
        
    });

    $('#tbl_visiting_record tbody').on('click','button[name="edit_visiting_record"]',function(){
        _txnMode3="edit";
        _selectRowObjvisiting=$(this).closest('tr');
        var datavisiting=patient_visiting_record_dt.row(_selectRowObjvisiting).data();
        _selectedIDvisiting=datavisiting.patient_visiting_record_id;
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datavisiting,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        $('#modal_new_visit').modal('toggle');
    });

    $('#tbl_visiting_record tbody').on('click','button[name="remove_visiting_record"]',function(){
            _txdelete="visitingrecord";
            _selectRowObjvisiting=$(this).closest('tr');
            var datavisiting=patient_visiting_record_dt.row(_selectRowObjvisiting).data();
            _selectedIDvisiting=datavisiting.patient_visiting_record_id;
            delete_notif();
    });

    $('#tbl_visiting_record tbody').on('click','button[name="view_visiting_details_record"]',function(){
        _selectRowObjvisiting=$(this).closest('tr');
        var datavisiting=patient_visiting_record_dt.row(_selectRowObjvisiting).data();
        $('#datevisited').text(datavisiting.visiting_date);
        $('#nextvisitdate').text(datavisiting.next_visit_date);
        $('#visitingnote').text(datavisiting.visiting_note);
        $('#visitingdiagnostics').text(datavisiting.visiting_diagnostics);
        $('#visitingfindings').text(datavisiting.visiting_findings);
        $('#visitingtreatment').text(datavisiting.treatment);
        $('#visitingremarks').text(datavisiting.visiting_remarks);
        $('#modal_visiting_details').modal('toggle');
    });

    var createPatientVisitingRecord=function(){
            var _data=$('#frm_patient_visiting_record').serializeArray();
            _data.push({name : "patient_info_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_visiting/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var updatePatientVisitingRecord=function(){
            var _data=$('#frm_patient_visiting_record').serializeArray();
            _data.push({name : "patient_visiting_record_id" ,value : _selectedIDvisiting});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_visiting/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var removeVisiting=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_visiting/transaction/delete",
            "data":{patient_visiting_record_id: _selectedIDvisiting},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    $('#printvisitdetails').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#printcontentvisitingdetails").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true
        });
    });

    var _txnMode4; var _selectedIDclinical; var _selectRowObjclinical;
    $('#patient_clinical').click(function(){
        $('#tbl_clinical').dataTable().fnDestroy();
        showSpinningProgressLOADING();
        getClinical();
        $('#modal_clinical').modal('toggle');
    });

    $('#new_clinical').click(function(){
        _txnMode4="new";
        $("#frm_clinical_db").trigger('reset');
        /*alert(_txnMode1);*/
        $('#modal_new_clinical').modal('toggle');
    });

    $('#tbl_clinical tbody').on('click','button[name="edit_clinical"]',function(){
        _txnMode4="edit";
        _selectRowObjclinical=$(this).closest('tr');
        var dataclinical=patient_clinical_dt.row(_selectRowObjclinical).data();
        _selectedIDclinical=dataclinical.patient_clinical_id;
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(dataclinical,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        $('#modal_new_clinical').modal('toggle');
    });

    $('#btn_create_clinical').click(function(){
        /*alert(_txnMode1);*/
        if(validateRequiredFields($('#frm_clinical_db'))){
            if(_txnMode4=="new"){
                createClinical().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_clinical').DataTable().ajax.reload();
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_clinical').modal('toggle');
                });
            }
            if(_txnMode4=="edit"){
                updateClinical().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_clinical').DataTable().ajax.reload();
                    }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_clinical').modal('toggle');
                });
            }
        }
        
    });

    $('#tbl_clinical tbody').on('click','button[name="view_clinical_details"]',function(){
        _selectRowObjclinical=$(this).closest('tr');
        var dataclinical=patient_clinical_dt.row(_selectRowObjclinical).data();
        $('#clinical_diagnostics').text(dataclinical.clinical_diagnostics);
        $('#clinical_treatment').text(dataclinical.clinical_treatment);
        $('#clinical_medication').text(dataclinical.clinical_medication);
        $('#clinical_remarks').text(dataclinical.clinical_remarks);
        $('#modal_clinical_details').modal('toggle');
    });

    var createClinical=function(){
            var _data=$('#frm_clinical_db').serializeArray();
            _data.push({name : "patient_info_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_clinical/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var updateClinical=function(){
            var _data=$('#frm_clinical_db').serializeArray();
            _data.push({name : "patient_clinical_id" ,value : _selectedIDclinical});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_clinical/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#printclinicaldetails').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#printcontentclinicaldetails").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true
        });
    });

    var _patient_medical_abstract_id;
    var _txnmedicalabstract;
    $('#patient_medical_abstract').click(function(){
        getmedicalabstract().done(function(response){
                                 if(response.data.length==0){
                                    /*alert('0');*/
                                    $("#frm_medical_abstract").trigger('reset');
                                    _txnmedicalabstract="newmedabstract";
                                 }
                                 else{
                                    _txnmedicalabstract="updatemedabstract";
                                    _patient_medical_abstract_id=response.data[0].patient_medical_abstract_id;
                                    $('input,textarea').each(function(){
                                    var _elem=$(this);
                                     $.each(response.data[0],function(name,value){
                                            if(_elem.attr('name')==name){
                                                _elem.val(value);
                                            }
                                            if(_elem.attr('id')==name){
                                                if(value==1){ _elem.prop("checked",true); }

                                            }
                                        });
                                    });
                                 }
                            }).always(function(){
                                $.unblockUI();
                            });
        $('#modal_medical_abstract').modal('toggle');
    });


    $('#save_medical_abstract').click(function(){
        if(validateRequiredFields($('#frm_medical_abstract'))){
            if(_txnmedicalabstract=="newmedabstract"){
                Savemedicalabstract().done(function(response){
                    $.unblockUI();
                    showNotification(response);
                    _txnmedicalabstract="updatemedabstract";
                    _patient_medical_abstract_id=response.row_added[0].patient_medical_abstract_id;
                    $.unblockUI();
                    $('input,textarea').each(function(){
                                    var _elem=$(this);
                                     $.each(response.data[0],function(name,value){
                                            if(_elem.attr('name')==name){
                                                _elem.val(value);
                                            }
                                        });
                                    });
                }).always(function(){
                    
                });
            }
            if(_txnmedicalabstract=="updatemedabstract"){
                Updatemedicalabstract().done(function(response){
                    showNotification(response);
                    $.unblockUI();
                    $('input,textarea').each(function(){
                                    var _elem=$(this);
                                     $.each(response.data[0],function(name,value){
                                            if(_elem.attr('name')==name){
                                                _elem.val(value);
                                            }
                                        });
                                    });
                }).always(function(){
                    
                });
            }
        }   
    });

    var getmedicalabstract=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_medical_abstract_id" ,value : _patient_medical_abstract_id});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"patient_medical_abstract/transaction/list",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    var Savemedicalabstract=function(){
        var _data=$('#frm_medical_abstract').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $('#frm_medical_abstract input:checkbox').each(function()
            {
                var A = ($(this).attr('id'));
                _data.push({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});
            });
            /*var g = ({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});*/
            /*console.log(g);*/

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_abstract/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var Updatemedicalabstract=function(){
        var _data=$('#frm_medical_abstract').serializeArray();
            _data.push({name : "patient_medical_abstract_id" ,value : _patient_medical_abstract_id});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $('#frm_medical_abstract input:checkbox').each(function()
            {
                var A = ($(this).attr('id'));
                _data.push({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});
            });

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_abstract/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_medical_abstract').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $('input[type="checkbox"]').each(function() {
            if($(this).is (':checked')) {
               $(this).attr('checked', 'true') 
            }
        });

        $('#frm_medical_abstract input:text').each(function() {
               /*var val = $(this).val();
               var id = $(this).attr('id');
               $('#'++'').val(10);*/
                $(this).attr('value', $(this).val());

        });

        $("#print_medical_abstract_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:false,
            canvas: false 
        });
    });

    $('#patient_nephro_order').click(function(){
        
        getnephroorder().done(function(response){
                                 if(response.data.length==0){
                                    /*alert('0');*/
                                    _nephrotxn="newnephro";
                                    $("#frm_nephro_order").trigger('reset');
                                 }
                                 else{
                                    _nephrotxn="updatenephro";
                                    _patient_nephro_id=response.data[0].patient_nephro_id
                                    $('input,textarea').each(function(){
                                    var _elem=$(this);
                                     $.each(response.data[0],function(name,value){
                                            if(_elem.attr('name')==name){
                                                _elem.val(value);
                                            }
                                        });
                                    });
                                 }
                            }).always(function(){
                                $.unblockUI();
                            });
        $('#modal_patient_nephro_order').modal('toggle');
    });

    $('#save_nephro').click(function(){
        if(validateRequiredFields($('#frm_nephro_order'))){
            if(_nephrotxn=="newnephro"){
                Savenephro().done(function(response){
                    showNotification(response);
                    _nephrotxn="updatenephro";
                    _patient_nephro_id=response.row_added[0].patient_nephro_id;
                    $.unblockUI();
                    $('input,textarea').each(function(){
                                    var _elem=$(this);
                                     $.each(response.data[0],function(name,value){
                                            if(_elem.attr('name')==name){
                                                _elem.val(value);
                                            }
                                        });
                                    });
                }).always(function(){
                    
                });
            }
            if(_nephrotxn=="updatenephro"){
                Updatenephro().done(function(response){
                    showNotification(response);
                    $.unblockUI();
                    $('input,textarea').each(function(){
                                    var _elem=$(this);
                                     $.each(response.data[0],function(name,value){
                                            if(_elem.attr('name')==name){
                                                _elem.val(value);
                                            }
                                        });
                                    });
                }).always(function(){
                    
                });
            }
        }   
    });

    var getnephroorder=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_nephro_id" ,value : _patient_nephro_id});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_nephro_order/transaction/list",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    var Savenephro=function(){
        var _data=$('#frm_nephro_order').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_nephro_order/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var Updatenephro=function(){
        var _data=$('#frm_nephro_order').serializeArray();
            _data.push({name : "patient_nephro_id" ,value : _patient_nephro_id});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_nephro_order/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_nephro').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#print_nephro_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    var _txnlabreport;
    var _patient_lab_report_id;
    $('#patient_laboratory_report').click(function(){
        $('#frm_lab_diagnostic').find('input:checkbox').prop('checked', false);
        getlabdiagnostics().done(function(response){
                                if(response.data.length==0){
                                    _txnlabreport="new";
                                    $('#lab_report_date').val('');
                                }
                                else{
                                    _txnlabreport="update";
                                    _patient_lab_report_id=response.data[0].patient_lab_report_id;
                                    $('#lab_report_date').val(response.data[0].lab_report_date);
                                    $('input,textarea').each(function(){
                                    var _elem=$(this);
                                     $.each(response.data[0],function(name,value){
                                            if(_elem.attr('id')==name){
                                                if(value==1){ _elem.prop("checked",true); }

                                            }
                                        });
                                    });
                                }
                            }).always(function(){
                                $.unblockUI();
                            });
        $('#modal_laboratory_report').modal('toggle');
    });

    $('#save_labreport_diagnostics').click(function(){
        if(validateRequiredFields($('#frm_lab_diagnostic'))){
            if(_txnlabreport=="new"){
                Savelabdiagnostics().done(function(response){
                    showNotification(response);
                    $.unblockUI();
                    _txnlabreport="update";
                    _patient_lab_report_id=response.row_added[0].patient_lab_report_id;
                    $('#lab_report_date').val(response.row_updated[0].lab_report_date);
                }).always(function(){
                    
                });
            }
            if(_txnlabreport=="update"){
                Updatelabdiagnostics().done(function(response){
                    showNotification(response);
                    $.unblockUI();
                    $('#lab_report_date').val(response.row_updated[0].lab_report_date);
                }).always(function(){
                    
                });
            }
        }   
    });

    var getlabdiagnostics=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_lab_diagnostics/transaction/list",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    var Savelabdiagnostics=function(){
        var _data=$('#frm_lab_diagnostic').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});
            _data.push({name : "hm_cbc" ,value : $('#hm_cbc').is(':checked') ? 1 : 0});
            _data.push({name : "hm_ph_bsmear" ,value : $('#hm_ph_bsmear').is(':checked') ? 1 : 0});
            _data.push({name : "chem_bun" ,value : $('#chem_bun').is(':checked') ? 1 : 0});
            _data.push({name : "chem_creatinine" ,value : $('#chem_creatinine').is(':checked') ? 1 : 0});
            _data.push({name : "chem_na" ,value : $('#chem_na').is(':checked') ? 1 : 0});
            _data.push({name : "chem_k" ,value : $('#chem_k').is(':checked') ? 1 : 0});
            _data.push({name : "chem_fbs" ,value : $('#chem_fbs').is(':checked') ? 1 : 0});
            _data.push({name : "chem_ion_calc" ,value : $('#chem_ion_calc').is(':checked') ? 1 : 0});
            _data.push({name : "chem_phosporus" ,value : $('#chem_phosporus').is(':checked') ? 1 : 0});
            _data.push({name : "chem_albumin" ,value : $('#chem_albumin').is(':checked') ? 1 : 0});
            _data.push({name : "chem_uricacid" ,value : $('#chem_uricacid').is(':checked') ? 1 : 0});
            _data.push({name : "chem_lipidprofile" ,value : $('#chem_lipidprofile').is(':checked') ? 1 : 0});
            _data.push({name : "chem_sgpt" ,value : $('#chem_sgpt').is(':checked') ? 1 : 0});
            _data.push({name : "chem_specify" ,value : $('#chem_specify').is(':checked') ? 1 : 0});
            _data.push({name : "imag_12lecg" ,value : $('#imag_12lecg').is(':checked') ? 1 : 0});
            _data.push({name : "imag_cxrpa" ,value : $('#imag_cxrpa').is(':checked') ? 1 : 0});
            _data.push({name : "imag_kubxray" ,value : $('#imag_kubxray').is(':checked') ? 1 : 0});
            _data.push({name : "imag_ctstronogram" ,value : $('#imag_ctstronogram').is(':checked') ? 1 : 0});
            _data.push({name : "imag_kubultrasound" ,value : $('#imag_kubultrasound').is(':checked') ? 1 : 0});
            _data.push({name : "imag_prosultra" ,value : $('#imag_prosultra').is(':checked') ? 1 : 0});
            _data.push({name : "imag_abdomen" ,value : $('#imag_abdomen').is(':checked') ? 1 : 0});
            _data.push({name : "imag_ct_angiography" ,value : $('#imag_ct_angiography').is(':checked') ? 1 : 0});
            _data.push({name : "imag_renal_duplex" ,value : $('#imag_renal_duplex').is(':checked') ? 1 : 0});
            _data.push({name : "renal_gfr" ,value : $('#renal_gfr').is(':checked') ? 1 : 0});
            _data.push({name : "urine_routine_analysis" ,value : $('#urine_routine_analysis').is(':checked') ? 1 : 0});
            _data.push({name : "urine_rbc_morph" ,value : $('#urine_rbc_morph').is(':checked') ? 1 : 0});
            _data.push({name : "urine_random" ,value : $('#urine_random').is(':checked') ? 1 : 0});
            _data.push({name : "urine_sodium" ,value : $('#urine_sodium').is(':checked') ? 1 : 0});
            _data.push({name : "urine_calcium" ,value : $('#urine_calcium').is(':checked') ? 1 : 0});
            _data.push({name : "urine_total_protein" ,value : $('#urine_total_protein').is(':checked') ? 1 : 0});
            _data.push({name : "urine_clearance" ,value : $('#urine_clearance').is(':checked') ? 1 : 0});
            _data.push({name : "urine_potassium" ,value : $('#urine_potassium').is(':checked') ? 1 : 0});
            _data.push({name : "urine_creatinine" ,value : $('#urine_creatinine').is(':checked') ? 1 : 0});
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_lab_diagnostics/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

     var Updatelabdiagnostics=function(){
        var _data=$('#frm_lab_diagnostic').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});
            _data.push({name : "patient_lab_report_id" ,value : _patient_lab_report_id});
            _data.push({name : "hm_cbc" ,value : $('#hm_cbc').is(':checked') ? 1 : 0});
            _data.push({name : "hm_ph_bsmear" ,value : $('#hm_ph_bsmear').is(':checked') ? 1 : 0});
            _data.push({name : "chem_bun" ,value : $('#chem_bun').is(':checked') ? 1 : 0});
            _data.push({name : "chem_creatinine" ,value : $('#chem_creatinine').is(':checked') ? 1 : 0});
            _data.push({name : "chem_na" ,value : $('#chem_na').is(':checked') ? 1 : 0});
            _data.push({name : "chem_k" ,value : $('#chem_k').is(':checked') ? 1 : 0});
            _data.push({name : "chem_fbs" ,value : $('#chem_fbs').is(':checked') ? 1 : 0});
            _data.push({name : "chem_ion_calc" ,value : $('#chem_ion_calc').is(':checked') ? 1 : 0});
            _data.push({name : "chem_phosporus" ,value : $('#chem_phosporus').is(':checked') ? 1 : 0});
            _data.push({name : "chem_albumin" ,value : $('#chem_albumin').is(':checked') ? 1 : 0});
            _data.push({name : "chem_uricacid" ,value : $('#chem_uricacid').is(':checked') ? 1 : 0});
            _data.push({name : "chem_lipidprofile" ,value : $('#chem_lipidprofile').is(':checked') ? 1 : 0});
            _data.push({name : "chem_sgpt" ,value : $('#chem_sgpt').is(':checked') ? 1 : 0});
            _data.push({name : "chem_specify" ,value : $('#chem_specify').is(':checked') ? 1 : 0});
            _data.push({name : "imag_12lecg" ,value : $('#imag_12lecg').is(':checked') ? 1 : 0});
            _data.push({name : "imag_cxrpa" ,value : $('#imag_cxrpa').is(':checked') ? 1 : 0});
            _data.push({name : "imag_kubxray" ,value : $('#imag_kubxray').is(':checked') ? 1 : 0});
            _data.push({name : "imag_ctstronogram" ,value : $('#imag_ctstronogram').is(':checked') ? 1 : 0});
            _data.push({name : "imag_kubultrasound" ,value : $('#imag_kubultrasound').is(':checked') ? 1 : 0});
            _data.push({name : "imag_prosultra" ,value : $('#imag_prosultra').is(':checked') ? 1 : 0});
            _data.push({name : "imag_abdomen" ,value : $('#imag_abdomen').is(':checked') ? 1 : 0});
            _data.push({name : "imag_ct_angiography" ,value : $('#imag_ct_angiography').is(':checked') ? 1 : 0});
            _data.push({name : "imag_renal_duplex" ,value : $('#imag_renal_duplex').is(':checked') ? 1 : 0});
            _data.push({name : "renal_gfr" ,value : $('#renal_gfr').is(':checked') ? 1 : 0});
            _data.push({name : "urine_routine_analysis" ,value : $('#urine_routine_analysis').is(':checked') ? 1 : 0});
            _data.push({name : "urine_rbc_morph" ,value : $('#urine_rbc_morph').is(':checked') ? 1 : 0});
            _data.push({name : "urine_random" ,value : $('#urine_random').is(':checked') ? 1 : 0});
            _data.push({name : "urine_sodium" ,value : $('#urine_sodium').is(':checked') ? 1 : 0});
            _data.push({name : "urine_calcium" ,value : $('#urine_calcium').is(':checked') ? 1 : 0});
            _data.push({name : "urine_total_protein" ,value : $('#urine_total_protein').is(':checked') ? 1 : 0});
            _data.push({name : "urine_clearance" ,value : $('#urine_clearance').is(':checked') ? 1 : 0});
            _data.push({name : "urine_potassium" ,value : $('#urine_potassium').is(':checked') ? 1 : 0});
            _data.push({name : "urine_creatinine" ,value : $('#urine_creatinine').is(':checked') ? 1 : 0});
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_lab_diagnostics/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_labreport_diagnostics').click(function(event){
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        $('input[type="checkbox"]').each(function() {
                if($(this).is (':checked')) {
                   $(this).attr('checked', 'true') 
                }
            });
        /*this code somehow fixed the checkbox issue.*/
        /*alert(output);*/
        $("#print_labreport_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:false,
            canvas: false 
        });
    });

    var _txnmedical;
    var _patient_medical_certificate_id;
    $('#patient_medical_certificate').click(function(){
        getmedicalcertificate().done(function(response){
                                if(response.data.length==0){
                                    _txnmedical="new";
                                    $('#medical_date').val('');
                                    $('#medical_diagnostics').text('');
                                }
                                else{
                                    _txnmedical="update";
                                    _patient_medical_certificate_id=response.data[0].patient_medical_certificate_id;
                                    /*alert(response.data[0].medical_diagnostics);*/
                                    $('#medical_date').val(response.data[0].medical_date);
                                    $('#medical_diagnostics').text(response.data[0].medical_diagnostics);
                                }
                            }).always(function(){
                                $.unblockUI();
                            });
        $('#modal_patient_medical_certificate').modal('toggle');
    });

    var getmedicalcertificate=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_record/transaction/list",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    $('#save_medical_certificate').click(function(){
        if(validateRequiredFields($('#frm_medical_record'))){
            if(_txnmedical=="new"){
                Savemedicalcertificate().done(function(response){
                    showNotification(response);
                    $.unblockUI();
                    $('#medical_date').val(response.row_updated[0].medical_date);
                    $('#medical_diagnostics').text(response.row_updated[0].medical_diagnostics);
                }).always(function(){
                    
                });
            }
            if(_txnmedical=="update"){
                Updatemedicalcertificate().done(function(response){
                    showNotification(response);
                    $('#medical_date').val(response.row_updated[0].medical_date);
                    $('#medical_diagnostics').text(response.row_updated[0].medical_diagnostics);
                }).always(function(){
                    $.unblockUI();
                });
            }
        }   
    });

    var Savemedicalcertificate=function(){
        var _data=$('#frm_medical_record').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_record/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var Updatemedicalcertificate=function(){
        var _data=$('#frm_medical_record').serializeArray();
            _data.push({name : "patient_medical_certificate_id" ,value : _patient_medical_certificate_id});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_record/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_medical_certificate').click(function(event){
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#print_medical_certificate_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    var companyimage=function(){
        var currentURL = window.location.href;
        var outputimage = currentURL.match(/^(.*)\/[^/]*$/)[1];
        var company_image = outputimage+"/assets/invoice-logo.png";
        $('.company_print').attr('src',company_image);
    };

    var success_notif=function(type){
        swal("Good job!", type, "success");

    };

    var notice_notif=function(type){
        swal("Select Data First!", type, "warning");

    };

    var delete_notif=function(type){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this file!",   
            type: "warning",   
            closeOnConfirm: false,
            closeOnCancel: false,
            showCancelButton: true,   
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",   
        },function(isConfirm){
            if (isConfirm) {     
                swal("Deleted!", "Patient Information has been deleted.", "success");
                if(_txdelete=="patient"){
                    removePatient_Info().done(function(response){
                    showNotification(response);
                        dt.row(_selectRowObj).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                if(_txdelete=="prescription"){
                    swal("Deleted!", "Patient Prescription has been deleted.", "success");
                    removePrescription().done(function(response){
                    showNotification(response);
                        patient_prescription_dt.row(_selectRowObjprescription).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                if(_txdelete=="lab"){
                     swal("Deleted!", "Patient Lab has been deleted.", "success");
                    removeLab().done(function(response){
                    showNotification(response);
                        patient_lab_dt.row(_selectRowObjlab).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                if(_txdelete=="billing"){
                     swal("Deleted!", "Patient Billing has been deleted.", "success");
                    removeBilling().done(function(response){
                    showNotification(response);
                        patient_billing_dt.row(_selectRowObjbilling).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                if(_txdelete=="visitingrecord"){
                     swal("Deleted!", "Patient Visiting Record has been deleted.", "success");
                    removeVisiting().done(function(response){
                    showNotification(response);
                        patient_visiting_record_dt.row(_selectRowObjvisiting).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                 
            } else {     
                swal("Cancelled", "Your file is safe :)", "error");   
            } 
        });
    };

    var printing_notif=function(){
        swal({   
            title: 'Initializing Printing..',    
            timer: 2000,
            imageUrl: "assets/loader.svg"
        });
    };

    var clearcheckboxes=function(){
        $("input:checkbox").prop('checked',false);
         dt;  _txnMode;  _selectedID;  _selectRowObj;  _btnNew;  _hepatitis_stat="";
         _dialysisbath_bicarbonate=0;  _dialysisacid_hd144a=0;
         _dialyzer_type=0;  dzc=0; dzhe=0; dzhf=0; dzren=0;
         _prehd_stat="";  prehd_am=0;  prehd_wc=0;  prehd_bs=0;  prehd_amwa=0;
         _posthd_stat="";  posthd_am=0;  posthd_wc=0;  posthd_bs=0;  posthd_amwa=0;
         _prehd_pulse_stat="";  ps_reg=0;  ps_irreg=0;
         _posthd_pulse_stat="";  posthd_ps_reg=0;  posthd_ps_irreg=0;
         _prehd_neuro_stat="";  _prehd_neuro_comatose="";
         _posthd_neuro_stat="";  _posthd_neuro_comatose="";
         _prehd_skincolor_stat="";
         _posthd_skincolor_stat="";
         _prehd_others_stat="";
         _posthd_others_stat="";
         _prehd_turgor_stat="";  _prehd_neckveins_stat="";
         _posthd_turgor_stat="";  _posthd_neckveins_stat="";
         _prehd_genitourinary_stat="";
         _posthd_genitourinary_stat="";
         _prehd_arterial_stat="";  _prehd_venous_stat="";  _prehd_cathererdressing_stat="";
         _posthd_arterial_stat="";  _posthd_venous_stat="";  _posthd_cathererdressing_stat="";
         _prehd_av_fistula_yes_stat="";  _prehd_anesthesia_stat="";
         _posthd_av_fistula_yes_stat="";  _posthd_anesthesia_stat="";
         _prehd_fistula_thrill_stat="";  _prehd_fistula_bruit_stat="";  _prehd_fistula_signs_stat="";
         _posthd_fistula_thrill_stat="";  _posthd_fistula_bruit_stat="";  _posthd_fistula_signs_stat="";
         _dhh=0;  _discharge_stat="";

    }

    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    }; 

    var validateRequiredFieldsinemployee=function(f){
    var stat=true;

    $('div.form-group').removeClass('has-error');
    $('input[required],textarea[required],select[required]',f).each(function(){

            if($(this).is('select')){
            if($(this).val()==0 || $(this).val()==null){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('div.form-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }
        
            }else{
            if($(this).val()==""){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('div.form-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }
        }
        



    });

    return stat;
    };

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $(f).find('input:first').focus();
    };

    $('.date-picker').datepicker({
      autoclose: true
    });

    $(".select2").select2();

    $(".imagelight").lightGallery(); 

   </script>
</body>
</html>
