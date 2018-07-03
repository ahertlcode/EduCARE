//javascript file for medicals using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('medicalsView', []);

app.controller ('medicalsCtrl', function($scope, $http) {

    this.medical = {user:user, id:'', applNo:'', applVulDis:'', applBldGrp:'', applGenoType:'', applDocVisit:'', applIllType:'', applAllergies:'', applSpecialNeed:'', faDoctorName:'', faDoctorAddr:'', faDoctorPhone:'', applMedicalReport:'', created_at:'', updated_at:''};
    this.update = {col_name:'', col_value:''};

    $scope.medical_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"medicals", "data":this.medical};
            save_medical($scope, $http, pb);
        } else {
            var data = Object.assign(this.medical, this.update);
            var pu = {"method":"update", "table":"medicals", "data":data};
            update_medical($scope, $http, pu);
        }
    };

    $scope.medical_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_medical_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.medical_delete = function(coln, colv){
        delete_medical($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"medicals_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"medicals"}
    }).then((result) =>{
        $scope.medicals = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_medical($scope, $http, pb){
    $http({
        url: base_api_url+"medicals_http_api.php",
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
        url: base_api_url+"medicals_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"medicals", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.medical = result.data.medical;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_medical($scope, $http, pb){
    $http({
        url: base_api_url+"medicals_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_medical($scope, $http, column, value){
    $http({
        url: base_api_url+"medicals_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"medicals", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

