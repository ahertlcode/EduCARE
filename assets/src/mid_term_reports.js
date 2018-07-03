//javascript file for mid_term_reports using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('mid_term_reportsView', []);

app.controller ('mid_term_reportsCtrl', function($scope, $http) {

    this.mid_term_report = {user:user, id:'', student_id:'', Term:'', Session:'', Class:'', first_test:'', mid_test:'', subject:''};
    this.update = {col_name:'', col_value:''};

    $scope.mid_term_report_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"mid_term_reports", "data":this.mid_term_report};
            save_mid_term_report($scope, $http, pb);
        } else {
            var data = Object.assign(this.mid_term_report, this.update);
            var pu = {"method":"update", "table":"mid_term_reports", "data":data};
            update_mid_term_report($scope, $http, pu);
        }
    };

    $scope.mid_term_report_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_mid_term_report_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.mid_term_report_delete = function(coln, colv){
        delete_mid_term_report($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"mid_term_reports_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"mid_term_reports"}
    }).then((result) =>{
        $scope.mid_term_reports = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_mid_term_report($scope, $http, pb){
    $http({
        url: base_api_url+"mid_term_reports_http_api.php",
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
        url: base_api_url+"mid_term_reports_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"mid_term_reports", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.mid_term_report = result.data.mid_term_report;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_mid_term_report($scope, $http, pb){
    $http({
        url: base_api_url+"mid_term_reports_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_mid_term_report($scope, $http, column, value){
    $http({
        url: base_api_url+"mid_term_reports_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"mid_term_reports", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

