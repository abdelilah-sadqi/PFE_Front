var RequiredFields = ["C_Nom", "C_Prenom", "C_Sexe"];
    $(document).ready(function () {
        var Len = RequiredFields.length;
        var RetVal = true;
        for (i = 0; i < Len; i++) {
            $('#' + RequiredFields[i]).change(function () { CheckDataValidity(); });
            $('#' + RequiredFields[i]).keyup(function () { CheckDataValidity(); });
        }
        CheckDataValidity();
    });
    function CheckDataValidity() {
        
        var Len = RequiredFields.length;
        var RetVal = true;
        for (i = 0; i < Len; i++) {
            var Field = $('#' + RequiredFields[i]);
            if (!Field.val()) {
                Field.css("background-color", "#f9e0e0");
                RetVal = false;
            } else {
                Field.css("background-color", "");
            }
        }
        if (!RetVal) $('#BtnSave').attr("disabled", "disabled"); else $('#BtnSave').removeAttr("disabled");
    }