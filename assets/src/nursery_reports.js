//javascript file for nursery_reports using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('nursery_reportsView', []);

app.controller ('nursery_reportsCtrl', function($scope, $http) {

    this.nursery_report = {user:user, id:'', student_id:'', Term:'', Session:'', Class:'', continous_assessment:'', Exam:'', subject:''};
    this.update = {col_name:'', col_value:''};

    $scope.nursery_report_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"nursery_reports", "data":this.nursery_report};
            save_nursery_report($scope, $http, pb);
        } else {
            var data = Object.assign(this.nursery_report, this.update);
            var pu = {"method":"update", "table":"nursery_reports", "data":data};
            update_nursery_report($scope, $http, pu);
        }
    };

    $scope.nursery_report_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_nursery_report_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.nursery_report_delete = function(coln, colv){
        delete_nursery_report($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"nursery_reports_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"nursery_reports"}
    }).then((result) =>{
        $scope.nursery_reports = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_nursery_report($scope, $http, pb){
    $http({
        url: base_api_url+"nursery_reports_http_api.php",
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
        url: base_api_url+"nursery_reports_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"nursery_reports", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.nursery_report = result.data.nursery_report;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_nursery_report($scope, $http, pb){
    $http({
        url: base_api_url+"nursery_reports_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_nursery_report($scope, $http, column, value){
    $http({
        url: base_api_url+"nursery_reports_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"nursery_reports", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

