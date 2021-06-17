  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/rdv.css">
    <link rel="stylesheet"  href="css/main.min.css">
</head>
<body>
	<script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <div class="row">
    <div id="ContentPH_Rdv_DivPatient" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group form-group-lg">
            <label>Patient <span class="text-danger">*</span></label>
            <select name="ctl00$ContentPH$Rdv$R_Patient" id="R_Patient" class="form-control">
</select>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <label>Date <span class="text-danger">*</span></label>
        <div class="input-group">
            <input name="ctl00$ContentPH$Rdv$R_Date" type="text" id="R_Date" class="form-control" placeholder="jj/mm/aaaa" style="z-index: 5002;" value="07/06/2021" />
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <label>Heure <span class="text-danger">*</span></label>
        <div class="input-group m-b-15">
            <div class="bootstrap-timepicker">
                <input name="ctl00$ContentPH$Rdv$R_Time" type="text" id="R_Time" class="form-control" value="11:9" />
            </div>
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="form-group">
            <label>Détails </label>
            <textarea name="ctl00$ContentPH$Rdv$R_Description" id="ContentPH_Rdv_R_Description" class="form-control " type="text"></textarea>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <a class="btn btn-warning btn-lg pull-left" href="/calendrier.aspx" target="_blank"><i class="fa fa-calendar"></i><span class="hidden-xs">Voir le calendrier</span></a>
        <button onclick="__doPostBack('ctl00$ContentPH$Rdv$BtnAddRdv','')" id="BtnAddRdv" class="btn btn-primary btn-lg pull-right"><i class="fa fa-floppy-o"></i>Enregistrer</button>
    </div>
</div>
</body>
</html>
