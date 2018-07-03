//javascript file for applicants using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('applicantsView', []);

app.controller ('applicantsCtrl', function($scope, $http) {

    this.applicant = {user:user, id:'', application_Number:'', full_name:'', email:'', phone:'', application_fee:'', passport_photograph:'', date_of_birth:'', gender:'', nationality:'', state_of_origin:'', religion:'', present_class:'', class_seeking_admission_to:'', home_address:'', previous_school:'', certificate_obtained:'', skills:'', other_information:'', clergy_attestation:'', birth_certificate:'', test_score:'', parent_id:'', completed:'', created_at:'', updated_at:''};
    this.update = {col_name:'', col_value:''};

    $scope.applicant_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"applicants", "data":this.applicant};
            save_applicant($scope, $http, pb);
        } else {
            var data = Object.assign(this.applicant, this.update);
            var pu = {"method":"update", "table":"applicants", "data":data};
            update_applicant($scope, $http, pu);
        }
    };

    $scope.applicant_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_applicant_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.applicant_delete = function(coln, colv){
        delete_applicant($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"applicants_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"applicants"}
    }).then((result) =>{
        $scope.applicants = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_applicant($scope, $http, pb){
    $http({
        url: base_api_url+"applicants_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function show_selected($scope, $http, column, value){
    $http({
        url: base_api_url+"applicants_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"applicants", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.applicant = result.data.applicant;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_applicant($scope, $http, pb){
    $http({
        url: base_api_url+"applicants_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_applicant($scope, $http, column, value){
    $http({
        url: base_api_url+"applicants_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"applicants", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

